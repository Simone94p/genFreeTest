<?
session_start();
$username = $_POST['usernameLA'];
$password = $_POST['passwordLA'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT * FROM Amministratori WHERE Username = '".$username."' AND Password = '".$password."';";
$risultato = mysql_query($query);

if(mysql_fetch_row($risultato) == NULL)
{
   header("Location: /erroreLogin.php");
}
else
{
   $_SESSION['usernameLA'] = $matricola;
   $_SESSION['passwordLA'] = $password;
   header("Location: /areaProfessore.html");
}

