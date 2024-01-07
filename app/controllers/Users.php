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
        $pass = password_hash($_POST['password'] , PASSWORD_BCRYPT);
        $image = $profil ;

        $this->model->insert($fname,$lname,$image,$email,$pass);
        echo "Upload Successful";       
    }
}