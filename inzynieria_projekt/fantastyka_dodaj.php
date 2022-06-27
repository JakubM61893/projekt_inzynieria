<?php

session_start();

if (isset($_POST['tytul']))
{
$wszystko_OK=true;
$tytul = $_POST['tytul'];

if ((strlen($tytul)<1) || (strlen($tytul)>100))
{
$wszystko_OK=false;
$_SESSION['e_tytul']="Pole nie może być puste!";
}


$autor = $_POST['autor'];


if ((strlen($autor)<1) || (strlen($autor)>100))
{
$wszystko_OK=false;
$_SESSION['e_autor']="Pole nie może być puste!";
}


$wydawnictwo = $_POST['wydawnictwo'];

if ((strlen($wydawnictwo)<1) || (strlen($wydawnictwo)>100))
{
$wszystko_OK=false;
$_SESSION['e_wydawnictwo']="Pole nie może być puste!";
}







require_once "polacz.php";


$polaczenie = new mysqli($host, $db_login, $db_haslo, $db_name);


$wynik = $polaczenie->query("SELECT * FROM ksiazki");




if ($wszystko_OK==true)
{
if ($polaczenie->query("INSERT INTO ksiazki VALUES (NULL, '$tytul', '$autor', '$wydawnictwo')"))
{
$_SESSION['udanedodanie']=true;
header('Location: pododaniu.php');
}
else
{
throw new Exception($polaczenie->error);
}





$polaczenie->close();

}





}



?>

<!DOCTYPE HTML>
<html lang="pl">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<head>
<title>Dodaj płytę</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Dodaj</title>
<style>
body{
  background-color: #dddddd;
}
.error
{
color:red;
margin-top: 10px;
margin-bottom: 10px;
}

</style>


</head>

<body>
<header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-primary border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" href="index_admin.php">Księgarnia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="oferta_admin.php">Oferta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="użytkownicy.php">Zarejestrowani użytkownicy</a>
                        </li>

                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="wylogowanie.php">Wyloguj się</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<form method="post">

<center>Tytuł: <br /> <input type="text" name="tytul"/></center><br/>

<?php

if (isset($_SESSION['e_tytul']))
{
echo '<div class="error">'.$_SESSION['e_tytul'].'</div>';
unset($_SESSION['e_tytul']);
}

?>
<center>Autor: <br /> <input type="text" name="autor"/></center><br/>

<?php

if (isset($_SESSION['e_autor']))
{
echo '<div class="error">'.$_SESSION['e_autor'].'</div>';
unset($_SESSION['e_autor']);
}

?>

<center>Wydawnictwo: <br /> <input type="text" name="wydawnictwo"/></center><br/>
<?php

if (isset($_SESSION['e_wydawnictwo']))
{
echo '<div class="error">'.$_SESSION['e_wydawnictwo'].'</div>';
unset($_SESSION['e_wydawnictwo']);
}

?>


<center><input type="submit" value="Dodaj"/></center>

</form>