<?php
namespace BLOG\Controllers;
class Controller{
    protected  $model;
    public function notfound(){
        include APP_PATH.DS.'views'.DS.'notfound.view.php';
    }
    public function view($view,$data=0){
       $file_view=APP_PATH.DS.'views'.DS.$view.'.view.php';
        if (file_exists($file_view)){
            include $file_view;
        }else{
            include APP_PATH.DS.'views'.DS.'notfound.view.php';
        }
    }
    public function model($namespace,$model){
        $file_model=APP_PATH.DS.'models'.DS.lcfirst($namespace).DS.$model.'model.php';

        if (file_exists($file_model)){
            $namespaceModel="\BLOG\Models\\".$namespace.'\\'.ucfirst($model).'Model';
            $classModel=new $namespaceModel;
            return $classModel;
        }else{
            echo 'notfound';
        }
        //$namespaceModel="\BLOG\Model\\".$namespace.'\\'.ucfirst($model).'Model';
        //echo $namespaceModel;

    }


}