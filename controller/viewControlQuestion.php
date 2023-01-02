<?php

require('../core/databaseAction.php');

if (isset($_GET['id_cat']) and !empty($_GET['id_cat'])){

        //Récupérer l'id de la page
        $id_categorie = $_GET['id_cat'];

        $checkIfCategorieExists = $bdd_f->prepare('SELECT id, titre, objet, contenu, date_publication FROM questions WHERE objet = ? order by id desc');
        $checkIfCategorieExists->execute(array($_GET['id_cat']));
    
    

   

}