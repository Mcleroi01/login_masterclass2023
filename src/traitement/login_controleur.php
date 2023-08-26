<?php


ini_set('display_errors', '0');



// 

if (isset($_POST['mail']) and isset($_POST['password'])) {

    require_once('../model/auth.php');

    $user = Login( $_POST['mail'], $_POST['password']);
    if ($user) {
        header('Location: ../../Pages/portail.php');
    } else {
        header('Location: ../../index.php');
        exit();
    }
} else {
    echo 'Veiller replir tout les champs ...';
}
