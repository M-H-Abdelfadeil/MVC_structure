<?php
namespace BLOG\Controller;
class Controller{
    public function notfound(){
        include APP_PATH.DS.'views'.DS.'notfound.view.php';
    }
    public function view($view,$data=null){
       $file_view=APP_PATH.DS.'views'.DS.$view.'.vriew.php';
        if (file_exists($file_view)){
            include $file_view;
        }else{
            include APP_PATH.DS.'views'.DS.'notfound.view.php';
        }
    }
    public function model($model){

    }


}