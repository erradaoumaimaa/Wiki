<?php

class Wiki{

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

  

// insert wikis :
    public function addWiki($newData){
        
    $sql = "INSERT INTO wikis (title , description , ) ";


    }
// update wikis :
    public function update(){
        

    }
 // delete wikis :
    public function delete(){
       
    
    }

//archive wikis:
    public function archive() {
        


    }

 



}