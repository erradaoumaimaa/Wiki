<?php

class Users extends Controller{

    private $model;

    public function __construct(){
        $this->model = $this->model("User");
    }


    public function signup(){
        $this->view("signup");
    }

    public function add(){
        $valid_extensions = array('jpeg', 'jpg', 'png');
        $path = APPROOT . "/../public/uploads/";

        $img = $_FILES['profil']['name'];
        $tmp = $_FILES['profil']['tmp_name'];

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        $profil = strtolower(rand(1000,1000000).$img);

        if(in_array($ext, $valid_extensions)) { 
            $path = $path.$profil; 
            if(move_uploaded_file($tmp,$path)) {
                echo "Upload Failed";
            } else {
                echo "Upload Successful";
            }
        }

        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        var_dump($_POST);
        $pass = password_hash($_POST['password'] , PASSWORD_BCRYPT);
        $image = $profil ;

        $this->model->insert($fname,$lname,$image,$email,$pass);
        echo "Upload Successful";
               
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $email = $_POST['email'];
             $password = $_POST['password'];

        $row = $this->model->fetch($email);

        if ($row && password_verify($password, $row->password)){

            $_SESSION['id'] = $row->id;
            $_SESSION['fname'] = $row->fname;

            switch ($row->role){
                case '1':
                    $_SESSION['role'] = 'admin';
                break;
                case '0':
                    $_SESSION['role'] = 'auteur';
                break ;
            }
        }

        }
       
        $this->view("signin");
    }

    public function logout() 
    {
        session_unset();
        // session_destroy();
    }
    


}
