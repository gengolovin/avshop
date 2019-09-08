<?php


namespace app\controllers\admin;


use app\models\admin\Brand;
use avshop\libs\Pagination;

class BrandController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('brand');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $brands = \R::getAll("SELECT * FROM brand LIMIT $start, $perpage");
        $this->setMeta('Список брендов товаров');
        $this->set(compact('brands', 'pagination', 'count'));
    }

    public function addAction(){
        if(!empty($_POST)){
            $brand = new Brand();
            $data = $_POST;
            $brand->load($data);
            $brand->attributes['img'] = 'brand_no_image.jpg';
            if(!$brand->validate($data)){
                $brand->getErrors();
                redirect();
            }
            if($brand->save('brand')){
                $_SESSION['success'] = 'Бренд добавлен';
                redirect();
            }
        }
        $this->setMeta('Новый бренд');
    }

    public function brandEditAction(){
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $brand = new Brand();
            $data = $_POST;
            $brand->load($data);
            $img_brand = \R::load('brand',$id);
            if($img_brand->img == 'brand_no_image.jpg') {
               $brand->attributes['img'] ='brand_no_image.jpg';
            }else{
               $brand->attributes['img'] = $img_brand->img;
            }
            if (!$brand->validate($data)) {
                $brand->getErrors();
                redirect();
            }
            if ($brand->update('brand', $id)) {
                $_SESSION['success'] = "Изменения сохранены";
                redirect();
            }
        }

        $id = $this->getRequestID();
        $brand = \R::load('brand', $id);
        $this->setMeta('Редактирование бренда');
        $this->set(compact('brand'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        $count = \R::count('product', "brand_id = ? AND status = '1'", [$id]);
        if($count){
            $_SESSION['error'] = 'Удаление невозможно, в действующих товарах есть такой бренд';
            redirect();
        }
        \R::exec('DELETE FROM brand WHERE id = ?', [$id]);
        $_SESSION['success'] = 'Удалено';
        redirect();
    }

}