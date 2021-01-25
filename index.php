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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/main.css">

</head>
<body>

<div class="vertical-line"></div>
<div class="horizontal-line"></div>


<img class= "poland-flag" language= "polish" src="img/Poland.png"/>
<img class= "usa-flag" language= "english" src="img/USA.png"/>


    <form action = "login.php" method = "post">
        <span class="login">Login</span> <br/> <input type="text" name= "login"/><br/>
        <span class="password"><script>

    const password = document.querySelector('.password');
    let firstTime = localStorage.getItem("first_time");

    if(!firstTime) {
     // first time user loaded!
     localStorage.setItem("first_time","1");
     password.textContent = 'Hasło2'  

        }

        else if (firstTime) {

            const password = document.querySelector('.password');
            password.textContent = localStorage.getItem('password')    
        }
        
         </script>
         </span> 
         <br/> 
         <input type="password" name= "haslo"/><br/><br/>
        <input class= "login-btn" type = "submit" value= "Zaloguj się"/>
        <a class = "registration" href="registration.php"> 
        <script>
        const registration = document.querySelector('.registration');
        registration.textContent = localStorage.getItem('registration')
        let firstTimeLog = localStorage.getItem("first_time2");

        if(!firstTimeLog) {
             // first time user loaded!
             localStorage.setItem("first_time2","2");
             registration.textContent = 'Załóż darmowe konto'  

                }

                else if (firstTimeLog) {

                    const registration = document.querySelector('.registration');
                    registration.textContent = localStorage.getItem('registration')    
                }

        </script>
        <br/><br/>
        </a>
    <?php
    if(isset($_SESSION['error']))
    {

        echo $_SESSION['error'];
    }
    ?>
    </form>

    <img class="programming_img_main" src="img/programming.gif"/>
    
    <!--Info-->

    <div class="container">
        <h1>
        <span class="course-elements">
        <script>

    const courseText = document.querySelector('.course-elements');

    let firstTimeCourseText = localStorage.getItem("first_timeCourseText");

    if(!firstTimeCourseText) {
    // first time user loaded!
        localStorage.setItem("first_timeCourseText","3");
        courseText.textContent = 'Nauka'  

    }

    else if (firstTimeCourseText) {

        const courseText = document.querySelector('.course-elements');

        courseText.textContent = localStorage.getItem('courseText');

    }

</script>
        </span> 
        <span class="txt-type" data-wait="2500" data-words='["HTML", "CSS", "JavaSscript"]'></span><i class="fas fa-pencil-alt"></i></h1>
    </div>


    <script src="js/typing.js"></script>
    <script src="js/translate.js"></script>
 
</body>
</html>