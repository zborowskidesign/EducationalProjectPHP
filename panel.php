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
    <link rel="stylesheet" href="scss/panel.css">
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
  
<iframe width="660" height="300" src="https://www.youtube.com/embed/k2IydkL3EOs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <!-- <div class="indicators" style="text-align:center">
  <span class="film d1"></span>
  <span class="film d2"></span>
  <span class="film d3"></span>
  <span class="film d4"></span>
</div> -->


<div class="container_indicator">
    <span><div class="index">1</div><div class="index">2</div><div class="index">3</div><div class="index">4</div><div class="index">5</div></span>
    <svg viewBox="0 0 100 100">
      <path
            d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
    </svg>
    <svg viewBox="0 0 100 100">
      <path
            d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
    </svg>
  </div>



</div>


<h1 class="information_film">Brak filmów<h1>

<div class="materials">
<h3 class="video_content">Materiały</h3>
<img src=""/>
</div>

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



<script src="js/dark-mode.js"></script>
<script src="js/videos.js"></script>
<script src="js/video-indicators.js"></script>


</body>
</html>