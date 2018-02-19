<?
   $connessione = mysql_connect("localhost", "", "");
   mysql_select_db("my_provaprova9494", $connessione);
   
   $password = $_GET['password'];
   
   $query1 = "SELECT * FROM Partecipante WHERE Password = '".$password."';";
   $risultato = mysql_query($query1);
   
   $riga = mysql_fetch_row($risultato);
   
   $query = "DELETE FROM Partecipante WHERE Password = '".$password."';";
   
   mysql_query($query);
   
   if($riga != NULL)
   {
      echo "vero";
   }
   else
   {
      echo "falso";
   }
   
   
   
?>
