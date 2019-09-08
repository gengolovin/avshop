<?php


namespace app\widgets\menu;

use avshop\App;
use avshop\Cache;

class MenuBrand {

    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container = 'ul';
    protected $class = 'menu';
    protected $table = 'brand';
    protected $cache = 3600;
    protected $cacheKey = 'avshop_menu_brand';
    protected $attrs = [];
    protected $prepend = '';


    public function __construct($options = []){
        $this->tpl = __DIR__ . '/menu_tpl/menu_brand.php';
        $this->getOptions($options);
        $this->run();

    }


    protected function getOptions($options){

        foreach ($options as $k => $v){
            if (property_exists($this, $k)){
                $this->$k = $v;
            }

        }

    }



    protected function run(){

        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);
        if(!$this->menuHtml){
            $this->data = App::$app->getProperty('brand');

            if (!$this->data){
                $this->data = $brands = \R::getAssoc("SELECT * FROM {$this->table}");
            }
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);
            if ($this->cache){
                $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
            }

        }
        $this->output();

    }


    protected function output(){
        $attrs = '';
        if (!empty($this->attrs)){
            foreach ($this->attrs as $k=> $v){
                $attrs .= " $k='$v' ";
            }
        }
      /*  debug($attrs);
        die;*/
        echo "<{$this->container} class ='{$this->class}' $attrs>";
        echo $this->prepend;
        echo $this->menuHtml;
        echo "</{$this->container}>";

    }


    protected function getTree(){
        $tree = [];
        $data = $this->data;
        foreach ($data as $id=>&$node){

                $tree[$id] = &$node;

        }
        return $tree;
    }


    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $id => $brand){
            $str .= $this->catToTemplate($brand,$tab,$id);
        }
        return $str;

    }


    protected function catToTemplate($brand, $tab, $id){
        ob_start();
        require $this->tpl;
        return ob_get_clean();

    }

}