<?php

class Category {

    private $name;
    private $description;
    private $picture;

    public function __construct()
    {
    }

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getPicture(){
		return $this->picture;
	}

	public function setPicture($picture){
		$this->picture = $picture;
	}
}