<?php 
session_start();

$_SESSION['autorise']=true;

function register($name,$mail,$username,$password) {

    $_SESSION['name']=$name;
    $_SESSION['mail']=$mail;
    $_SESSION['user']=$username;
    $_SESSION['password']=md5($password) ;
    
    return $_SESSION['autorise'];

}

// end function reigister new members ......


function Login($mail,$password){

    $_SESSION['mail']=$mail;
    $_SESSION['password']=md5($password) ;
    if ($mail==$_SESSION['mail'] && md5($password)==$_SESSION['password']) {
        
        return true;


        
    }else {
        return false;
    }
    
}

function getuser(){





}






?>