<?
$passwordTest = $_GET['password'];
$punteggioMinimo = $_GET['punteggio'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT Username, Password, Punteggio FROM Partecipante WHERE Password = '".$passwordTest."';";
$risultato = mysql_query($query);

while($riga = mysql_fetch_row($risultato))
{
   if(intval($riga[2]) >= intval($punteggioMinimo))
   {
      $query = "UPDATE Partecipante SET Esito = 'Superato' WHERE Username = '".$riga[0]."' AND Password = '".$passwordTest."';";
      mysql_query($query);
   }
   else if(intval($riga[2]) < intval($punteggioMinimo))
   {
      $query = "UPDATE Partecipante SET Esito = 'Respinto' WHERE Username = '".$riga[0]."';";
      mysql_query($query);
   }
}
?>
