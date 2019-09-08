<?php


namespace app\controllers\admin;


class MainController extends AppController {


    public function indexAction(){

        $countNewOrders = \R::count('order', "status_id = '1'");
        $countUsers = \R::count('user');
        $countProducts = \R::count('product');
        $countCategory = \R::count('category');
        $this->set(compact('countNewOrders','countUsers','countProducts','countCategory'));
        $this->setMeta('Панель управления сайтом');

    }

}