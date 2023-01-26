<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../assets/Admin.css">
  </head>
  <body>
    <div class="Titre">
      Gestion du forum
    </div>
    <div class="add-cat">
        <form id="add-categorie" method="POST" class="control">
      
            <label>Ajouter une categorie</label>
            <input type="text" class="new_cat" name="name_categorie" placeholder="Nom de la categorie" required></input>
            <input type="submit" name="post-categorie" value="Ajouter"  class="input"></input>
            <?php 
            require('../controller/Admin.NewCategorie.php');
            if (isset($errorMsg)){ 
              echo '<p>' . $errorMsg . '</p>';
          }elseif(isset($successMsg)){
              echo '<p>' . $successMsg . '</p>'; 
          }
            ?>
        </form>
    </div>
    <div class="add-cat">
        <form id="add-categorie" method="POST" class="control">
            <label>Supprimer une categorie</label>
            <input type="text" class="new_cat" name="name_categorie_stop" placeholder="Nom de la categorie" required></input>
            <input type="submit" name="stop-categorie" value="Supprimer" class="input"></input>
            <?php
            require('../controller/Admin.DeleteCategorie.php');
            if (isset($errorMsgd)){ 
              echo '<p>' . $errorMsgd . '</p>';
          }elseif(isset($successMsgd)){
              echo '<p>' . $successMsgd . '</p>'; 
          }
            ?>
        </form>
    </div>
  </body>
</html>  