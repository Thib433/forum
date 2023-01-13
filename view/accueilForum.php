<?php
require('../model/showAllCategorie.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Connect Forum</title>
    <link rel="stylesheet" href="../assets/accueilForum.css">
</head>
<body>
<div class="titre">
    Forum
</div>
<div class="texte">
    <p>Bienvenue sur I Connect Forum <br> <br> Ce forum est destiné à tous nos utilisateurs que ce soit médecin ou patient pour discuter, s'entraider et trouver rapidement une solution à un problème.</p>
</div>


<div class="container">
    <div class="bouton">
    <?php 
        while($cat = $getAllCategories->fetch()){
            ?>
            <a href="categorie.php?id_cat=<?= $cat['id_cat'];?>" class="btn btn1" type="submit"> <?= $cat['Nom'];?></a>
            <?php
        }
        ?>
          

    </div>
</div>

</body>

</html>