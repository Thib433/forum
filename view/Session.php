<?php
require('../controller/controlSession.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../assets/Session.css" rel="stylesheet" >
    </head>
<body>
    <div class="window">
        <form method="post" id="form">
            <div class="h2">Accès au forum</div>
            <label>Entrez un pseudo de moins de 10 caractères</label>
            <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo">
            <input type="submit" name="submit_pseudo" id="submit_pseudo" value="Démarrer">
            <?php 
                if (isset($errorMsg)){ 
                    echo '<p>' . $errorMsg . '</p>';
                }
            ?>
        </form>
    </div>

</body>
</html>