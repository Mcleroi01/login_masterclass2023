<?php 

session_status();
$_SESSION['autorise'] = true;


if ($_SESSION['autorise'] == true) {
    
    header('Location: ../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/portail.css">
    <title>Document</title>
</head>

<body>
    <div class="contenaire">
        <div class="portail">
            <img src="images/profil.jpg" alt="">
            <p class="wlc">Welcome in your compte,Carlo Ngoy</p>
            <p>@mcleroi</p>
            <p>musongelacarlo54@gamil.com</p>
            <form action="" method="post">
                
                <input type="button" value="LogOut" class="btn">

            </form>


        </div>



    </div>


</body>

</html>