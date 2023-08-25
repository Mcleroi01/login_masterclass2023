<?php 
session_start();

$users=[
    ["name"=>"Musongela","mail"=>"carlo@gmail.com","password"=>"mcleroi"]
];

if (isset($_POST["mail"]) && ($_POST["psw"])) {

    function valide($Data){
        $Data=trim($Data);

        $Data= stripslashes($Data);

        $Data=htmlspecialchars($Data);

        return $Data;
        
    }
    $mail=valide($_POST["mail"]);
    $password=valide($_POST["psw"]);
    if (empty($mail)) {
        header("location:index.php?error=Mail is required");

        exit();
    }elseif (empty($password)) {
        header("location:index.php?error=Password is required");
        exit();
    }else {
        foreach ($i as $key => $value) {
            if ($i['mail']===$mail && $i['password']===$password) {
                echo "Log in";
                $_SESSION["name"]=$i["name"];
                $_SESSION["mail"]=$i["mail"];

                header("locatin:portail.php");

                exit();


            }else {
                header("Location:index.php?error=incorect Mail or Password");
            }
        }
    }
}else {
    header("Location:index.php");

    exit();
}




?>