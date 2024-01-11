<?php

class Visitors extends Controller {

    public function __construct()
    {
        
    }
    public function index(){
        $this->view('all/home');
    }

    
}