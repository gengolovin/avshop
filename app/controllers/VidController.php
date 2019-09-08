<?php


namespace app\controllers;


class VidController extends AppController {

    public function viewAction(){
        $id =!empty($_GET['id']) ? (int)$_GET['id'] : null;
        if($id){
            $product = \R::findOne('product','id = ?',[$id]);
            if($product){
                redirect(PATH . '/product/' . $product['alias'],false);
            }else{
                throw new \ErrorException('Страница не найдена',404);
            }

        }
    }

}