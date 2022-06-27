<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
header('Location: panel.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>

div1 {
  margin-left: 250px;
}
        body {
            background-color: #dddddd;
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




<center><p class="display-4">Wybierz gatunek:</p></center>

<div1 class="row">
  <div1 class="column">
    <a href="fantastyka_admin.php"><img src="grafiki/fantastyka.jpg" width="300" height="168"></a>
    </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/dladzieci.jpg" width="300" height="168"></a>
  </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/sport.jpg" width="300" height="168"></a>
  </div1>
  </div1>
  <div1 class="row">
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/nauka.jpg" width="300" height="168"></a>
    </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/podroze.jpg" width="300" height="168"></a>
  </div1>
  <div1 class="column">
    <a onclick="myFunction()"><img src="grafiki/kryminaly.jpg" width="300" height="168"></a>
  </div1>
  </div1>

  <script>
    function myFunction() {
        alert("Dostępne wkrótce!");
    }
    </script>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br />
<br></br>
<br />
<br></br>
<br />
<br />

<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 Inżynieria oprogramowania
        </div>
    </footer>