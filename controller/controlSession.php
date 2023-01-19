<?php
session_start();//on commence la session



if (isset($_POST['submit_pseudo'])){
    $pseudo_test=trim($_POST['pseudo']); //on definit la variable pseudo_test en négligeant les espaces
    if(!empty($pseudo_test)){ 
        $pseudo_num = $_POST['pseudo'];

        if(strlen($pseudo_num)<10){ //s'il le pseudo fait moins de 10 charactère
            $_SESSION["pseudo"] = $_POST['pseudo'];  //on le stock ds la variable session
            header("Location:../view/accueilForum.php"); //et on se dirige vers la page d'accueil
        }else{
            $errorMsg = "Le pseudo contient plus de 10 caractères"; //s'il contient plus de 10 charactère on recoit un message d'erreure
        }
        
    }else{ //si le champ est vide on recoit un message d'erreure
        $errorMsg= "Le pseudo est vide ou nul";
    }
}