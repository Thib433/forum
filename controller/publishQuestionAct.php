<?php
include_once('../core/databaseAction.php');
include_once('../model/newQuestion.php');
include('controlSession.php');




if (isset($_POST['add-question'])) {
  //vérification que le champs n'est pas vide 
  $titre=trim($_POST['title']);
  $contenu=trim($_POST['container']);

  if (!empty($titre) and !empty($contenu)) {
    if (isset($_POST['radio_group'])) {

      $question_objet = $_POST['radio_group'];
      $question_title = htmlspecialchars($_POST['title']);
      $question_contenu = nl2br(htmlspecialchars($_POST['container']));
      $question_date = date('d/m/Y H:i');
      $auteur = $_SESSION['pseudo'];

      // Vérifie si le titre de la question existe déjà dans la base de données
      $testq = $bdd_f->query('SELECT * FROM questions WHERE titre = "'.$question_title.'"');
      
      if ($testq->rowCount() > 0) {
        $errorMsg = "Une question avec ce titre existe déjà";
      } else {
        // Vérifie si il y a déjà 8 catégories dans la base de données
        $cat8 = $bdd_f->query('SELECT * FROM questions');
        if ($cat8->rowCount() >= 15) {
          $errorMsg = "Vous ne pouvez pas ajouter une nouvelle question, car le nombre maximal est déjà atteint";
        } else {
          $question = new Question($bdd_f, $question_title, $question_objet, $question_contenu, $question_date, $auteur);
          $question->insertIntoDatabase();

          $successMsg = "Votre question a bien été publié sur le site";
        }
      }
    }
  } else {
    $errorMsg = "Veuillez compléter tous les champs";
  }
}


?>