<?php
//login controller

include 'Model/LoginModel.php';


// class LoginController extends LoginModel {
    

//     public function direction($email,$password){
//         $log = new LoginModel();
//         $results=$this->checkLogin($email,$password);
        
//         if(!$results){
//            return false;
//         }
//         else{
//             return true;
//         }
//     }
//     public function logout(){
//         session_start();
//         session_destroy();
        
//     }
// }
class LoginController extends LoginModel {
    

    public function direction($email,$password){
        $log = new LoginModel();
        $results=$this->checkLogin($email,$password);
        var_dump($results);
        if(!$results){
           return false;
        }
        else{
            return true;
        }
    }
    public function logout(){
        // session_start();
        session_destroy();
        
    }
}