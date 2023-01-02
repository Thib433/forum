<?php

    require('../core/databaseAction.php');  //permet d'aller chercher le fichier qui fais le lien avec la database

    if (isset($_POST['add-question'])){// Si le bouton est appuyé
        if (!empty($_POST['title'] and !empty($_POST['container']))){  //Vérification que les champs ne sont pas vides
            
            
            if(isset($_POST['radio_group'])) {
                $question_objet = $_POST['radio_group'];
                $question_title=htmlspecialchars($_POST['title']);
            
                $question_contenu=nl2br(htmlspecialchars($_POST['container']));
                $question_date=date('d/m/Y');
                //login auteur ???
                
                $bdd_f->query('INSERT INTO questions (titre, objet, Contenu, date_publication) VALUES ("'.$question_title.'", "'.$question_objet.'"," '.$question_contenu.'"," '.$question_date.'")');
                
            }
            
            

            $successMsg = "Votre question a bien été publié sur le site";
        }else{
            $errorMsg = "Veuillez compléter tous les champs";
        }
    }
?>

