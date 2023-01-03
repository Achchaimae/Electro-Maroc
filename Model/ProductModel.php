<?php
include_once '../classes/Database.php';
class ProductModel extends dbh{
  	
    public function Ajouter($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id){
        $sql = "insert into produit (ref,libelle,code_barre,prix_achat,prix_final,prix_offre,description,photo,categorie_id) values(?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id]);
    }

    public function listproduit(){
        $sql = "select * from produit";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
       return $stmt->fetchAll();
        
    }

    public function getproduit($id){
        $sql = "SELECT * FROM produit WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
    }
    //update data
    public function updateproduit($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id){
        $sql = "UPDATE produit SET ref=? ,libelle=?,code_barre=?,prix_achat=?,prix_final=?,prix_offre=?,description=?,photo=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id]);
    }
   
    public function deleteproduit($id){
        $sql = "DELETE from produit where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function searchproduit($libelle){
        $sql = "SELECT * from produit where nom like '%$libelle%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    public function listdesc(){
        $sql = "SELECT * from produit order by prix_offre desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
       return $stmt->fetchAll();
    }
    public function listasc(){
        $sql = "SELECT * from produit order by prix_offre asc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
       return $stmt->fetchAll();
    }

} 
