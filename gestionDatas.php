<?php
    require 'connection.php';

    $identifiant = $_POST["identifiant"];
    $sexe = $_POST["sexe"];
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];
    $tel = $_POST["tel"];
    $pays = $_POST["pays"];
    $cg = $_POST["cg"];
    $action = $_POST["action"];

    $queryInsert = 'INSERT INTO USER (ID, SEXE, MAIL, MDP, TEL, PAYS) VALUES 
              (\'' . $identifiant . '\', \'' . $sexe . '\', \'' . $mail . '\', \'' . $mdp . '\', \'' . $tel . '\', \'' . $pays . '\')';
    $queryGetDatas = 'SELECT ID, MAIL FROM USER';

    if ($action == 'mailer') {
        if (!mysqli_query($dbLink, $queryInsert)) {
            echo 'Erreur de requête<br/>';
            echo 'Erreur : '.mysqli_error($dbLink) . '<br/>';
            echo 'REquête : ' . $queryInsert . '<br/>';
            exit();
        }
        else {
            $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
            $message .= 'Email : ' . $mail . PHP_EOL;
            $message .= 'Mot de passe : ' . PHP_EOL . $mdp;
            mail($mail, "Inscription sur le site absolument sidérant de Vincent Mazel", $message);
            echo "Vous n'allez pas en croire vos yeux : le mail a bien été envoyé. Wouaw.";

            if (!($result = mysqli_query($dbLink, $queryGetDatas))) {
                echo 'Erreur de requête<br/>';
                echo 'Erreur : '.mysqli_error($dbLink) . '<br/>';
                echo 'REquête : ' . $queryGetDatas . '<br/>';
                exit();
            }

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['ID'] . '<br/>';
                echo $row['MAIL'] . '<br/>';
                echo '<br/><br/>';
            }
        }
    }
    else {
        echo '<br/><strong>BOUTON NON GERE MEC, ARRETE !!!!!</strong>';
    }
?>