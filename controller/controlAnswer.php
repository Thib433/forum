<?php
include_once('../model/showAllAnswerOfQuestionAction.php');
include_once('../model/postAnswerAction.php');
include_once('../view/Session.php');
include_once('../core/databaseAction.php');


sleep(1);

if(isset($_POST['answer'])) {
  $contenu_r = trim($_POST['answer']);
  
  if(!empty($contenu_r)) {
    include_once('../model/showArticleContentAction.php');
    $url = $_SERVER['HTTP_REFERER'];
    $url_parts = parse_url($url);
    $longID =  $url_parts['query'];
    $idOfTheQuestion = substr($longID, 3);
    $answer_date = date('d/m/Y H:i');
    $auteur = $_SESSION['pseudo'];
    $answer = new Answer($bdd_f, $idOfTheQuestion, $answer_date, $_POST['answer'], $auteur);
    $answer->save();
    $successMsg = "Votre réponse a bien été publié";
    
  } else {
    $errorMsg = "Le champ de réponse est vide";
  }

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