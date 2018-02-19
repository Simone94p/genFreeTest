<?

session_start();
$nome = $_POST['nomeA'];
$cognome = $_POST['cognomeA'];
$username = $_POST['usernameA'];
$email = $_POST['emailA'];
$password = $_POST['passwordA'];
$ripetiPassword = $_POST['ripetiPasswordA'];
$num = count(explode('@', $email)) -1;

$connect = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connect);

$query1 = "SELECT * FROM Amministratori WHERE eMail = '".$email."';";
$risultato1 = mysql_query($query1);

$query2 = "SELECT * FROM Amministratori WHERE Username = '".$username."';";
$risultato2 = mysql_query($query2);

if(mysql_fetch_row($risultato2) != NULL)
{
   header("location: /erroreRegistrazione.php");
}
elseif(mysql_fetch_row($risultato1) != NULL)
{
    header("location: /erroreRegistrazione.php");
}
elseif(!$email)
{
  $_SESSION['messaggioErrore'] = "Campo e-mail vuoto";
  header("location: /errore.php");
}

elseif($num != 1)
{
  $_SESSION['messaggioErrore'] = "email non valida";
  header("location: /errore.php");
}
elseif(strpos($email, ';') || strpos($email, ',') || strpos($email, ' '))
{
  $_SESSION['messaggioErrore'] = "email non valida";
  header("location: /errore.php");
}
               
elseif(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) 
{
  $_SESSION['messaggioErrore'] = "email non valida";
  header("location: /errore.php");
}
elseif(strlen($password) < 6)
{
  $_SESSION['messaggioErrore'] = "la password deve contenere almeno 6 caratteri";
  header("location: /errore.php");
}
elseif($password != $ripetiPassword)
{
  $_SESSION['messaggioErrore'] = "le password inserite non coincidono";
  header("location: /errore.php");
}
elseif(!$password)
{
  $_SESSION['messaggioErrore'] = "campo password vuoto";
  header("location: /errore.php");
}
elseif(!$nome)
{
  $_SESSION['messaggioErrore'] = "campo nome vuoto";
  header("location: /errore.php");
}
elseif(!$cognome)
{
  $_SESSION['messaggioErrore'] = "campo cognome vuoto";
  header("location: /errore.php");
}
elseif(!$username)
{
  $_SESSION['messaggioErrore'] = "campo username vuoto";
}
else
{
    header("location: /iscrizioneAmministratore.php");
}

$_SESSION['nomeA'] = $nome;
$_SESSION['cognomeA'] = $cognome;
$_SESSION['usernameA'] = $username;
$_SESSION['emailA'] = $email;
$_SESSION['passwordA'] = $password;
$_SESSION['ripetiPasswordA'] = $ripetiPassword;

?>
