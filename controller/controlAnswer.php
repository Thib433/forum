<?php
include_once('../model/showAllAnswerOfQuestionAction.php');
include_once('../model/postAnswerAction.php');
include_once('../view/Session.php');
include_once('../core/databaseAction.php');


sleep(1);

if(isset($_POST['answer'])) {
    
    $url = $_SERVER['HTTP_REFERER'];
    $url_parts = parse_url($url);
    $longID =  $url_parts['query'];
    $idOfTheQuestion = substr($longID, 3);
    $answer_date = date('d/m/Y H:i');
    $contenu_r = nl2br(htmlspecialchars($_POST['answer']));
    $auteur = $_SESSION['pseudo'];
    $answer = new Answer($bdd_f, $idOfTheQuestion, $answer_date, $_POST['answer'], $auteur);
    $answer->save();

?>
    <div class="card_a">
        <div class="whole">
            <div class="card_a_head"><?= $auteur ?></div>
            <div class="card_a_head"><?= $answer_date ?></div>
        </div>
        <div class="card_a_contenu"><?= $contenu_r ?></div>
  </div>
  <?php
    
  } 

?>

  
