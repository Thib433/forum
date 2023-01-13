<?php
    require('../model/showArticleContentAction.php');
    require('../controller/postAnswerAction.poo.php');
    require('../model/showAllAnswerOfQuestionAction.php');
?>

<!doctype html>
<html>
<head>
    
    <link href="../assets/article.css" rel="stylesheet" >

</head>

<body>

<div class="navbar_space">
   <?php 
   include('navbar.php')
   ?>
</div>

<div class="question_container">
    
    <div class="pres">Question : </div>
    <?php

        if ($checkIfQuestionExists->rowCount() > 0){
            $questionInfos = $checkIfQuestionExists->fetch();
            ?>
    <div class="card">
    
            <div class="titre_et_date">
                <div class="title"><?= $questionInfos['pseudo_auteur'];;?></div>
                <div class="title"><?= $questionInfos['titre'];?></div>
                <div class="date_publication"><?= $questionInfos['date_publication'];?></div>
            </div>
            <div class="contenu"><?= $questionInfos['contenu'];?></div>

    </div>
    <div class="show_answer">
        <form class="form_group" method="POST" id="reponse" class="reponse">
            <label>Répondre :</label>
            <?php if (isset($errorMsg)){ 
                    echo '<p>' . $errorMsg . '</p>';
                }elseif(isset($successMsg)){
                    echo '<p>' . $successMsg . '</p>'; 
                }
                ?>
            <textarea name="answer" id="champ_rep" class="form_control" placeholder="Votre réponse" required></textarea> 
            <input type="submit" class="publish_answer_r" name="validate-rep" value="Publier" required><span class="status"></span></input>

            
        </form>
    </div>
    <div class="comment">
    <?php 
        while($answer = $getAllOfThisQuestion->fetch()){
            ?>
                <div class="card_a">
                    <div class="whole">
                        <div class="card_a_head"><?= $answer['pseudo_auteur_r'];?></div>
                        <div class="card_a_head"><?= $answer['date_publication_r'];?></div>
                    </div>
                    <div class="card_a_contenu"><?= $answer['contenu_r'];?></div>
                </div>
            <?php
        }
    ?>
    </div>
    <?php
        }
        ?>
    
    
</div>

</body>
</html>