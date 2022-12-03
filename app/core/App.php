<?php

class App {

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
        } else {
            $filename = "../app/controllers/_404.php";
            require($filename);
        }
    }
    
}