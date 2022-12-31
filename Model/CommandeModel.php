<?php
include_once 'classes/Database.php';
class CommandeModel extends dbh{

    public function listCommande(){

        $sql = "select * from commande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $resulta = $stmt->fetchAll();
        return $resulta;
        
    }
    // id	date_creation	date_envoi	date_livraison	client_id	prix_unitaire	quantite	prix_total_produit	prix_total_commande
    public function getDemande($id){

        $sql = "select * from commande where id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }

    public function delete($id){
        
        $sql = "delete from commande where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
    }
    public function hide($id){
        
        $sql = "update commande set status = 0 where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
    }
    public function saveCommande($date_creation,$date_envoi,$date_livraison,$client_id,$prix_unitaire,$quantite,$prix_total_produit,$prix_total_commande){
        
        $sql = "insert into commande (date_creation,date_envoi,date_livraison,client_id,prix_unitaire,quantite,prix_total_produit,prix_total_commande) values (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$date_creation,$date_envoi,$date_livraison,$client_id,$prix_unitaire,$quantite,$prix_total_produit,$prix_total_commande]);
        
    }
 
} 



        
        