<?php
class Categorie{
  private $nom;
  private $db;

  public function __construct($nom,$bdd_f){
    $this->nom = htmlspecialchars($nom);
    $this->db = $bdd_f;
  }
  public function save(){
    
    $this->db->query('INSERT INTO f_categories (Nom) VALUES ("' . $this->nom . '")');
    // Enregistrer la catégorie ici
  }

}