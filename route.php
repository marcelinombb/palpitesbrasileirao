<?php

include_once "vendor/autoload.php";
session_start();

//exemplo de url classController/method/params

$url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_STRING);
$namespace = "app\\Controllers\\";
if($url) {
   $options = explode("/",$url);
   $options['controller'] = $namespace.$options[0]."Controller";
   $options['method'] = $options[1];
   $options['params'] = array();
   if (!empty($options[2])){
       $options['params'] = explode(',',$options[2]);
   }
   //print_r($options);
   call_user_func_array(array(new $options['controller'], $options["method"] ),$options['params']);
}else{
    header("Location:".BASE_URL);
}
