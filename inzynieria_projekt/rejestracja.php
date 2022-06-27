<?php

session_start();

if (isset($_POST['imie']))
{
$wszystko_OK=true;
$imie = $_POST['imie'];
}

if ((strlen($imie)<4) || (strlen($imie)>20))
{
$wszystko_OK=false;
$_SESSION['e_imie']="Imię musi mieć od 3 do 20 znaków!";
}

if (isset($_POST['nazwisko']))
{
$wszystko_OK=true;
$nazwisko = $_POST['nazwisko'];
}
if ((strlen($nazwisko)<3) || (strlen($nazwisko)>20))
{
$wszystko_OK=false;
$_SESSION['e_nazwisko']="Nazwisko musi mieć od 3 do 20 znaków!";
}

if (isset($_POST['nr']))
{
$wszystko_OK=true;
$nr = $_POST['nr'];
}
if ((strlen($nr)<9) || (strlen($nr)>9))
{
$wszystko_OK=false;
$_SESSION['e_nr']="Numer musi mieć 9 cyfer!";
}

if (isset($_POST['adres']))
{
$wszystko_OK=true;
$adres = $_POST['adres'];
}
if ((strlen($adres)<8) || (strlen($adres)>50))
{
$wszystko_OK=false;
$_SESSION['e_nick']="Wpisz prawidłowy adres!";
}

if (isset($_POST['email']))
{
$wszystko_OK=true;
$nick = $_POST['nick'];
}
if ((strlen($nick)<4) || (strlen($nick)>20))
{
$wszystko_OK=false;
$_SESSION['e_nick']="Login musi mieć od 4 do 20 znaków!";
}

if (ctype_alnum($nick)==false)
{
$wszystko_OK=false;
$_SESSION['e_nick']="Login może posiadać tylko litery i cyfry (bez polskich znaków)";
}

$email = $_POST['email'];
$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
{
$wszystko_OK=false;
$_SESSION['e_email']="Podaj poprawny e-mail!";

}

$haslo1 = $_POST['haslo1'];
$haslo2 = $_POST['haslo2'];

if ((strlen($haslo1)<5) || (strlen($haslo1)>15))
{
$wszystko_OK=false;
$_SESSION['e_haslo']="Hasło musi posiadać od 5 do 15 znaków!";
}

if ($haslo1 != $haslo2)
{
$wszystko_OK=false;
$_SESSION['e_haslo']="Podane hasła nie są identyczne!";

}



if (!isset($_POST['regulamin']))
{
$wszystko_OK=false;
$_SESSION['e_regulamin']="Zaakceptuj regulamin!";
}



require_once "polacz.php";


try
{
$polaczenie = new mysqli($host, $db_login, $db_haslo, $db_name);
if ($polaczenie->connect_errno!=0)
{
throw new Exception(mysqli_connect_errno());
}
else
{
$wynik = $polaczenie->query("SELECT login FROM users WHERE email='$email'");
}
if (!$wynik) throw new Exception($polaczenie->error);
$ile_takich_maili = $wynik->num_rows;
if($ile_takich_maili>0)
{
$wszystko_OK=false;
$_SESSION['e_email']="Istnieje już konto z takim e-mailem!";

}

$wynik = $polaczenie->query("SELECT UserID FROM users WHERE login='$nick'");

if (!$wynik) throw new Exception($polaczenie->error);
$ile_takich_nickow = $wynik->num_rows;
if($ile_takich_nickow>0)
{
$wszystko_OK=false;
$_SESSION['e_nick']="Istnieje już konto z takim loginem!";
}


if ($wszystko_OK==true)
{
if ($polaczenie->query("INSERT INTO users VALUES (NULL, '$imie', '$nazwisko', '$nr', '$adres', '$nick', '$haslo1', '$email')"))
{
$_SESSION['udanarejestracja']=true;
header('Location: register.php');
}
else
{
throw new Exception($polaczenie->error);
}


}


$polaczenie->close();

}



catch(Exception $e)
{
echo 'Błąd serwera!';
}






?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Rejestracja</title>
<style>
.error
{
color:red;
margin-top: 10px;
margin-bottom: 10px;
}


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
                            <a class="nav-link text-dark" asp-area="" href="panel.php">Panel administracyjny</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<form method="post">
<center><h1 class="display-4">Zarejestruj się!</h1></center>
<br/>
<center>Imię: <br /> <input type="text" name="imie"/></center><br/>

<?php

if (isset($_SESSION['e_imie']))
{
echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
unset($_SESSION['e_imie']);
}
?>
<center>Nazwisko: <br /> <input type="text" name="nazwisko"/></center><br/>

<?php

if (isset($_SESSION['e_nazwisko']))
{
echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
unset($_SESSION['e_nazwisko']);
}



?>
<center>Numer telefonu: <br /> <input type="text" name="nr"/></center><br/>
<?php

if (isset($_SESSION['e_nr']))
{
echo '<div class="error">'.$_SESSION['e_nr'].'</div>';
unset($_SESSION['e_nr']);
}



?>

<center>Adres zamieszkania: <br /> <input type="text" name="adres"/></center><br/>
<?php

if (isset($_SESSION['e_adres']))
{
echo '<div class="error">'.$_SESSION['e_adres'].'</div>';
unset($_SESSION['e_adres']);
}



?>

<center>Login: <br /> <input type="text" name="nick"/></center><br/>

<?php

if (isset($_SESSION['e_nick']))
{
echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
unset($_SESSION['e_nick']);
}

?>
<center>E-mail: <br /> <input type="text" name="email"/></center><br/>

<?php

if (isset($_SESSION['e_email']))
{
echo '<div class="error">'.$_SESSION['e_email'].'</div>';
unset($_SESSION['e_email']);
}

?>

<center>Hasło: <br /> <input type="password" name="haslo1"/></center><br/>

<?php

if (isset($_SESSION['e_haslo']))
{
echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
unset($_SESSION['e_haslo']);
}

?>
<center>Powtórz hasło: <br /> <input type="password" name="haslo2"/></center><br/>

<center><label>
<input type="checkbox" name="regulamin"/> Akceptuję regulamin
</label></center>
<?php

if (isset($_SESSION['e_regulamin']))
{
echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
unset($_SESSION['e_regulamin']);
}

?>
<center><input type="submit" value="Zarejestruj się"/></center>

</form>