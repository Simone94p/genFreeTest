<?
session_start();
$connessione = mysql_connect("localhost", "", "");
 mysql_select_db("my_provaprova9494", $connessione);
$passwordTest = $_SESSION['passwordTest'];
$username = $_SESSION['usernameLU'];

$punteggio = 0;

$query = "SELECT numeroDomande FROM Domande WHERE Password = '".$passwordTest."'; ";
$risultato = mysql_query($query);
$riga = mysql_fetch_row($risultato);
$numeroDomande = $riga[0];

$query = "SELECT RispostaEsatta FROM Domande WHERE Password = '".$passwordTest."'; ";
$risultato = mysql_query($query);

$query2 = "SELECT Punteggio FROM Domande WHERE Password = '".$passwordTest."'; ";
$risultato2 = mysql_query($query2);
$i = 1;

$risposteEsatte = 0;


while($riga = mysql_fetch_row($risultato))
{
   $risposta = $_POST["risposta".$i];
   $riga2 = mysql_fetch_row($risultato2);
   if(intval($risposta) == intval($riga[0]))
   {
      $risposteEsatte = $risposteEsatte + 1;
      $punteggio = $punteggio + intval($riga2[0]);
   }
   $i = $i + 1;
}

echo "<h3> <u> TEST TERMINATO </u> </h3> <br>";
echo "<h3> <u> Risposte esatte: ".$risposteEsatte." Punteggio: ".$punteggio." </u> </h3><br>";
echo "<a href = 'areaStudente.html'> ritorna alla home </a>";

$query = "INSERT INTO Partecipante VALUES('".$username."', '".$passwordTest."', '".$punteggio."', 'Sospeso', '".$risposteEsatte."');";
mysql_query($query);
?>
