-- CREATE DATABASE Electo_Maroc;
-- USE Electo_Maroc;
-- CREATE TABLE admin (
-- id INT NOT NULL AUTO_INCREMENT,
-- email VARCHAR(50) NOT NULL,
-- password VARCHAR(50) NOT NULL,

-- )
-- CREATE TABLE client (
-- id INT NOT NULL AUTO_INCREMENT,
-- nom VARCHAR(50) NOT NULL,
-- prenom VARCHAR(50) NOT NULL,
-- adresse VARCHAR(50) NOT NULL,
-- telephone VARCHAR(50) NOT NULL,
-- email VARCHAR(50) NOT NULL,
-- password VARCHAR(50) NOT NULL,
-- adresse VARCHAR(50) NOT NULL,
-- ville VARCHAR(50) NOT NULL,
-- )
-- CREATE TABLE produit (
-- id INT NOT NULL AUTO_INCREMENT,
-- ref VARCHAR(50) NOT NULL,
-- libelle VARCHAR(50) NOT NULL,
-- code_barre VARCHAR(50) NOT NULL,
-- prix_achat VARCHAR(50) NOT NULL,
-- prix_final VARCHAR(50) NOT NULL,
-- prix_offre VARCHAR(50) NOT NULL,
-- description VARCHAR(50) NOT NULL,
-- photo VARCHAR(50) NOT NULL,
-- categorie foreign key (id) references categorie(id),
-- )
-- CREATE TABLE categorie (
-- id INT NOT NULL AUTO_INCREMENT,
-- nom VARCHAR(50) NOT NULL,
-- description VARCHAR(50) NOT NULL,
-- photo VARCHAR(50) NOT NULL,
-- )

-- CREATE TABLE commande (
-- id INT NOT NULL AUTO_INCREMENT,
-- date_creation DATE NOT NULL,
-- date_envoi DATE NOT NULL,
-- date_livraison DATE NOT NULL,
-- id_client foreign key (id) references client(id),
-- prix_unitaire VARCHAR(50) NOT NULL,
-- quantite VARCHAR(50) NOT NULL,
-- prix_total_produit VARCHAR(50) NOT NULL,
-- prix_total_commande VARCHAR(50) NOT NULL,
-- )

CREATE TABLE clients (
  id INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  login VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE admins (
  id INTEGER NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  login VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE products (
  id INTEGER NOT NULL AUTO_INCREMENT,
  reference VARCHAR(255) NOT NULL,
  label VARCHAR(255) NOT NULL,
  barcode VARCHAR(255) NOT NULL,
  purchase_price DOUBLE NOT NULL,
  final_price DOUBLE NOT NULL,
  offer_price DOUBLE NOT NULL,
  description VARCHAR(255) NOT NULL,
  category_id INTEGER NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE categories (
  id INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  photo VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE orders (
  id INTEGER NOT NULL AUTO_INCREMENT,
  date_created DATETIME NOT NULL,
  date_sent DATETIME NOT NULL,
  date_delivered DATETIME NOT NULL,
  client_id INTEGER NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE order_products (
  id INTEGER NOT NULL AUTO_INCREMENT,
  order_id INTEGER NOT NULL,
  product_id INTEGER NOT NULL,
  unit_price DOUBLE NOT NULL,
  quantity INTEGER NOT NULL,
  total_price DOUBLE NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);
