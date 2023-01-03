<?php
require_once '../Model/CommandeModel.php';
class CommandeController{
    protected $commande;
    public function __construct(){
        $this->commande = new CommandeModel();
    }
    public function listCommande(){
        $result = $this->commande->listCommande();
        return $result;
    }
    public function getCommande($id){
        $result = $this->commande->getCommande($id);
        return $result;
    }
    public function deleteCommande($id){
        $this->commande->delete($id);
    }
    public function hideCommande($id){
        $this->commande->hideCommande($id);
    }
    public function saveCommande($date_creation,$date_envoi,$date_livraison,$client_id,$prix_unitaire,$quantite,$prix_total_produit,$prix_total_commande){
        $this->commande->saveCommande($date_creation,$date_envoi,$date_livraison,$client_id,$prix_unitaire,$quantite,$prix_total_produit,$prix_total_commande);
    }
}