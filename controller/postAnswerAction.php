<?php

require('../core/databaseAction.php'); //va chercher la connection à la bdd

//check si la variable est déclarée (si le bouton est appuyé)
if(isset($_POST['validate-rep'])){
    if(!empty($_POST['answer'])){
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $answer_date = date('d/m/Y');
        //Insertion des nouvelles données
        $bdd_f->query('INSERT INTO reponse (id_q, date_publication_r, contenu_r) VALUES ("'.$idOfTheQuestion.'", "'.$answer_date.'", "'.$user_answer.'")');

        $successMsg = "Votre réponse a bien été publié";
    }else{
        $errorMsg = "Le champ de réponse est vide";
    }
}
?>