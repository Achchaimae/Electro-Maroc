-- Date: 2019-12-12 15:00:00

-- admin
CREATE DATABASE Electo_Maroc;
USE Electo_Maroc;
CREATE TABLE admin (
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
PRIMARY KEY (id)
);
-- client
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
PRIMARY KEY (id)
);
-- produit
CREATE TABLE produit (
id INT NOT NULL AUTO_INCREMENT,
ref VARCHAR(50) NOT NULL,
libelle VARCHAR(50) NOT NULL,
code_barre VARCHAR(50) NOT NULL,
prix_achat VARCHAR(50) NOT NULL,
prix_final VARCHAR(50) NOT NULL,
prix_offre VARCHAR(50) NOT NULL,
quantite VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
photo VARCHAR(50) NOT NULL,
categorie_id INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (categorie_id) REFERENCES categorie(id)
);
-- categorie
CREATE TABLE categorie (
id INT NOT NULL AUTO_INCREMENT,
nom VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
photo VARCHAR(50) NOT NULL,
PRIMARY KEY (id)
);
-- commande
CREATE TABLE commande (
id INT NOT NULL AUTO_INCREMENT,
date_creation DATE NOT NULL,
date_envoi DATE NOT NULL,
date_livraison DATE NOT NULL,
client_id INT NOT NULL,
prix_unitaire VARCHAR(50) NOT NULL,
quantite VARCHAR(50) NOT NULL,
prix_total_produit VARCHAR(50) NOT NULL,
prix_total_commande VARCHAR(50) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (client_id) REFERENCES client(id)
);
-- commande_produit
CREATE TABLE commande_produit (
id INT NOT NULL AUTO_INCREMENT,
commande_id INT NOT NULL,
produit_id INT NOT NULL,
prix_unitaire VARCHAR(50) NOT NULL,
quantite VARCHAR(50) NOT NULL,
prix_total_produit VARCHAR(50) NOT NULL,

PRIMARY KEY (id),
FOREIGN KEY (commande_id) REFERENCES commande(id),
FOREIGN KEY (produit_id) REFERENCES produit(id)
);



