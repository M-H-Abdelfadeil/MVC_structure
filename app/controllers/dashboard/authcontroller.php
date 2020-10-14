<?php
namespace BLOG\Controllers\Dashboard;
use BLOG\Controllers\Controller;
class AuthController extends Controller{

    public function index(){
        $this->view('dashboard/index');
    }
    public function login(){
        $this->view('dashboard/auth/login');

    }

}