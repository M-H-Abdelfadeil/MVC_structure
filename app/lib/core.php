<?php
namespace BLOG\LIB;
class Core {
    private $access='Front';
    private $controller="index";
    private $method="default";
    private $params=[];
    public function __construct(){
        $url=filter_var($_SERVER['REQUEST_URI'],FILTER_SANITIZE_STRING);
        $url=trim($url,'/');
        $url_exp=explode('/',$url);
        if (isset($url_exp[0])&&!empty($url_exp[0])){
            if ($url_exp[0]==DASHBOARD_NAME){
                $this->access=DASHBOARD_NAME;
                $url_exp=explode('/',$url,4);
                if (isset($url_exp[1])&&!empty($url_exp[1])){
                    $this->controller=$url_exp[1];
                }
                if (isset($url_exp[2])&&!empty($url_exp[2])){
                    $this->method=$url_exp[2];
                }
                if (isset($url_exp[3])&&!empty($url_exp[3])){
                    $this->params=explode('/',$url_exp[3]);
                }

            }else{
                $this->controller=$url_exp[0];
                $url_exp=explode('/',$url,3);
                if (isset($url_exp[1])&&!empty($url_exp[1])){
                    $this->method=$url_exp[1];
                }
                if (isset($url_exp[2])&&!empty($url_exp[2])){
                    $this->params=explode('/',$url_exp[2]);
                }
            }
        }

        print_r($this->params) ;


    }
}
