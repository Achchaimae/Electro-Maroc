<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/Dashbord.css">
    <link rel="stylesheet" href="../assets/build/output.css">

    
    <title>Dashbord</title>
</head>
<body>
    <section>
<div class="sidenav">
<img src="../assets/image/wtlogo.png"  alt="">
  <a href="#commande">Command</a>
  <a href="#categorie">Categories</a>
  <a href="#product">Products</a>
  <a href="#client">Clients</a>
  <a href="../index.php?a=log"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>
</section>
<section class="main">
  <div id="categorie">
   <?php include "includes/categorie.php"; ?>
  </div>
  <div id="client">
    <?php include "includes/client.php"; ?>
  </div>
  <div id="product">
    <?php include "includes/product.php"; ?>
  </div>
  <div id="command">
    <?php include "includes/commande.php"; ?>
  </div>
</section>
   
</body>
</html> 
