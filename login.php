<?php

session_start();

if(!isset($_POST['login']) || (!isset($_POST['haslo'])))
{
    header('Location: index.php');
    exit();
}

require_once "connection.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name); //ustawianie połączenia z bazą danych

if($connect -> connect_errno !=0)
{
    echo "Error: ". $connect -> connect_errno. "Opis błedu: ". $connect -> connect_error;
}
else 
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8"); // zapobiegnięcie wstrzyknięciu kodu sql przez użytkownika lub tworzeniu nazwy np. <b>User</b>
    //$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
    

   if ($result = @$connect->query(sprintf("SElECT *FROM uzytkownicy WHERE user = '%s'", mysqli_real_escape_string($connect,$login))))  //zapytanie do bazy 
   {
        $user_count = $result->num_rows;
        if($user_count > 0)
        {
            $row = $result->fetch_assoc();

            if(password_verify($haslo, $row['pass']))
            {

                $_SESSION['log-in'] = true;
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['user'] = $row['user'];
                $_SESSION['email'] = $row['email'];
                unset($_SESSION['error']);
                $result->free_result();
                header('Location: panel.php');     
            }
            else 
        {
            $_SESSION['error'] = '<span style="color:red;">Nieprawidłowy login lub hasło</span>';
            header('Location:index.php');
        }
        }
        else 
        {
            $_SESSION['error'] = '<span style="color:red;">Nieprawidłowy login lub hasło</span>';
            header('Location:index.php');
        }
   }  

    $connect->close();
}






?>