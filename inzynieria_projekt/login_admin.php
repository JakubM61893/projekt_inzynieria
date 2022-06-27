<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: panel.php');
		exit();
	}

	require_once "polacz.php";

	$polaczenie = @new mysqli($host, $db_login, $db_haslo, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM admini WHERE login='%s' AND haslo='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_adminow = $rezultat->num_rows;
			if($ilu_adminow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['haslo'] = $wiersz['haslo'];
			
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: index_admin.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: panel.php'); 
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>