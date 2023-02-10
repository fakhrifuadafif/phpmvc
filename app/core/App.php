<?php
    class App{
        public function __construct()
        {
            $url = $this->pharseURL();
            var_dump($url);  
        }
        public function pharseURL()
        {
            if ( isset($_GET['url'])){
                $url = $_GET['url'];
                return $url;
        }
        }
        
        
    }