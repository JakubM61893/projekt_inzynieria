<?php

session_start();
if (!isset($_SESSION['udanedodanie'])) 
{
header('Location: fantastyka_dodaj.php');
exit();
}
else
{
unset($_SESSION['udanedodanie']);
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Dodano</title>
</head>

<body>
Dodano grę!

<a href=index_admin.php>Powrót!</a>




<?php
if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>