<?php
namespace BLOG\Controller\Dashboard;
use BLOG\Controller\Controller;
class IndexController extends Controller{


    public function index(){
        //echo "index";
        echo $this->view('dashboard'.DS.'index');
    }
}