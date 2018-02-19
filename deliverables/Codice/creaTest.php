<?
session_start();
$titoloTest = $_POST['titoloTest'];
$minutiDurata = $_POST['minutiDurata'];
$numeroRisposte = $_POST['numeroRisposte'];
$minuti = $_POST['minuti'];
$ore = $_POST['ore'];
$giorni = $_POST['giorni'];
$mesi = $_POST['mesi'];
$anno = $_POST['anno'];
$passwordTest = $_POST['passwordTest'];
$numeroDomande = $_POST['numeroDomande'];

/*
$file = $passwordTest.".html";
$codice = "
<html>
<head>
<title> Prova </title>
</head>
<body>
vediamo
</body>
</html>";

$fo = fopen($file, "w");
fwrite($fo, $codice);
fclose();
*/


$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494");

$query = "INSERT INTO Test VALUES('".$titoloTest."', '".$minuti."', '".$ore."','".$giorni."','".$mesi."','".$minutiDurata."','".$passwordTest."','".$anno."', 'NO');";
mysql_query($query);

mysql_close();


$_SESSION['titoloTest'] = $titoloTest;
$_SESSION['minutiDurata'] = $minutiDurata;
$_SESSION['oreDurata'] = $oreDurata;
$_SESSION['numeroRisposte'] = $numeroRisposte;
$_SESSION['minuti'] = $minuti;
$_SESSION['ore'] = $ore;
$_SESSION['giorni'] = $giorni;
$_SESSION['mesi'] = $mesi;
$_SESSION['passwordTest'] = $passwordTest;
$_SESSION['numeroDomande'] = $numeroDomande;

header("Location: /creaDomande.php");


?>
