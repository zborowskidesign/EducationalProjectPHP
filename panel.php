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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="panel.css">
    <title>Document</title>
</head>
<body>
    <?php 

    echo " <p class='welcome_user_text'>Witaj ".$_SESSION['user']. ' [<a class="log-out" href="logout.php">Wyloguj</a>]</p>';

    ?>


<!--Left menu -->

<ul class="menu">

    <li class="html_video"><a>HTML</a></li>
    <li class="css_video"><a>CSS</a></li>
    <li class="js_video"><a>JavaScript</a></li>
    <li class="react_video"><a>React</a></li>

</ul>

<!--Video-->

<div class="container_video_html">
  
<iframe width="660" height="350" src="https://www.youtube.com/embed/k2IydkL3EOs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>


<h1 class="information_film">Brak filmów<h1>

<h3 class="video_content">Spis treści</h3>

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
<script src="videos.js"></script>


</body>
</html>