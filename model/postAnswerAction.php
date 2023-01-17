<?php

class Answer {
    private $db;
    private $id_q;
    private $date_publication_r;
    private $contenu_r;
    private $pseudo_auteur_r;
  
    public function __construct($db,$id_q, $date_publication_r, $contenu_r, $pseudo_auteur_r) {
            $this->db = $db;
            $this->id_q = $id_q;
            $this->date_publication_r = $date_publication_r;
            $this->contenu_r = nl2br(htmlspecialchars($contenu_r));
            $this->pseudo_auteur_r = $pseudo_auteur_r;
    }
    public function save() {
      $this->db->query('INSERT INTO reponse (id_q, date_publication_r, contenu_r, pseudo_auteur_r) VALUES ("'.$this->id_q.'", "'.$this->date_publication_r.'", "'.$this->contenu_r.'", "'.$this->pseudo_auteur_r.'")');
    }
  }