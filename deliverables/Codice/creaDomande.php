<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title></title>
</head>
<body  style = "color:white; background-color:#FF831C;">

<form action = "creaSessione.php" method = "post">
<?
session_start();
$numeroDomande = $_SESSION['numeroDomande'];
$numeroRisposte = $_SESSION['numeroRisposte'];
$n = intval($numeroDomande);
$r = intval($numeroRisposte);
$i = (int) "0";
$j = (int) "0";
while($i < $n)
{
  echo "Domanda n. <b>".$i."</b> <br>";
  echo "Inserisci la domanda <input type = 'text' name = 'domande[]'> <br>";
  echo "Inserisci le risposte<br>";
  while($j < $r)
  {
    echo "n. ".$j."<input type = 'text' name = 'risposte[]'> <br>";
    $j = $j + 1;
  }
  $j = 0;
  echo "Inserisci il n. della risposta corretta<br>";
  echo "<select name = 'rispostaCorretta[]'>";
  while($j < $r)
  {
    echo "<option value = '".$j."'>".$j."</option>";
    $j = $j + 1;
  }
  echo "</select> <br>";
  echo "Inserisci il punteggio della domanda <br>";
  echo "<input type ='text' name = 'punteggio[]'> <br>";
  $j = 0;
  $i = $i + 1;
  echo "<br><br>";
}
$_SESSION['n'] = $r * $n;
?>
<input type = "submit">
</form>


</body>
</html>
