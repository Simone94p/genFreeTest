<?
session_start();
$passwordInserita = $_GET['password'];
$username = $_SESSION['usernameLU'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT Password, Punteggio, Esito, RisposteEsatte FROM Partecipante WHERE Password = '".$passwordInserita."' AND Username = '".$username."' ;";
$risultato = mysql_query($query);

$riga = mysql_fetch_row($risultato);

echo $riga[0]." ".$riga[1]." ".$riga[2]." ".$riga[3]."";

?>
