<?php
// config  path
$protocol='http://';
if (strpos($_SERVER['SERVER_PROTOCOL'],'HTTPS')===0){
    $protocol='https://';
}
define('DS',DIRECTORY_SEPARATOR);
define('URL_SITE',$protocol.$_SERVER['SERVER_NAME']);
define('APP_PATH',dirname(__FILE__));
define('DASHBOARD_NAME','dashboard');

