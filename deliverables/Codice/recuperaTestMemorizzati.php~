<?
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT * FROM Test";
$risultato = mysql_query($query);
$stringa = "";

while($riga = mysql_fetch_row($risultato))
{
  $string = $string."".$riga[0]." ".$riga[2].":".$riga[1]." ".$riga[3]."/".$riga[4]."/".$riga[7]." ".$riga[5]." ";
}
echo $string;
?>
