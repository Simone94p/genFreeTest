<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title></title>
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
  
  function aggiornamento() 
  {
  var data = new Date();
  var minuto, ora, giorno, mese, titolo, secondi, anno;
  var dataTest, minutoTest, giornoTest, meseTest, oraTest, annoTest;
  var numeroCicli;
  var i = 0;
  
  numeroCicli = document.getElementById("numeroTest").innerHTML;
  numeroCicli = parseInt(numeroCicli);
  
  minuto = data.getMinutes();
  ora = data.getHours();
  giorno = data.getDate();
  mese = data.getMonth() + 1;
  secondi = data.getSeconds();
  anno = data.getFullYear();
  
  
  for(i = 0; i <= numeroCicli; i++)
  {
  dataOra = document.getElementById("ora"+i).innerHTML;
  minutoTest = dataOra.substr(3,5);
  oraTest = dataOra.substr(0,2);
  dataData = document.getElementById("data"+i).innerHTML;
  giornoTest = dataData.substr(0,2);
  meseTest = dataData.substr(3,2);
  annoTest = dataData.substr(6,9);
  
  annoTest = "20"+annoTest;

  minutoTest = parseInt(minutoTest);
  oraTest = parseInt(oraTest);
  giornoTest = parseInt(giornoTest);
  meseTest = parseInt(meseTest);
  annoTest = parseInt(annoTest);
  
  var titolo = document.getElementById("titolo"+i).innerHTML;
  if(anno > annoTest)
  {
     document.getElementById("pulsante"+i).disabled = false;
     document.getElementById("stato"+i).innerHTML = "SI";
     aggiorna(titolo);
  }
  else if(anno == annoTest)
  {
      if(mese > meseTest)
      {
        document.getElementById("pulsante"+i).disabled = false;
        document.getElementById("stato"+i).innerHTML = "SI";
        aggiorna(titolo);
      }
      else if(mese == meseTest)
      {
          if(giorno > giornoTest)
          {
            document.getElementById("pulsante"+i).disabled = false;
            document.getElementById("stato"+i).innerHTML = "SI";
            aggiorna(titolo);
          }
          else if(giorno == giornoTest)
          {
            if(ora > oraTest)
            {
               document.getElementById("pulsante"+i).disabled = false; 
               document.getElementById("stato"+i).innerHTML = "SI";
               aggiorna(titolo);
            }
            else if(ora == oraTest)
            {
               if(minuto > minutoTest)
               {
                 document.getElementById("pulsante"+i).disabled = false;
                 document.getElementById("stato"+i).innerHTML = "SI";
                 aggiorna(titolo);
               }
               else if(minuto == minutoTest)
               {
                 document.getElementById("pulsante"+i).disabled = false;
                 document.getElementById("stato"+i).innerHTML = "SI";
                 aggiorna(titolo);
               }
            }
          }
      }
  }
  
  
  } // fine ciclo
   
  }
  
 function aggiorna(titolo)
{
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
        http.open("GET", 'aggiornaDatabase.php?tit='+titolo, true);
        http.send(null);
        
     
     function requestStateHandler()
     {
        if(http.readyState == 4 && http.status == 200)
        {
          
        }
     }
}

 function oClock()
  {
  var data1 = new Date();
  var minuto, ora, giorno, mese, titolo, secondi, anno;
  var dataTest, minutoTest, giornoTest, meseTest, oraTest, annoTest;
  var numeroCicli;
  var i = 0;
  
  
  minuto = data1.getMinutes();
  ora = data1.getHours();
  giorno = data1.getDate();
  mese = data1.getMonth() + 1;
  secondi = data1.getSeconds();
  anno = data1.getFullYear();
  
  document.getElementById("orarioAttuale").innerHTML = ""+ora+":"+minuto+":"+secondi+"";
  document.getElementById("dataAttuale").innerHTML = ""+giorno+"/"+mese+"/"+anno;
  
  window.setTimeout("oClock()", 1000);
  }
  
  function apriTest(pulsante)
  {
     var p = pulsante.value;
     var password = prompt("Inserisci password", "password.....");
     
     var s = 0;
     
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
        http.open("GET", 'controlla.php?pas='+password, true);
        http.send(null);
        
     
     function requestStateHandler()
     {
        if(http.readyState == 4 && http.status == 200)
        {
          var risposta = http.responseText;
          if(risposta == "true")
          {
              window.open("http://provaprova9494.altervista.org/paginaTest.php");
          }
          else
          {
              alert("La password insertita non e' valida; per favore riprova oppure contatta il Professore");
          }
        }
     }
     
    
     
  }
  function apriFinestra(pulsante)
  {
    var data2 = new Date();
    var minuto, ora, giorno, mese, anno;
    var minutoTest, giornoTest, oraTest, meseTest, annoTest;
    var indice = pulsante.id;
    indice = indice.substr(8, 9);
    
    minuto = data2.getMinutes();
    ora = data2.getHours();
    giorno = data2.getDate();
    mese = data2.getMonth() + 1;
    anno = data2.getFullYear();

    dataOra = document.getElementById("ora"+indice).innerHTML;
    minutoTest = dataOra.substr(3,5);
    oraTest = dataOra.substr(0,2);
    dataData = document.getElementById("data"+indice).innerHTML;
    giornoTest = dataData.substr(0,2);
    meseTest = dataData.substr(3,5);
    annoTest = dataData.substr(6,9);
    
    minutoTest = parseInt(minutoTest);
    oraTest = parseInt(oraTest);
    giornoTest = parseInt(giornoTest);
    meseTest = parseInt(meseTest);
    annoTest = parseInt(annoTest);

if(anno > annoTest)
  {
      apri();
  }
  else if(anno == annoTest)
  {
      if(mese > meseTest)
      {
        apri();
      }
      else if(mese == meseTest)
      {
          if(giorno > giornoTest)
          {
            apri();    
          }
          else if(giorno == giornoTest)
          {
            if(ora > oraTest)
            {
               apri();
            }
            else if(ora == oraTest)
            {
               if(minuto > minutoTest)
               {
                 apri();
                    
               }
               else if(minuto == minutoTest)
               {
                 apri();
               }
            }
          }
      }
  }
    
     
  }
  
  function apri()
  {
     <?
        header("Location: /finestraPasswordTest.php");
     ?>
  }
  
  
  </script>
  
  
