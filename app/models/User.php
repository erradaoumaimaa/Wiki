<?php

class User{
    
    private $fname;
    private $lname;
    private $image;
    private $email;
    private $password;
    private $role ;
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    
    public function getFirstname(){
		return $this->fname;
	}

	public function setFirstname($fname){
		$this->fname= $fname;
	}

	public function getLname(){
		return $this->lname;
	}

	public function setLname($lname){
		$this->lname = $lname;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
    
    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }
    public function fetch($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
    public function insert($fname,$lname,$image,$email,$password){
            $sql= "INSERT INTO users (fname,lname,image,email,password,role) VALUES(:fname,:lname,:image,:email,:password, 0)";
            $this->db->query($sql);
            $this->db->bind(":fname", $fname);
            $this->db->bind(":lname", $lname);
            $this->db->bind(":image", $image);
            $this->db->bind(":email", $email);
            $this->db->bind(":password", $password);
            $this->db->execute();
    }



}