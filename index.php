<?php

session_start();

if((isset($_SESSION['log-in'])) && ($_SESSION['log-in'] == true))
{
    header('Location: panel.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauka programowania</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

</head>
<body>

<div class="vertical-line"></div>
<div class="horizontal-line"></div>

    <form action = "login.php" method = "post">
        Login: <br/> <input type="text" name= "login"/><br/>
        Hasło: <br/> <input type="password" name= "haslo"/><br/><br/>
        <input type = "submit" value= "Zaloguj się"/>
        <a class = "registration" href="registration.php">Załóż darmowe konto</a>
        <br/><br/>
    <?php
    if(isset($_SESSION['error']))
    {

        echo $_SESSION['error'];
    }
    ?>
    </form>


    <img class="programming_img_main" src="img/programming.gif"/>
    


    <!--Info-->



 
</body>
</html>