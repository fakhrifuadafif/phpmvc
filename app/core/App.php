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
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
                
        }
        }
        
        
    }