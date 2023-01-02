<?php
include_once '../classes/Database.php';
class Categorie extends dbh{
    public function AjouterCategorie($nom,$description,$photo){
        $sql = "insert into categorie (nom,description,photo) values(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$photo]);
    }

    public function listcategorie(){
        $sql = "select * from categorie";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
       return $stmt->fetchAll();
        
    }

    public function getcategorie($id){
        $sql = "SELECT * FROM categorie WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
    }
    //update data
    public function updatecategorie($nom,$description,$photo){
        $sql = "UPDATE categorie SET  nom=?, description=?, photo=?WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$photo]);
    }
   
    public function deletecategorie($id){
        $sql = "delete from categorie where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function searchcategorie($nom){
        $sql = "select * from categorie where nom like '%$nom%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

} 
