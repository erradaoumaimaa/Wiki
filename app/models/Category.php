<?php

class Category {

    private $id;
    private $title;
    private $description;
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

	public function setTitle($title){
		$this->title = $title;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}
    public function getAll()
    {
        $this->db->query("SELECT c.*, COUNT(w.id) AS countWikis FROM Categories c LEFT JOIN Wikis w ON c.id = w.category_id GROUP BY c.id ORDER BY c.created_at DESC LIMIT 6");
        return $this->db->resultSet();
    }
    public function getOne($id)
    {
        $this->db->query("SELECT * from categories where id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
	public function read(){

        $sql = "SELECT * FROM categories";
        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function insert($category){

        $name = $category->getTitle();
        $description = $category->getDescription();

        $sql = "INSERT INTO categories (title, description) VALUES (:name, :description)";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":description", $description);
        $this->db->execute();

    }

    public function edit($category){

        $id = $category->getId();
        $name = $category->getTitle();
        $description = $category->getDescription();

        $sql = "UPDATE categories SET name = :name, description = :description WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":name", $name);
        $this->db->bind(":description", $description);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function delete($id){

        $sql = "DELETE FROM categories WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->execute();

    }

    public function fetch($id){
        $sql = "SELECT * FROM categories WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

    public function getColumns(){
        $sql = "DESCRIBE `categories`";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}