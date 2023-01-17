<?php
include_once('../model/showAllAnswerOfQuestionAction.php');

include_once('../view/Session.php');
include_once('../core/databaseAction.php');
class Answer {
  private $db;
  private $id_q;
  private $date_publication_r;
  private $contenu_r;
  private $pseudo_auteur_r;

  public function __construct($bdd_f,$id_q, $contenu_r) {
          $this->db = $bdd_f;
          $this->id_q = $_GET['id'];
          $this->date_publication_r = date('d/m/Y H:i');
          $this->contenu_r = nl2br(htmlspecialchars($contenu_r));
          $this->pseudo_auteur_r = $_SESSION['pseudo'];
  }
  public function save() {
    $this->db->query('INSERT INTO reponse (id_q, date_publication_r, contenu_r, pseudo_auteur_r) VALUES ("'.$this->id_q.'", "'.$this->date_publication_r.'", "'.$this->contenu_r.'", "'.$this->pseudo_auteur_r.'")');
  }
}
if(isset($_POST['validate-rep'])) {
  $contenu_r = trim($_POST['answer']);
  if(!empty($contenu_r)) {
    $answer = new Answer($bdd_f, $idOfTheQuestion, $_POST['answer']);
    $answer->save();
    $successMsg = "Votre réponse a bien été publié";
  } else {
    $errorMsg = "Le champ de réponse est vide";
  }
}