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

    public function getCats()
    {
        $this->db->query("SELECT DISTINCT * from categories");
        return $this->db->resultSet();
    }
    public function getArchived()
    {
        $this->db->query(
            "SELECT c.id, c.title, c.description, 
            COUNT(w.id) AS Total_Wikis,
            SUM(CASE WHEN w.removed = 2 THEN 1 ELSE 0 END) AS Archived_Count
            FROM categories c
            LEFT JOIN wikis w ON c.id = w.category_id
            GROUP BY c.id"
        );
        return $this->db->resultSet();
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

    public function Add($newData)
    {
        try {
            $this->db->query("INSERT INTO categories (title, description) VALUES(:Title, :Description)");
            $this->db->bind(':Title', $newData['title']);
            $this->db->bind(':Description', $newData['description']);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Update($newData)
    {
        try {
            $this->db->query("UPDATE categories SET Title = :Title, Description = :Description, created_at = :created_at WHERE id = :id");
            $this->db->bind(':id', $newData['id']);
            $this->db->bind(':Title', $newData['title']);
            $this->db->bind(':Description', $newData['description']);
            $current = new DateTime('now');
            $this->db->bind(':created_at', $current->format('Y-m-d H:i:s'));

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Delete($Category_ID)
    {
        try {
            $this->db->query("DELETE FROM categories WHERE id = :Category_ID");
            $this->db->bind(':Category_ID', $Category_ID);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}