<?php
 
    session_start();
     
    if (!isset($_SESSION['succes_registration']))
    {
        header('Location: index.php');
        exit();
    }
    else
    {
        unset($_SESSION['succes_registration']);
    }
     
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/finish_register.css">
    <title></title>
</head>

<body>

    <!-- 
  <h1 clsas="welcome_text">Dziękujemy za rejestrację! Możesz już zalogować się na swoje konto!</h1> -->



    <!-- <h1>Dziękujemy za <strong>rejestrację!</strong><h1> -->

    <span class="stamp">Approved</span>



    <br /><br />

    <img class="notification_img" src="img/notification.png" />

    <div id="container">
        <button class="learn-more">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <a href="index.php"><span class="button-text">Zaloguj się</span></a>
        </button>
    </div>

    <br /><br />

</body>

</html>