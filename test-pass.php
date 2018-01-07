<?php
    $identifiantOk = "jambon de bayonne";
    $passwordOk = "tartelette chocolatée";

    $identifiant = $_POST["identifiant"];
    $password = $_POST["pwd"];
    $action = $_POST["action2"];

    if ($action == 'ok' AND $identifiantOk == $identifiant AND $passwordOk == $password) {
        header('Location : index.php');
    }
    else {
        header('Location : pageErreur.php');
    }
?>