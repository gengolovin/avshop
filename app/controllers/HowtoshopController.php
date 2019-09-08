<?php


namespace app\controllers;


class HowtoshopController extends AppController {

    public function viewAction()
    {
        $alias = h($this->route['alias']);
        if ($alias =='orders' || $alias =='pay' || $alias =='delivery' || $alias =='discount'){
             $alias = $alias;
        }else{
            throw new \Exception('Страница не найдена', 404);
        }

        if ($alias =='orders') $info_title ='Как разместить заказ';
        if ($alias =='pay') $info_title ='Как оплатить заказ';
        if ($alias =='delivery') $info_title ='Доставка заказ';
        if ($alias =='discount') $info_title ='Cкидки товара';



        $this->setMeta($info_title, $info_title,$info_title);
        $this->set(compact('alias', 'info_title'));
    }

}