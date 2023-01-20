<?php
//On définit la class
class Categorie{
  private $nom; //on définit nos variables
  private $db;

  public function __construct($nom,$bdd_f){ //on définit la fonction construct pr construire les objets avec les variables comme paramètre
    $this->nom = htmlspecialchars($nom);
    $this->db = $bdd_f;
  }
  public function save(){ // fonction pr enregestrer la categorie
    
    $this->db->query('INSERT INTO f_categories (Nom) VALUES ("' . $this->nom . '")');
    // Enregistrer la catégorie ici
  }

}