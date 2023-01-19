<?php
session_start();//start the session 
if (isset($_POST['submit_pseudo'])){
    $pseudo_test=trim($_POST['pseudo']);
    if(!empty($pseudo_test)){
        $pseudo_num = $_POST['pseudo'];

        if(strlen($pseudo_num)<10){
            $_SESSION["pseudo"] = $_POST['pseudo']; 
            header("Location:../view/accueilForum.php");
        }else{
            $errorMsg = "Le pseudo contient plus de 10 caractères";
        }
        
    }else{
        $errorMsg= "Le pseudo est vide ou nul";
    }
}