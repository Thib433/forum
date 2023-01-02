<?php

require('../core/databaseAction.php');  //permet d'aller chercher le fichier qui fais le lien avec la database



if (isset($errorMsg)){ 
        echo '<p>' . $errorMsg . '</p>';
    }elseif(isset($successMsg)){
        echo '<p>' . $successMsg . '</p>'; 
    }
    
    
    
    
?>