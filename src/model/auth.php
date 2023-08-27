<?php
session_start();



function register($name, $mail, $username, $password)
{

    $_SESSION['name'] = $name;
    $_SESSION['mail'] = $mail;
    $_SESSION['user'] = $username;
    $_SESSION['password'] = md5($password);

    return true;
}

// end function reigister new members ......


function Login($mail, $password)
{

    if ($mail == $_SESSION['mail'] && md5($password) == $_SESSION['password']) {
        return true;
    } else {
        return false;
    }
}
// end session login user.....


