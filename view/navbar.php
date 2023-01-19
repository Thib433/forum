<?php 
require('../controller/controlCategorie.php')
?>
<div class="navbar">
    <a href="accueilForum.php" class="linkA" type="submit">Accueil</a>
    <?php 
    while($cat = $arg->fetch()){
        ?>
        <a href="categorie.php?id_cat=<?= $cat['id_cat'];?>" class="link" type="submit"> <?= $cat['Nom'];?></a>
        <?php
    }
    
    ?>
</div>