<!doctype html>

<html>
<?php
require('../core/databaseAction.php');
require('../controller/viewControlQuestion.php');
require('../model/showAllCategorie.php');



?>
<link href="../assets/indexStyle.css" rel="stylesheet" >
<body>
<?php 

?>
<div class="navbar_space">
   <?php 
   include('navbar.php')
   ?>
</div>

<div class="link-add">
   <a href="publishQuestion.php"  name="ajout-question" value="ajouter une question" class="add_index">Ajouter une question</a>
</div>

<div class="Title"></div>

      <?php
         $quest = $checkIfCategorieExists->fetchAll();
         foreach($quest as $quest_row){
            ?>
         
         <div class="card_space">
         
         <div class="card_base">
               <div class="card_head">
                  <div class="titre"><?= $quest_row['titre'] ?></div>
                  <div class="date"><?= $quest_row['date_publication'] ?></div>
               </div>
               <div class="card_container">
                  <div class="message"><?= $quest_row['contenu'] ?></div> 
               </div>
               <div class="answer">
                  <a href="article.php?id=<?= $quest_row['id']?>" class="see_answer">Voir les réponses</a>
               </div>
               
         </div>
         </div>
         <?php
               }
            ?>
        

           
   
</body>
</html>