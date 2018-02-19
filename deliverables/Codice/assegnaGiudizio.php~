<?
$matricola = $_GET['matricola'];
$password = $_GET['password'];
$giudizio = $_GET['giudizio'];

$connessione = mysql_connect("localhost","","");
mysql_select_db("my_provaprova9494", $connessione);

if($giudizio == "S")
{
$query = "UPDATE Partecipante SET Esito = 'Superato' WHERE Username = '".$matricola."' AND Password = '".$password."';";
mysql_query($query);
}
else if($giudizio == "R")
{
$query = "UPDATE Partecipante SET Esito = 'Respinto' WHERE Username = '".$matricola."' AND Password = '".$password."';";
mysql_query($query);
}
?>
