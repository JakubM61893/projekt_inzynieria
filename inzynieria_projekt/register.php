<?php

session_start();
if (!isset($_SESSION['udanarejestracja'])) 
{
header('Location: logowanie.php');

}
else
{
unset($_SESSION['udanarejestracja']);
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Zarejestrowano</title>
</head>

<body>
Dziekujemy za rejestracje

<a href=logowanie.php>Zaloguj się!</a>




<?php
if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>