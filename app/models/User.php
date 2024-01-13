<?php

class User
{
    private $fname;
    private $lname;
    private $email;
    private $password;
    private $conn;

    public function __construct(){
        $this->conn = Database::getInstance();
    }
    public function getFname(){
		return $this->fname;
	}

	public function setFnmae($fname){
		$this->fname = $fname;
	}

	public function getLname(){
		return $this->lname;
	}

	public function setLname($lname){
		$this->lname = $lname;
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
    function getUser($email)
    {
        try {
            $query = "SELECT * FROM users WHERE email = :email";
            $this->conn->prepare($query);
            $this->conn->bind(':email', $email);
            return $this->conn->single();
        } catch (PDOException $e) {
            echo '<script> alert("' . $e->getMessage() . '")</script>';
            return null;
        }
    }
    
    function getUserById($id)
    {
        try {
            $query = "SELECT * FROM users WHERE id = :id";
            $this->conn->query($query);
            $this->conn->bind(':id', $id);
            return $this->conn->single();
        } catch (PDOException $e) {
            echo '<script> alert("' . $e->getMessage() . '")</script>';
            return null;
        }
    }
    public function insertData($fname, $lname, $email, $password)
    {
        try {
            $query = "INSERT INTO users (fname, lname, email, password) VALUES (:fname, :lname, :email, :password)";
            $this->conn->query($query);

            $this->conn->bind(':fname', $fname);
            $this->conn->bind(':lname', $lname);
            $this->conn->bind(':email', $email);
            $this->conn->bind(':password', $password);

            $this->conn->execute();
        } catch (PDOException $e) {
            echo '<script> alert("' . $e->getMessage() . '")</script>';
        }
    }

    public function storeSession($email)
    {
        $_SESSION['email'] = $email;
    }

  
    public function login($email, $password)
    {

        $row = $this->getUser($email);

        if ($row) {

            if (password_verify($password, $row->password)) {
                return $row;
            }
        }

        return false;
    }


    public function findUserByEmail($email)
    {
        $this->conn->query('SELECT * FROM users WHERE email = :email');
        $this->conn->bind(':email', $email);

        $this->conn->execute();

        if ($this->conn->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
