<?php
    require('../controller/publishQuestionAct.php');
    require('../controller/controlRadio.php');
?>


<!doctype html>
<html>
<body>
<link href="../assets/publish.css" rel="stylesheet" >

<form method="POST" class="publish_question">

    <?php if (isset($errorMsg)){ 
        echo '<p>' . $errorMsg . '</p>';
    }elseif(isset($successMsg)){
        echo '<p>' . $successMsg . '</p>'; 
    }
    ?>

    <div class="div-form">          
        <label class="form-label">Titre</label>
        <input type="text" class="question_head" name="title" placeholder="Titre" required>
    </div>
    <div class="div-form2">
        <div class="global">
            <?php
            include_once('../controller/controlRadio.php');
            $rows = $essai1->fetchAll();
            foreach ($rows as $row) {
                $value = $row['id_cat'];
                $label = $row['Nom'];
                // générer du code HTML pour chaque bouton radio ici
                echo '<div class="whole">
                <input type="radio" class="selection" name="radio_group" value="' . $value . '">' . $label . '
                </div>';
                
            }
            ?>
        </div>
    </div>  
    <div class="div-form">
        <label class="form-label">Question</label>
        <textarea placeholder="Votre question" class="question" name="container" required></textarea>
    </div>
<div class="div-form3">
    <a href="categorie.php?id_cat=<?= $question_objet;?>" class="back">Retour</a>
    <input type="submit" name="add-question" value="Ajouter la question" class="validate" required>
</div>
</form>

</body>