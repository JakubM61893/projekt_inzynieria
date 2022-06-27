<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
header('Location: logowanie.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
       body{
  background-color: #dddddd;
}
    </style>

</head>
<body>
   <header>
       <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-primary border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" href="index.php">Księgarnia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="oferta_zalogowany.php">Oferta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="onas_zalogowany.php">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="naszesklepy_zalogowany.php">Nasze sklepy</a>
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

    <section>
      <h2 class="display-4">Zły król. Okrutny książę. Tom 2</h2>
<img src="grafiki/zlykrol.jpg" class="rounded float-left"width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę książkę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">Ziemia kryje szczątki tych, którzy musieli odejść, ale to dopiero początek...</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>


    <section>
      <h2 class="display-4">Przysługa dla Czarnoksiężnika. Wilcza Jagoda. Tom 2</h2>
<img src="grafiki/wilczajagoda.jpg" class="rounded float-left" width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę książkę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">Fantastyczna reinterpretacja baśni splątana magią warszawskich ulic.</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>

    <section>
      <h2 class="display-4">Hobbit czyli tam i z powrotem</h2>
<img src="grafiki/hobbit.jpg" class="rounded float-left" width="200" height="200" >
<form>


<div class="form-group col-6 col-sm-1 row justify-content-right">
<label for="exampleFormControlSelect1">Dostawa</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Kurier</option>
      <option>Paczkomaty</option>
<option>Odbiór osobisty</option>
    </select>
<label for="exampleFormControlSelect1">Płatność</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Przelew</option>
      <option>BLIK</option>
<option>Przy odbiorze</option>
    </select>
  </div>
  <div class="form-group col-6 col-sm-3 row justify-content-center">
    <label for="formControlRange">Oceń tę książkę!</label>
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
<button onclick="myFunction1()" type="submit" class="btn btn-primary">Zapisz!</button>
</form>

<ul class="list-group">
  <li class="list-group-item">“Hobbit, czyli tam i z powrotem” to książka, po którą z chęcią sięgają kolejne pokolenia.</li>
  <li class="list-group-item">Dostawa w 48 godzin!</li>
</ul>
      

<button onclick="myFunction()" type="submit" class="btn btn-primary">Kup teraz!</button>
</form>

<script>
function myFunction() {
  alert("Zamówienie zostało przyjęte!");
}
</script>

<script>
function myFunction1() {
  alert("Dziękujemy za opinię!");
}
</script>