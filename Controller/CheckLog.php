<?php
    if(!isset($_SESSION['email'])){
        header('Location: ../View/home.php');
    }
    else{
        header('Location: ../View/Dashbord.php');
    }
?>