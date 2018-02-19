<?
$titolo = $_GET['tit'];
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "UPDATE Test SET Stato = 'SI' WHERE Titolo = '".$titolo."';";
mysql_query($query);
?>
