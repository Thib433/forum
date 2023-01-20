<?php
//On définit la class
class Answer {
    //on définit nos variables
    private $db;
    private $id_q;
    private $date_publication_r;
    private $contenu_r;
    private $pseudo_auteur_r;

    //on définit la fonction construct pr construire les objets avec les variables comme paramètre
    public function __construct($db,$id_q, $date_publication_r, $contenu_r, $pseudo_auteur_r) {
            $this->db = $db;
            $this->id_q = $id_q;
            $this->date_publication_r = $date_publication_r;
            $this->contenu_r = nl2br(htmlspecialchars($contenu_r));
            $this->pseudo_auteur_r = $pseudo_auteur_r;
    }
    public function save() { //fonction pr insérer les reponses ds la bdd
      $this->db->query('INSERT INTO reponse (id_q, date_publication_r, contenu_r, pseudo_auteur_r) VALUES ("'.$this->id_q.'", "'.$this->date_publication_r.'", "'.$this->contenu_r.'", "'.$this->pseudo_auteur_r.'")');
    }
  }