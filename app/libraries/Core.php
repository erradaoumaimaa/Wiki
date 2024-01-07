<?php

 class Core{

    protected  $currentController = 'Pages';
    protected  $currentMethode = 'index';
    protected  $params = [];


    public function __construct(){
            $url = $this->getURL();
            $controller =ucwords($url[0]); // user  -> User 

            if(file_exists(APP_ROOT . '/controllers/{$controller}.php')){
                
                
                $this->currentController = $controller;
                unset($url[0]);
            }
            require_once APP_ROOT . "/controllers/{$controller}.php";

            $this->currentController = new $currentController; // il a devient objet 

            if(isset($url[1]) && method_exists($this->currentController, $url[1])){
                $this->currentMethode = $url[1];
                unset($url[1]);
            }

            $this->params = $url  ? array_values($url) : [];
            call_user_func_array([$this->currentController, $this->currentMethode ], $this->params) ;
    }
    //function pour diviser URL    user/add/3 separer par /
    public function getURL(){
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);  //pour eliminer illegal lettres 
            $url = explode('/' , $url); // array
            return $url;
        }
    }
}