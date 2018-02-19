<?
session_start();
$matricola = $_POST['usernameLU'];
$password = $_POST['passwordLU'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT * FROM Utenti WHERE Username = '".$matricola."' AND Password = '".$password."';";
$risultato = mysql_query($query);

if(mysql_fetch_row($risultato) == NULL)
{
   header("Location: /erroreLogin.php");
}
else
{
   $_SESSION['usernameLU'] = $matricola;
   $_SESSION['passwordLU'] = $password;
   header("Location: /areaStudente.html");
}
?>
