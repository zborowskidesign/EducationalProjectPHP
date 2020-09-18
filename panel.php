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
    <link rel="stylesheet" href="panel.css">
    <title>Document</title>
</head>
<body>
    <?php 

    echo " <p>Witaj ".$_SESSION['user']. ' [<a class="log-out" href="logout.php">Wyloguj</a>]</p>';

    ?>


<!--Left menu -->

<ul class="menu">

    <li><a href="">HTML</a></li>
    <li><a href="">CSS</a></li>
    <li><a href="">JavaScript</a></li>
    <li><a href="">React</a></li>

</ul>


<!--End--->

<!--Dark mode-->

<div class="container">
  <label class="switch">
    <input id="toggle" type="checkbox">
    <span class="slider"></span>
  </label>
</div>
<div class="slide-block slide-out">
</div>




<div class="vertical-line"></div>
<div class="vertical-line-left"></div>
<div class="horizontal-line"></div>



<script src="dark-mode.js"></script>

</body>
</html>