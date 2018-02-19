<html>
<head>
<title> </title>
<style>
    p { 
    margin-top: 50pt;
    margin-bottom: 20pt;
    margin-left: 200pt;
    margin-right: 200pt;
    border:solid 5px;
    text-align:center;
    background-color: #FF831C;
    border-color: #54BAE2;
    }
    ul {
    font-family: Verdana, sans-serif;
    font-size: 11px;
    margin: 0;
    padding: 0;
    list-style: none;
}
li {
    background-color: #FF831C;
    border-bottom: 5px solid #54BAE2;
    display: block;
    width: 150px;
    height: 30px;
    margin: 2px;
    float: left; /* elementi su singola riga */
}
a
{
color: #fff;
    display: block;
    font-weight: bold;
    line-height: 30px;
    padding-left: 15px;
    text-decoration: none;
    width: 135px; 
    height: 30px;
}
ul#menu li.active, ul#menu li:hover {
    background-color: #54BAE2;
    border-bottom: 5px solid #FF831C;
}
  </style>
<script>
   var durata;
   function contoAllaRovescia(minuti, secondi)
   {
      if(secondi == 0 && minuti != 0)
      {
         minuti--;
         secondi = 60;
         document.getElementById("cR").innerHTML = ""+minuti+":"+secondi+"";
      }
      else if(secondi == 0 && minuti == 0)
      {
         alert("Test terminato");
         open("risultato.php");
          window.close();
      }
      else if(secondi > 0)
      {
        secondi--;
        document.getElementById("cR").innerHTML = ""+minuti+":"+secondi+"";
      }
      setTimeout("contoAllaRovescia("+minuti+", "+secondi+")", 1000);
   }
   
   function recuperaDurata()
   {
       var durata;
        var http = null;
     if(window.XMLHttpRequest)
     {
        http = new XMLHttpRequest();
     }
     else if(window.ActiveXObject)
     {
       http = new ActiveXObject("Microsoft.XMLHTTP");
     }
        http.onreadystatechange = requestStateHandler;
        http.open("GET", 'recuperaDurata.php', true);
        http.send(null);
        
     function requestStateHandler()
     {
        if(http.readyState == 4 && http.status == 200)
        {
           var secondi = 0;
           durata = http.responseText;
           durata = parseInt(durata);
           contoAllaRovescia(durata, secondi);
        }
     }
    
   }
</script>
</head>
<body style = "background-color:#FF831C; color:white; background-image:url(test2.jpg);">

<p> Mancano: <span id = "cR"> </span> </p> <br>

<?
session_start();
$nomeUtente = $_SESSION['usernameLU'];
$passwordTest = $_SESSION['passwordTest'];
$username = $_SESSION['usernameLU'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$queryControllo = "SELECT Username FROM Partecipante WHERE Password = '".$passwordTest."'";
$risultatoControllo = mysql_query($queryControllo);

while($riga = mysql_fetch_row($risultatoControllo))
{
   if($riga[0] == $username)
   {
       header("Location: erroreTest.php");
   }
}

$query = "SELECT Durata FROM Test WHERE Password = '".$passwordTest."' ;";
$risultato = mysql_query($query);
$durata = mysql_fetch_row($risultato);

$query = "SELECT numeroRisposte FROM Sessione WHERE Password = '".$passwordTest."' ;";
$risultato = mysql_query($query);
$numeroRisposte = mysql_fetch_row($risultato);


$query = "SELECT numeroDomande FROM Domande WHERE Password = '".$passwordTest."' ;";
$risultato = mysql_query($query);
$numeroDomande = mysql_fetch_row($risultato);

$numeroRisposteDomanda = intval($numeroRisposte[0]) / intval($numeroDomande[0]);

$query = "SELECT Domanda FROM Domande WHERE Password = '".$passwordTest."' ;";
$risultato = mysql_query($query);
$i = 1;

$query = "SELECT Risposta FROM Risposte WHERE Password = '".$passwordTest."' ;";
$risultato2 = mysql_query($query);
$j = 0;
?>
<form action = "risultatoTest.php" method = "post">
<?
while($rigaDomande = mysql_fetch_row($risultato))
{
   echo "<br><p>Domanda n. ".$i." : ".$rigaDomande[0]."</p><br><p>";
  
   while($j < $numeroRisposteDomanda)
   {
      $rigaRisposte = mysql_fetch_row($risultato2);
      echo $rigaRisposte[0]." <input type = 'radio' name = 'risposta".$i."' value = '".$j."'> <br>";
      $j = $j+1;
   }
   $j = 0;
   $i = $i+1;
   
}
echo "</p>";
?>
<br> <div align = "center"> <input type = "submit"> </div>
</form>

<script>
var minuti;
var secondi = 0;
recuperaDurata();


</script>


</body>
</html>
