<?php
session_start();//on commence la session



if (isset($_POST['submit_pseudo'])){
    $pseudo_test=trim($_POST['pseudo']); //on supprime les espaces dans la variable pseudo pour vérifier que le champs de contient pas que ces espaces
    if(!empty($pseudo_test)){ 
        $pseudo_num = $_POST['pseudo'];

        if(strlen($pseudo_num)>6){
            if(strlen($pseudo_num)<14){
                $_SESSION["pseudo"] = $_POST['pseudo'];  //on le stock ds la variable session
                header("Location:../view/accueilForum.php"); //et on se dirige vers la page d'accueil
            }else{
                $errorMsg = "Le pseudo ne doit pas contenir plus de 14 caractères";
            } 
            
        }else{
            $errorMsg = "Le pseudo doit contenir plus de 6 caractères"; 
        }
        
    }else{ //si le champ est vide on recoit un message d'erreur
        $errorMsg= "Le pseudo est vide ou nul";
    }
}