<?
session_start();
$n = $_SESSION['n'];
$arrayDomande = array();
$passwordTest = $_SESSION['passwordTest'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$arrayDomande = $_POST['domande'];

echo "TEST CREATO";
$arrayRispostaCorretta = array();
$arrayRispostaCorretta = $_POST['rispostaCorretta'];


$arrayPunteggio = array();
$arrayPunteggio = $_POST['punteggio'];


$arrayRisposte = array();
$arrayRisposte = $_POST['risposte'];

$query = "INSERT INTO Sessione VALUES('".count($arrayRisposte)."', '".$passwordTest."');";
mysql_query($query);

for($i = 0; $i < $n; $i++)
{
$query1 = "INSERT INTO Risposte VALUES('".$arrayRisposte[$i]."', '".$passwordTest."');";
mysql_query($query1);
$query = "INSERT INTO Domande VALUES('".$arrayDomande[$i]."', ".$arrayPunteggio[$i].", '".$passwordTest."', ".$arrayRispostaCorretta[$i].", '".count($arrayDomande)."');";
$risultato = mysql_query($query);
  
}
?>
