<?php
session_start();



function register($name, $mail, $username, $password)
{

    $_SESSION['name'] = $name;
    $_SESSION['mail'] = $mail;
    $_SESSION['user'] = $username;
    $_SESSION['password'] = md5($password);

    return $_SESSION['autorise'];
}

// end function reigister new members ......


function Login($mail, $password)
{

    if ($mail == $_SESSION['mail'] && md5($password) == $_SESSION['password']) {
        return true;
    } else {
        return Autorise();
    }
}
// end session login user.....


function Autorise()
{

    $_SESSION['autorise'] = 'true';


    if ($_SESSION['autorise'] == 'true') {
    } else {
        return header('Location: ../index.php');
    }
}
