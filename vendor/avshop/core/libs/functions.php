<?php

function debug($arr){
    echo '<pre>'. print_r($arr,true).'</pre>';
}

function redirect($http = false){

    if ($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function discont($cur1, $cur2){
    $sale = 100 - round($cur1*100/$cur2,0);
    $sale = '-'.$sale.'%';
    return $sale;

}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}