<?php


namespace app\models\admin;


use app\models\AppModel;

class Brand extends AppModel {
    public $attributes = [
        'title' => '',
        'alias' => '',
        'img' => '',
        'description' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['alias'],
        ],
    ];

}