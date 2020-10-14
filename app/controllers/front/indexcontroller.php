<?php
namespace BLOG\Controllers\Front;
use BLOG\Controllers\Controller;
class IndexController extends Controller{


    public function index(){
        $this->view('front/index');
    }
}