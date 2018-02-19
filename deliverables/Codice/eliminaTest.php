<?
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$password = $_GET['password'];
$query = "DELETE FROM Test WHERE Password = '".$password."';";
mysql_query($query);

$query = "DELETE FROM Sessione WHERE Password = '".$password."';";
mysql_query($query);

$query = "DELETE FROM Risposte WHERE Password = '".$password."';";
mysql_query($query);

$query = "DELETE FROM Domande WHERE Password = '".$password."';";
mysql_query($query);


?>
