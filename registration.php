<?php

session_start();

if(isset($_POST['email']))
{
    //walidacja
    $all_works = true;

    $name = $_POST['name'];

    if((strlen($name)<3) || (strlen($name) > 10))
    {
        $all_works = false;
        $_SESSION['error_name']="Nazwa musi zawierać od 3 do 10 znaków";
    }

    if(ctype_alnum($name)==false)
    {
        $all_works = false;
        $_SESSION['error_name'] = "Nazwa użytkownika może składać się wyłącznie z liter i cyfr bez polskich znaków";
    }


    //poprawność adresu email

    $email = $_POST['email'];

    $EmailAfterCheck = filter_var($email, FILTER_SANITIZE_EMAIL);

    if((filter_var($EmailAfterCheck, FILTER_VALIDATE_EMAIL)==false) || ($EmailAfterCheck != $email))
    {
        $all_works = false;
        $_SESSION['error_email'] = "Podany został nieprawidłowy adres email";
    }


    //poprawność hasła

    $haslo1 = $_POST['password1'];
    $haslo2 = $_POST['password2'];


    if((strlen($haslo1) < 5) || (strlen($haslo1) > 30))
    {
        $all_works = false;
        $_SESSION['error_password'] = "Hasło musi posiadać więcej niż cztery znaki";
    }

    if($haslo1 != $haslo2)
    {
        $all_works = false;
        $_SESSION['error_password2'] = "Hasło nie jest identyczne";
    }

    $hash_password = password_hash($haslo1, PASSWORD_DEFAULT);

require_once "connection.php";
mysqli_report(MYSQLI_REPORT_STRICT);

try{

    $connection = new mysqli($host,$db_user,$db_password,$db_name);
    if($connection->connect_errno!=0)
    {
        throw new Exception(mysql_connect_errno());
    }
    else
    {
        //Sprawdzenie emaila w bazie

        $result = $connection->query("SELECT id FROM uzytkownicy WHERE email = '$email'");

        $how_many_emails = $result->num_rows;

        if($how_many_emails > 0)
        {
            $all_works = false;
            $_SESSION['error_email'] = "Istnieje już konto z podanym adresem email";
        }


        //Sprawdzenie, czy nazwa użytkownika jest już zarejestrowana 

        $result = $connection->query("SELECT id FROM uzytkownicy WHERE user = '$name'");

        $how_many_nicknames = $result->num_rows;

        if($how_many_nicknames > 0)
        {
            $all_works = false;
            $_SESSION['error_name'] = "Istnieje już podanana nazwa użytkownika";
        }

        if ($all_works==true)
        {
            //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
             
            if ($connection->query("INSERT INTO uzytkownicy VALUES (NULL, '$name', '$hash_password', '$email', 0, 0, 0, 14)"))
            {
                $_SESSION['succes_registration']=true;
                header('Location: instructions.php');
            }
            else
            {
                throw new Exception($connection->error);
            }
             
        }
        $connection->close();
    }
}
catch(Exception $e)
{
    echo "Błąd serwera!";

    echo $e;
}

}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <title>Rejestracja</title>

    <style>
        .error 
        {
            color: red;
            margin: 10px 10px;
        }
    </style>
</head>
<body>

<div class="container_lines">
<div class="top_line"></div>
<a class="back_to_login" href="logout.php">Panel logowania</a>
<div class="back_line"></div>
    </div>
    
    <form method = "post">
        Nazwa: </br> <input type="text" name="name"/><br/>
        <?php
        if(isset($_SESSION['error_name']))
        {
            echo '<div class="error">'.$_SESSION['error_name'].'</div>';
            unset($_SESSION['error_name']);
        }

        ?>
        Hasło: </br> <input type="password" name="password1"/><br/>

        <?php
        if(isset($_SESSION['error_password']))
        {
            echo '<div class="error">'.$_SESSION['error_password'].'</div>';
            unset($_SESSION['error_password']);
        }

        ?>

        Powtórz hasło: </br> <input type="password" name="password2"/><br/>  

        <?php
        if(isset($_SESSION['error_password2']))
        {
            echo '<div class="error">'.$_SESSION['error_password2'].'</div>';
            unset($_SESSION['error_password2']);
        }

        ?>

           
        E-mail: </br> <input type="text" name="email"/><br/>
        <?php
        if(isset($_SESSION['error_email']))
        {
            echo '<div class="error">'.$_SESSION['error_email'].'</div>';
            unset($_SESSION['error_email']);
        }

        ?>
    <label>
    <input type= "checkbox" name="regulations"/>Akceptuję regulamin
    </label>
    <br/>
    <input type = "submit" value="Załóż konto"/> 

    </form>




    <img class="register_img" src="img/register-img.png"/>




</body>
</html>