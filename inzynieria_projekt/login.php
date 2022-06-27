<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: logowanie.php');
		exit();
	}

require_once "polacz.php";

$polaczenie = @new mysqli($host, $db_login, $db_haslo, $db_name);

if($polaczenie->connect_errno!=0)
{
echo "Error".$polaczenie->connect_errno;
}
else
{
$login = $_POST['login'];
$haslo = $_POST['haslo'];



$sql="SELECT * FROM users WHERE login='$login' AND haslo='$haslo'";
if ($wynik = @$polaczenie->query($sql))
{
$ilu_userow = $wynik->num_rows;
if($ilu_userow>0)

{

$_SESSION['zalogowany'] = true;

$wiersz = $wynik->fetch_assoc();
$_SESSION['login'] = $wiersz['login'];

unset($_SESSION['blad']);

$wynik->free_result();

header('Location: index_zalogowany.php');

}
 else{

$_SESSION['blad'] = '<span style="color:red">nieprawidłowy login lub hasło</span>';
header('Location: logowanie.php');
}


}
$polaczenie->close();
}
?>