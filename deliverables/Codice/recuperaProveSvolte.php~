<?
session_start();
$username = $_SESSION['usernameLU'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT Password, Punteggio, Esito, RisposteEsatte FROM Partecipante WHERE Username = '".$username."';";
$risultato = mysql_query($query);

$stringa = "";
while($riga = mysql_fetch_row($risultato))
{
   $stringa = $stringa."".$riga[0]." ".$riga[1]." ".$riga[2]." ".$riga[3]." ";
}
echo $stringa;
?>
