<?
$passwordAttuale = $_GET['password'];
$matricola = $_GET['matricola'];
$nuovaPassword = $_GET['nPassword'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "UPDATE Utenti SET Password = '".$nuovaPassword."' WHERE Username = '".$matricola."' AND Password = '".$passwordAttuale."';";
mysql_query($query);



?>
