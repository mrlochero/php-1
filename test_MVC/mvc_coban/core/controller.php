<?php
class Controller{
        static function  model($model){
        require_once "../mvc_coban/models/".$model .".php";
        return new $model;
    }

        static function views($views, $data=[]){
        require_once "../mvc_coban/views/".$views .".php";
    }
}