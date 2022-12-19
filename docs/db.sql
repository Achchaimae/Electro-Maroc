CREATE DATABASE Electo_Maroc;
USE Electo_Maroc;
CREATE TABLE admin (
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,

)
CREATE TABLE client (
id INT NOT NULL AUTO_INCREMENT,
nom VARCHAR(50) NOT NULL,
prenom VARCHAR(50) NOT NULL,
adresse VARCHAR(50) NOT NULL,
telephone VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
adresse VARCHAR(50) NOT NULL,
ville VARCHAR(50) NOT NULL,
)
CREATE TABLE produit (
id INT NOT NULL AUTO_INCREMENT,
ref VARCHAR(50) NOT NULL,
libelle VARCHAR(50) NOT NULL,
code_barre VARCHAR(50) NOT NULL,
prix_achat VARCHAR(50) NOT NULL,
prix_final VARCHAR(50) NOT NULL,
prix_offre VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
photo VARCHAR(50) NOT NULL,
categorie foreign key (id) references categorie(id),
)
CREATE TABLE categorie (
id INT NOT NULL AUTO_INCREMENT,
nom VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
photo VARCHAR(50) NOT NULL,
)

CREATE TABLE commande (
id INT NOT NULL AUTO_INCREMENT,
date_creation DATE NOT NULL,
date_envoi DATE NOT NULL,
date_livraison DATE NOT NULL,
id_client foreign key (id) references client(id),
prix_unitaire VARCHAR(50) NOT NULL,
quantite VARCHAR(50) NOT NULL,
prix_total_produit VARCHAR(50) NOT NULL,
prix_total_commande VARCHAR(50) NOT NULL,
)
