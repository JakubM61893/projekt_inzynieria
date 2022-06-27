<!DOCTYPE html>
<html>
<head>
    <title>Strona g³ówna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
body{
  background-color: #dddddd;
}

p {
text-align: center;
font-size: 30px;
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
                <a class="navbar-brand" asp-area="" href="index.php">Ksiêgarnia</a>
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
                            <a class="nav-link text-dark" asp-area="" href="logowanie.php">Zaloguj siê</a>
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
<center><h1 class="display-4">WITAMY W NASZEJ KSIÊGARNI</h1></center>
<p class="aligncenter">
    <img src="grafiki/main.jpg" width="1000" height="600" style="display: block; margin: auto" />
</p>
<p><i>Oferujemy wiele ksi¹¿ek. Zapraszamy do zapoznania siê ze stron¹.</i></p>
<br></br>
<br></br>
<footer class="border-top footer text-muted">
        <div class="container">
            Jakub Motyka 61893 In¿ynieria oprogramowania
        </div>
    </footer>

    </section>
</body>
</html>