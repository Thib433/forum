<?php
include_once('../model/showAllAnswerOfQuestionAction.php');
include_once('../model/postAnswerAction.php');
include_once('../view/Session.php');
include_once('../core/databaseAction.php');

sleep(1);

if(isset($_POST['validate-rep'])) {
  $contenu_r = trim($_POST['answer']);
  if(!empty($contenu_r)) {
    $idOfTheQuestion = $_GET['id'];
    $answer_date = date('d/m/Y H:i');
    $auteur = $_SESSION['pseudo'];
    $answer = new Answer($bdd_f, $idOfTheQuestion, $answer_date, $_POST['answer'], $auteur);
    $answer->save();
    $successMsg = "Votre réponse a bien été publié";
  } else {
    $errorMsg = "Le champ de réponse est vide";
  }
}
