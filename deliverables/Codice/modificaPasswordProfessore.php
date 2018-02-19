<?
$passwordAttuale = $_GET['password'];
$username = $_GET['username'];
$nuovaPassword = $_GET['nPassword'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "UPDATE Amministratori SET Password = '".$nuovaPassword."' WHERE Username = '".$username."' AND Password = '".$passwordAttuale."';";
mysql_query($query);



?>
