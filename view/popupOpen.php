<head>
    <link rel="stylesheet" href="../assets/popupOpen.css">
    <script src="../assets/popup.js"></script>
</head>
<?php require('../controller/SelectPseudo.php')?>
<body>
    <div class="open">
        <button class="open_acces" onclick="openForm()">Accéder au forum</button>
    </div>
    <div class="popup_space">
        <div class="popup_form" id="popupForm">
            <form class="form_container">
                <h2>Veuillez entrer un pseudo</h2>
                <label for="pseudo"><h3>Pseudo</h3></label>
                <input type="text" id="pseudo" placeholder="Pseudo" name="pseudo" required>
                <input type="submit" class="acces" value="Accès au forum" name="acces"></input>
                <input type="button" class="cancel" onclick="closeForm()" value="Annuler"></input>

            </form>
        </div>
    </div>
</body>