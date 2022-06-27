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
body{
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
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inzynieria";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['KsiazkaID'])) {
  $sql = sprintf("DELETE FROM ksiazki WHERE KsiazkaID = %d", $_POST['KsiazkaID']);
  $mysqli->query($sql);
  header('Location: fantastyka_admin.php ' . getenv("HTTP_REFERER"));
  
}

$result = $mysqli->query("SELECT tytul, autor, KsiazkaID FROM ksiazki ");
echo '<table><tr>
  <th>Tytuł</th>
  <th>Autor</th>
  
  <th> </th>
  <th> </th>
</tr>';
while( $row = $result->fetch_row()) {
  vprintf('<tr><td>%s</td><td>%s</td>
        <td><form action="" method="post">
        <input type="hidden" name="KsiazkaID" value="%s">
        <input type="submit" name="s" value="Usuń">
        </form></td>
        </tr>', $row);
}
echo '</table>';



?>
 <a class="btn btn-outline-primary my-2 my-sm-0" href="fantastyka_dodaj.php">Dodaj książkę do oferty!</a>
  </div>

</div>