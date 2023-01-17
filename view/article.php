<?php
    require('../model/showArticleContentAction.php');
    require('../controller/js.php');
    require('../model/showAllAnswerOfQuestionAction.php');
?>

<!doctype html>
<html>
<head>
    
    <link href="../assets/article.css" rel="stylesheet" >
    <script src="../assets/testjs.js"></script>

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

        if (isset($question_date_publication)){
            ?>
    <div class="card">
    
            <div class="titre_et_date">
                <div class="title"><?= $question_title;?></div>
                <div class="date_publication"><?= $question_date_publication;?></div>
            </div>
            <div class="contenu"><?= $question_contenu;?></div>

    </div>
    <div class="show_answer">
        <form class="form_group" method="POST" id="reponse" type="submit">
            <label>Répondre :</label>
            <?php if (isset($errorMsg)){ 
                    echo '<p>' . $errorMsg . '</p>';
                }elseif(isset($successMsg)){
                    echo '<p>' . $successMsg . '</p>'; 
                }
                ?>
            <textarea name="answer" class="form_control" required></textarea> 
            <input type="submit" class="publish_answer_r" name="validate-rep" value="Publier" required></input>
            
        </form>
    </div>

    <?php 
        while($answer = $getAllOfThisQuestion->fetch()){
            ?>
                <div class="card_a">
                    <div class="card_a_head"><?= $answer['date_heure_publication_r'];?></div>
                    <div class="card_a_contenu"><?= $answer['contenu_r'];?></div>
                </div>
            <?php
        }
    ?>
    <?php
        }
        ?>
    
    
</div>


</body>
</html>