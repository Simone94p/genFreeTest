<?
session_start();
$messaggio = $_SESSION['messaggioErrore'];
echo "ISCRIZIONE FALLITA: ".$messaggio;
?>
