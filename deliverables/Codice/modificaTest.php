<?
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$password = $_GET['password'];
$minuto = $_GET['minuto'];
$ora = $_GET['ora'];
$giorno = $_GET['giorno'];
$mese = $_GET['mese'];
$anno = $_GET['anno'];
$titolo = $_GET['titolo'];
$durata = $_GET['durata'];

$query = "UPDATE Test SET Titolo = '".$titolo."', Minuti = '".$minuto."', Ore = '".$ora."', Giorno = '".$giorno."', Mese = '".$mese."', Anno = '".$anno."', Durata = '".$durata."' WHERE Password = '".$password."';";
mysql_query($query);
?>
