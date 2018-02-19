<?
session_start();
$nome = $_SESSION['nomeU'];
$cognome = $_SESSION['cognomeU'];
$username = $_SESSION['usernameU'];
$email = $_SESSION['emailU'];
$password = $_SESSION['passwordU'];
$ripetiPassword = $_SESSION['riperiPasswordU'];

echo "<h3> Iscrizione effettuato con successo!! </h3> I tuoi dati sono:<br>";
echo "<b> Nome: </b> ".$nome."<br>";
echo "<b> Cognome: </b>".$cognome."<br>";
echo "<b> Username: </b>".$username."<br>";
echo "<b> e-mail: </b>".$email."<br>";
echo "<b> password: </b>".$password."<br>";
$connessione = mysql_connect("localhost", "", "");

mysql_select_db("my_provaprova9494");

$query = "INSERT INTO Utenti VALUES('".$nome."', '".$cognome."', '".$username."','".$email."','".$password."');";
mysql_query($query);

mysql_close()
?>
