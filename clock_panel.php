<?php

session_start();

if(!isset($_SESSION['log-in']))
{
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo "Witaj ponowanie ".$_SESSION['user']. ' [<a href="logout.php">Wyloguj</a>]';
    echo "<p>Email: ".$_SESSION['email']."</p>";

    ?>
</body>
</html>