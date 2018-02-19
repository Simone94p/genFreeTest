<?
$passwordTest = $_GET['password'];
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT Username, Punteggio, Esito, RisposteEsatte FROM Partecipante WHERE Password = '".$passwordTest."';";
$risultato = mysql_query($query);
$stringa = "";
while($riga = mysql_fetch_row($risultato))
{
   $stringa = $stringa."".$riga[0]." ".$riga[1]." ".$riga[2]." ".$riga[3]." ";
}
echo $stringa;
?>