</head>
<body  style = "background-image: url(test2.jpg); background-size:1500px; color:#ffffff;" onFocus = "this.oClock()" onLoad = "setTimeout('location.reload()', 20000)">

 <ul id="menu">
    <li><a href="areaStudente.html">Home</a></li>
    <li><a href="elencoTest.php"> Elenco dei test </a></li>
    <li><a href="proveUtente.html"> Prove svolte </a></li>
    <li><a href="cambiaPasswordUtente.html"> Cambia password </a></li>
    <li><a href="home.html">Logout</a></li>
</ul> <br> <br>
  <h4> <p> Sono le:  <b id = "orarioAttuale"> </b> del <b id = "dataAttuale"> </b> </p> </h4> 
  
  <table border = "1" style = "color:black;">
  
  <tr> <td> <b> Titolo della prova </b> </td> <td> <b> Ora inizio </b> </td> <td> <b> Data inizio </b> </td> <td> <b> Durata </b> </td> <td> <b> Inizia prova </b> </td> <td> <b> Stato </b> </td> </tr>
  <?
 $connessione = mysql_connect("localhost", "", "");
 mysql_select_db("my_provaprova9494", $connessione);
 
 $query = "SELECT * FROM Test";
 $risultato = mysql_query($query, $connessione);
 
 $numeroRighe = mysql_num_rows($risultato);
 
 
 if($numeroRighe == 0)
 {
   echo "<b> Attualmente non ci sono test </b>";
 }
 else
 {
 $i = 0;
    while($riga = mysql_fetch_row($risultato))
    {
       echo "<tr> <td id = 'titolo".$i."'>".$riga[0]."</td><td id = 'ora".$i."'>".$riga[2].":".$riga[1]."</td><td id = 'data".$i."'>".$riga[3]."/".$riga[4]."/".$riga[7]." </td><td>".$riga[5]." minuti</td> <td> <input type = 'button' id = 'pulsante".$i."' value = 'inizia' disabled onClick = 'apriTest(this)'> </td> <td id = 'stato".$i."'>".$riga[8]."</td> </tr>";
       $i = $i+1;
    }
  $i = 0;  
 }
  ?>
  
  </table>
  <b style = "color:black;"> Tot. test: <a id = "numeroTest"> <? echo $numeroRighe; ?> </a> </b>
  
  <script> aggiornamento(); </script>
  
  
  
  

</body>
</html>
