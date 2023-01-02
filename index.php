<?php
// Path: index.php
session_start() ;

require_once 'Controller/LoginController.php';
// include 'Controller/ProductController.php';
// include 'Controller/CategorieController.php';

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

    
        }
    }else{
        include_once "View/home.php";
    }
        
//ajouter produit
// admin stuff
if(isset($_POST["ajouterP"])){
    $ref=$_POST["ref"];
    $libelle=$_POST["libelle"];
    $code_barre=$_POST["code_barre"];
    $prix_achat=$_POST["prix_achat"];
    $prix_final=$_POST["prix_final"];
    $prix_offre=$_POST["prix_offre"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];
    $categorie_id=$_POST["categorie_id"];
    $product->addProduct($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id);
    header("location:View/Dashbord.php");
}
//update produit
if(isset($_POST["updateP"])){
    $ref=$_POST["ref"];
    $libelle=$_POST["libelle"];
    $code_barre=$_POST["code_barre"];
    $prix_achat=$_POST["prix_achat"];
    $prix_final=$_POST["prix_final"];
    $prix_offre=$_POST["prix_offre"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];
    $categorie_id=$_POST["categorie_id"];
    $product->updateProduct($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id);
    header("location:View/Dashbord.php");
}
//delete produit
if(isset($_GET["deleteP"])){
    echo "delete";
    $id = $_GET["id"];
    $ProduitController->deleteproduit($id);
    require_once 'View/admin.php';
    
}

//ajouter categorie
if(isset($_POST["ajouterC"])){
    $nom=$_POST["nomCategorie"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];
    $categorie->addCategorie($nomCategorie);
    header("location:View/Dashbord.php");
}
//update categorie
if(isset($_POST["updateC"])){
    $nom=$_POST["nomCategorie"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];
    $categorie->updateCategorie($nomCategorie);
    header("location:View/Dashbord.php");
}
//delete categorie
if(isset($_GET["deleteC"])){
    
    $id = $_GET["id"];
    $categorie->deleteCategorie($id);
    require_once 'View/admin.php';
    
}

//client stuff
//list produit
if(isset($_GET["ascend"])){
    $product->listProductAsc();
    require_once 'View/allproduct.php';
}
if(isset($_GET["descend"])){
    $product->listProductDesc();
    require_once 'View/allproduct.php';
}

