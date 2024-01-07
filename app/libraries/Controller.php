<?php
//qui permet d'obtenir une instace 
class Controller{

    // fonction qui permet de require classe et creer une instance  qui prend en parame le nom du model class 
    public function model($model){
        require_once  APP_ROOT ."models/{$model}.php";
        
        return new $model ;
    }


    public function view($view , $data = []){
        if(file_exists(APP_ROOT . "views/{$view}.php")){
            require_once APP_ROOT ."views/{$view}.php";
        }else{
            die("{$view} does  not exists");
        }
    }
   


}