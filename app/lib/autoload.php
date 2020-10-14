<?php
spl_autoload_register(function ($class){
    $class=str_replace('BLOG','',$class);
    $class=strtolower($class);
    $file= 'app'.$class.'.php';
    if (file_exists($file))include $file;
});