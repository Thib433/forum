<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
//On définit la class
class Question {
  //on définit nos variables
    private $db;
    private $titre;
    private $sujet;
    private $contenu;
    private $date;
    private $auteur;
  //on définit la fonction construct pr construire les objets avec les variables comme paramètre
    public function __construct($db, $titre, $sujet, $contenu, $date, $auteur) { 
      $this->titre = $titre;
      $this->sujet = $sujet;
      $this->contenu = $contenu;
      $this->date = $date;
      $this->auteur = $auteur;
    }
  public function insertIntoDatabase() { //fonction pr insérer les questions ds la bdd
    $this->db->query('INSERT INTO questions (titre, objet, Contenu,pseudo_auteur, date_publication) VALUES ("'.$this->titre.'", "'.$this->sujet.'"," '.$this->contenu.'", "'.$this->auteur.'"," '.$this->date.'")');
  }
}


