<?php
// echo json_encode($_POST) pour afficher les erreurs dans la console
require('../core/databaseAction.php');

 
$success = 0;
$msg = "Une erreur est survenue (js.php)";
//$data = [] envoyer des données dans la requête asynchrone
 
if (!empty($_POST['answer'])) {
	
	$message = htmlspecialchars(strip_tags($_POST['answer']));
 
 
		if (strlen($message) < 150) {
		
 
			// Ajout de l'utilisateur en base de données à cet endroit (exemple)
			$answer_autor = $_SESSION['pseudo'];
			$answer_date = date('d/m/Y H:i:s');
			//Insertion des nouvelles données
			$bdd_f->query('INSERT INTO reponse (id_q, date_publication_r, contenu_r, pseudo_auteur_r) VALUES ("'.$idOfTheQuestion.'", "'.$answer_date.'", "'.$message.'", "'.$answer_autor.'")');
			$success = 1;
			$msg = "";
			//$data['mdp'] = $mdp;    "data" => $data]
 
		} else {
			$msg = "Votre message ne doit pas contenir plus de 150 caractères";
		}
	
} else {
	$msg = "Veuillez renseigner tous les champs";
}
 
 
$res = ["success" => $success, "msg" => $msg];
//echo json_encode($res);

?>