<?php
include_once  'classes/DataBase.php';
// class LoginModel extends dbh{

//     public function checkLogin($email,$password){
//         $sql = "SELECT * FROM admin WHERE email='$email' and password = '$password'";
//         //connect do the connection with db
//         $stmt = $this->connect()->prepare($sql);
//         $stmt->execute(); 
//         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         return $results;
       
//     }
// }
class LoginModel extends dbh{

    public function checkLogin($email,$password){
        $sql = "SELECT * FROM admin WHERE email='$email' and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
       
    }
    public function checkclient($email,$password){
        $sql = "SELECT * FROM client WHERE email='$email' and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
       
    }
}
?>