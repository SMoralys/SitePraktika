<?php

abstract class AbstractController {

     protected $view;

     puclic function __construct($view) {
     	$this->view = $view;
     }


     abstract protected function render($str);

     public function action404() {
     	header("HTTP/1.1 404 Not Found");
     	header("Status: 404 Not Found");
     }

}


?>