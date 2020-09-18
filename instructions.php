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
    <link rel="stylesheet" href="finish_register.css">
    <title></title>
</head>
 
<body>
     
<!-- 
  <h1 clsas="welcome_text">Dziękujemy za rejestrację! Możesz już zalogować się na swoje konto!</h1> -->

  <h1>Dziękujemy za <strong>rejestrację!</strong> 


<br/><br/>

    <img class="notification_img" src = "img/notification.png"/>


    <div id="container">
  <button class="learn-more">
    <span class="circle" aria-hidden="true">
      <span class="icon arrow"></span>
    </span>
    <span class="button-text"><a href="index.php">Zaloguj się</a></span>
  </button>
</div>

    <br /><br />
 
</body>
</html>