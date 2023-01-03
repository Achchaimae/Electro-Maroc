<?php
include_once '../classes/Database.php';
class ClientModel extends dbh{
    public function listclient(){
        $sql = "select * from client";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
       return $stmt->fetchAll();
        
    }
    public function getclient($id){
        $sql = "SELECT * FROM client WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
    }
    public function deleteclient($id){
        $sql = "DELETE from client where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function searchclient($nom){
        $sql = "SELECT * from client where nom like '%$nom%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    

}
