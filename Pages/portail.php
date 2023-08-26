<!-- <?php
        require_once('../src/model/auth.php');

        Autorise();
      


        ?> -->


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
            <p class="wlc">Welcome in your compte,<?php echo $_SESSION['name']; ?></p>
            <p>@<?php echo $_SESSION['user']; ?></p>
            <p><?php echo $_SESSION['mail'];  ?></p>
            <form action="" method="post">

                <input type="button" value="LogOut" class="btn">

            </form>


        </div>



    </div>


</body>

</html>