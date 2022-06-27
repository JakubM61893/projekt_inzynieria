<!DOCTYPE html>
<html>
<head>
    <title>Strona główna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
div1 {
  margin-left: 200px;
}
body{
  background-color: #dddddd;
}
h2
{
    margin-left: 40px;
}

p {
text-align: center;
font-size: 20px;
}

p1 {
text-align: center;
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
                            <a class="nav-link text-dark" asp-area="" href="oferta.php">Oferta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="onas.php">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="naszesklepy.php">Nasze sklepy</a>
                        </li>

                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="logowanie.php">Zaloguj się</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="rejestracja.php">Rejestracja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="panel.php">Panek administracyjny</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<center><h1 class="display-4">Nasze placówki</h1></center>

<div1 class="row">
  <div1 class="column">
    <img src="grafiki/strefa.jpg" width="350" height="250">
    </div1>
  <div1 class="column">
    <img src="grafiki/ksiazki.jpg" width="350" height="250">
  </div1>
  <div1 class="column">
    <img src="grafiki/ksiegarnia.jpg" width="350" height="250">
  </div1>
  </div1>
  <br></br>
  <p><i>Odwiedź jedną z naszych księgarni. Gwarantujemy, że znajdziesz w naszej ofercie coś dla siebie! Ponadto każda z naszych placówek ma również strefę relaksu, gdzie możesz odpocząć ze swoją ulubioną książką.</i></p>
  <h2>Zapraszamy do:</h2>
  <ul>
  <li>ul. Mickiewicza 14 Warszawa</li>
  <li>ul. Przemysłowa 128 Kraków</li>
  <li>ul. Strzyżowska 1 Rzeszów</li>
  <li>ul. Warszawska 89 Jasło</li>
  <li>ul. Robotnicza 23/42 Poznań</li>
  <li>ul. Rejtana 90 Nysa</li>
  <li>ul. Sopocka 66 Gdynia</li>
</ul>
<br></br>
<br></br>
<br></br>
<br></br>
<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 Inżynieria oprogramowania
        </div>
    </footer>

    </section>
</body>
</html>