<?php

include_once('../core/databaseAction.php');
class Question {
    private $db;
    private $titre;
    private $sujet;
    private $contenu;
    private $date;
    private $auteur;
  
    public function __construct($db, $titre, $sujet, $contenu, $date, $auteur) {
      $this->db = $db;
      $this->titre = $titre;
      $this->sujet = $sujet;
      $this->contenu = $contenu;
      $this->date = $date;
      $this->auteur = $auteur;
    }
  public function insertIntoDatabase() {
    $this->db->query('INSERT INTO questions (titre, objet, Contenu,pseudo_auteur, date_publication) VALUES ("'.$this->titre.'", "'.$this->sujet.'"," '.$this->contenu.'", "'.$this->auteur.'"," '.$this->date.'")');
  }
}


