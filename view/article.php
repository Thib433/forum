<?php
    require('../controller/controlShowArticle.php');
    require('../controller/controlShowAllAnswer.php');

?>

<!doctype html>
<html>
<head>
    <link href="../assets/article.css" rel="stylesheet" >
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.form_group').on('submit', function(e){
            e.preventDefault();
            var answer = $('#champ_rep').val();

            if (answer.trim() == "" || answer.trim() == null){
                alert ("Le champs de réponse est vide");
            }else{
                var url = '../controller/controlAnswer.php';
                var response = $('.comment');
                var data = $(this).serialize();
                $.post(url, data, function(response){
                    $('.status').text('En cours d\'envoi...').hide();
                    $('.form_group').trigger('reset');
                    $('.comment').prepend(response);
                    $('.status').text('Réponse publiée').show();
                    $('.status').fadeOut(500);
                });
                $('.status').text('En cours d\'envoi...').show();
            }

        });
        
    });

</script>
    <!--<script src="ajax.js"></script>-->
</head>
<body>
<div class="navbar_space">
   <?php 
   include('navbar.php')
   ?>
</div>
<div class="question_container">
    <?php

        if ($checkIfQuestionExists->rowCount() > 0){
            $questionInfos = $checkIfQuestionExists->fetch();
            ?>
    <div class="card">
    
            <div class="titre_et_date">
                <div class="auteur"><?= $questionInfos['pseudo_auteur'];;?></div>
                <div class="date_publication"><?= $questionInfos['date_publication'];?></div>
            </div>
            <div class="ti">
                <div class="title"><?= $questionInfos['titre'];?></div>
            </div>
            <div class="contenu"><?= $questionInfos['contenu'];?></div>

    </div>
    <div class="show_answer">
        <form class="form_group" method="POST" id="response-form" class="reponse">
            <label>Répondre :</label>
            <textarea name="answer" id="champ_rep" class="form_control" placeholder="Votre réponse" required></textarea> 
            <input type="submit" class="publish_answer_r" name="validate-rep" value="Publier" required ><span class='status'></input>

            
        </form>
    </div>
    <div class="comment">
    <?php 
        while($answer = $getAllOfThisQuestion->fetch()){
            ?>
                <div class="card_a">
                    <div class="whole">
                        <div class="auteur"><?= $answer['pseudo_auteur_r'];?></div>
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