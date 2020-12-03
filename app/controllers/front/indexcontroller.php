<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;
class IndexController extends Controller{


    public function index(){
        print_r($this->params);
        $this->view('front/index');
    }
}