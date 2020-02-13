CREATE TABLE categorie (
  cat_id int(11) AUTO_INCREMENT,
  cat_nom varchar(50),
  PRIMARY KEY (cat_id)
);
CREATE TABLE clients (
  cl_id int(11) AUTO_INCREMENT,
  cl_nom varchar(50),
  cl_prenom varchar(50),
  cl_mail varchar(50),
  cl_tel varchar(14),
  cl_identif varchar(50),
  cl_mdp char(60),
  cl_ddn date,
  cl_adresse varchar(100),
  cl_ville varchar(50),
  cl_cp varchar(5),
  PRIMARY KEY (cl_id)
);
CREATE TABLE commande (
  co_id int(11) AUTO_INCREMENT,
  ldc_date date,
  PRIMARY KEY (co_id)
);
CREATE TABLE fournisseur (
  fourni_id int(11) AUTO_INCREMENT,
  fourni_nom varchar(100),
  fourni_tel varchar(14),
  fourni_mail varchar(100),
  fourni_siret int(14),
  fourni_adresse varchar(100),
  fourni_ville varchar(100),
  fourni_pers_join varchar(50),
  fourni_prix decimal(6,2),
  PRIMARY KEY (fourni_id)
);
CREATE TABLE ligne_de_commande (
  ldc_id int(11) AUTO_INCREMENT,
  ldc_date date,
  co_id int(11),
  PRIMARY KEY (ldc_id),
  KEY FK_co_id (co_id)
);
CREATE TABLE livraison (
  li_id int(11) AUTO_INCREMENT,
  cl_adresse varchar(100),
  cl_ville varchar(100),
  cl_cp varchar(5),
  cl_nom varchar(100),
  cl_prenom varchar(100),
  li_date_envoie datetime,
  PRIMARY KEY (li_id)
);
CREATE TABLE personnels (
  pers_id int(11) AUTO_INCREMENT,
  pers_nom varchar(100),
  pers_prenom varchar(50),
  pers_mail varchar(50),
  pers_tel varchar(14),
  pers_identif varchar(20),
  pers_mdp char(60),
  PRIMARY KEY (pers_id)
);
CREATE TABLE produits (
  prod_id int(11) AUTO_INCREMENT,
  prod_ref varchar(10),
  prod_lib varchar(50),
  prod_desc varchar(1000),
  prod_prix decimal(6,2),
  prod_stock int(11),
  prod_ext varchar(4),
  prod_ajout date,
  prod_modif datetime,
  prod_bloque tinyint(1),
  prod_alt varchar(200),
  prod_title varchar(100),
  cat_id int(11),
  fourni_id int(11),
  PRIMARY KEY (prod_id),
  KEY FK_cat_id (cat_id),
  KEY FK_fourni_id (fourni_id)
);