<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
include_once('../model/newQuestion.php');


if (isset($_POST['add-question'])) {
  //vérification que le champs n'est pas vide 
  $titre=trim($_POST['title']);
  $contenu=trim($_POST['container']);

  if (!empty($titre) and !empty($contenu)) {
    if (strlen($titre)<50){
      if (isset($_POST['radio_group'])) {
        include_once('controlSession.php');
  
        $question_objet = $_POST['radio_group'];
        $question_title = htmlspecialchars($_POST['title']);
        $question_contenu = nl2br(htmlspecialchars($_POST['container']));
        $question_date = date('d/m/Y H:i');
        $auteur = $_SESSION["pseudo"];
  
        // Vérifie si le titre de la question existe déjà dans la base de données
        $testq = $bdd_f->query('SELECT * FROM questions WHERE titre = "'.$question_title.'"');
        
        if ($testq->rowCount() > 0) {
          $errorMsg = "Une question avec ce titre existe déjà";
        } else {
          // Vérifie si il y a déjà 200 questions dans la base de données
          $cat8 = $bdd_f->query('SELECT * FROM questions');
          if ($cat8->rowCount() >= 200) {
            $errorMsg = "Vous ne pouvez pas ajouter une nouvelle question, car le nombre maximal est déjà atteint";
          } else {
            $question = new Question($bdd_f, $question_title, $question_objet, $question_contenu, $question_date, $auteur);
            $question->insertIntoDatabase();
  
            $successMsg = "Votre question a bien été publié sur le site";
          }
        }
      }else{
        $errorMsg = "Veuillez sélectionner une categorie";
      }
    }else{
      $errorMsg = "Votre titre est trop long";
    }
  } else { // si les champs sont vides on aura un message d'erreur
    $errorMsg = "Veuillez compléter tous les champs";
  }
}


?>