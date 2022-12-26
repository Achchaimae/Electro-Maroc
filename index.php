<?php
//define("PROJ_DIR", dirname(__FILE__));

require_once 'Controller/LoginController.php';
require_once 'Model/LoginModel.php';

$LoginModel = new LoginModel();
$loginController = new LoginController;

if(isset($_GET["a"])){
    if($_GET["a"]=="log"){
        $loginController->logout();
        header("location:View/home.php");
    }
}

//test login
 if(isset($_POST["email"])&&isset($_POST["password"])){
//     echo "inside";
session_start();
   $email = $_POST["email"];
   $password = $_POST["password"];
   $loginController->direction($email,$password);
  if($loginController==true){
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    header("location:View/Dashbord.php");
        //   include_once "View/admin.php";
    }else{
            header("location:View/home.php");
    }
}else{
    header("location:View/home.php");
}
    





