<?php
    $dbHost = 'mysql-mrvincent13.alwaysdata.net';
    $dbUser = '144378_vincent';
    $dbPwd = 'newyorkciti17';
    $dbName = 'mrvincent13_tpbda1';

    $dbLink = mysqli_connect($dbHost,  $dbUser, $dbPwd)
    or die('Aie aie aie, connexion ratée : '.mysqli_error($dbLink));

    mysqli_select_db($dbLink, $dbName)
    or die('La co est ok, mais pas la sélection de bd, dooomage. Voilà le problème :'.mysqli_error($dbLink));
?>