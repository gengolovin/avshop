<?php


namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController {

    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product',"alias= ? AND status = '1'",[$alias]);
        if(!$product){
            throw new \ErrorException('Страница не найдена',404);
        }


        //хлебные крошки

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);


        //связанные товары

        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id= ?",[$product->id]);

       //запись в куки запрошенного товара

        $p_model = new Product();

        $p_model->setRecentlyViewed($product->id);


        //просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        $count = \R::count('product');
        if (empty($r_viewed)){
            for ($i=0; $i<=$count; $i++){
                $r_product[$i] = rand(1,8);
            }
            $recentlyViewed =\R::find('product','id IN ('.\R::genSlots($r_product).') LIMIT 2',$r_product);

        }else{
            $recentlyViewed =\R::find('product','id IN ('.\R::genSlots($r_viewed).') LIMIT 2',$r_viewed);

        }




        //галерея

        $gallery = \R::findAll('gallery','product_id = ?',[$product->id]);


        //модификации

        $mods = \R::findAll('modification','product_id = ?', [$product->id]);

        $this->setMeta($product->title,$product->description,$product->keywords);
        $this->set(compact('product', 'related','gallery','recentlyViewed','breadcrumbs','mods'));



    }

}