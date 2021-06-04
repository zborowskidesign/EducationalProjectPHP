
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

    <div class="chat-container">
      
      <?php include "chat.php"; ?>
      <?php include "post.php"; ?>

    </div>



    <div class="materials">
        <h3 class="video_content"
            onclick="window.open('https:drive.google.com/drive/folders/1eOiYUjYJsFYIJ7EWw-d3-qh7gInDkPsJ?hl=pl')">
            Materiały</h3>
        <div class="underline_materials"></div>
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
    <script src="js/screen-capture.js"></script>

</body>

</html>