<?php

class Tag {

    private $id;
    private $title;
	private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function settitle($title){
		$this->title = $title;
	}


}