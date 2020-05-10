<?php 
namespace app\Controller;

class Controller{

    public function parseUrl()
    {
        $this->url = rtrim(filter_input(INPUT_GET, "url", FILTER_SANITIZE_STRING));

        return $this->url;
    }
    
}



 ?>