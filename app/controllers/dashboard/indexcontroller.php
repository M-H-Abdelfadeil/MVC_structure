<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;
class IndexController extends Controller{
    public function index(){
        $this->model=$this->model('Dashboard','index');
        $data=$this->model->index();
        $this->view('dashboard'.DS.'index',$data);
    }
}