<?php
if (isset($_POST["leave"])){
    session_unset();
    header('Location: Session.php');
}
?>