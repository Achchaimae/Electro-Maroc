<?php
// Path: index.php
session_start() ;
// require_once 'Model/LoginModel.php';
// include 'Controller/CategorieController.php';
// include 'Controller/CommandeController.php';
// include 'Controller/LoginController.php';
require_once 'Controller/LoginController.php';
include 'Controller/ProductController.php';

// $commande = new CommandeController();
// $login = new LoginController();
// $product = new ProductController();
// $categorie = new CategorieController();

// $LoginModel = new LoginModel();
$loginController = new LoginController;

//logout
if(isset($_GET["a"])){
    if($_GET["a"]=="log"){
        $loginController->logout();
        require_once 'View/home.php';
    }
}
//login
// if(isset($_POST["email"])&&isset($_POST["password"])){
//     session_start();
//     $email=$_POST["email"];
//     $password=$_POST["password"];
//     $login->direction($email,$password);
//     if($login==true){
//         $_SESSION["email"] = $email;
//         header("location:View/Dashbord.php");
//             //   include_once "View/admin.php";
//         }
//         else
//             {
//                 header("location:View/home.php");
//             }
//     }else{
//         header("location:View/home.php");
//     }
if(isset($_POST["email"])&&isset($_POST["password"])){
        // echo "inside";
    session_start();
       $email = $_POST["email"];
       $password = $_POST["password"];
       $test=$loginController->direction($email,$password);
      if($test==true){
            $_SESSION["email"] = $email;
        header("location:View/Dashbord.php");
            //   include_once "View/admin.php";
        }else{
            header("location:View/login.php");
            //
         echo "alert('email or password is incorrect');";
        }
    }else{
        include_once "View/home.php";
    }
        
//ajouter produit
if(isset($_POST["nom"])&&isset($_POST["prix"])&&isset($_POST["categorie"])&&isset($_POST["description"])){
    $nom=$_POST["nom"];
    $prix=$_POST["prix"];
    $categorie=$_POST["categorie"];
    $description=$_POST["description"];
    $product->addProduct($nom,$prix,$categorie,$description);
    header("location:View/Dashbord.php");
}
//ajouter categorie

if(isset($_POST["nomCategorie"])&&isset($_POST["descriotion"])&&isset($_POST["photo"])){
    $nom=$_POST["nomCategorie"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];
    $categorie->addCategorie($nomCategorie);
    header("location:View/Dashbord.php");
}
require 'View/home.php';



