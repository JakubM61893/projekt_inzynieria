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
    <title>Użytkownicy</title>
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
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inzynieria";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['UserID'])) {
  $sql = sprintf("DELETE FROM users WHERE UserID = %d", $_POST['UserID']);
  $mysqli->query($sql);
  header('Location: uzytkownicy.php ' . getenv("HTTP_REFERER"));
  
}

$result = $mysqli->query("SELECT login, email, UserID FROM users ");
echo '<table><tr>
  <th>Login</th>
  <th>Email</th>
  <th> </th>
</tr>';
while( $row = $result->fetch_row()) {
  vprintf('<tr><td>%s</td><td>%s</td>
        <td><form action="" method="post">
        <input type="hidden" name="UserID" value="%s">
        <input type="submit" name="s" value="Usuń">
        </form></td>
        </tr>', $row);
}
echo '</table>';