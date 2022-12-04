<?php

class App {

    private $controller = 'Home';
    private $method = 'index';

    // Splits URL string into an array
    private function splitURL() {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', $URL);
        return $URL;
    }

    // Load the page controller file from the URL parameter
    public function loadController() {
        $URL = $this->splitURL();
        
        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        
        if( file_exists($filename) ) {
            require($filename);
            $this->controller = ucfirst($URL[0]);
        } else {
            $filename = "../app/controllers/_404.php";
            require($filename);
            $this->controller = '_404';
        }

        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
    
}