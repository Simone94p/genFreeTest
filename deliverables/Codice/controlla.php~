<?
session_start();
$_SESSION['passwordTest'] = $_GET['pas'];
$password = $_GET['pas'];
$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

$query = "SELECT Password FROM Test WHERE Password = '".$password."';";
$risultato = mysql_query($query);

$query2 = "SELECT Stato FROM Test WHERE Password = '".$password."';";
$risultato2 = mysql_query($query2);

if(mysql_fetch_row($risultato) == NULL)
{
    echo "false";
}
else
{
   $riga = mysql_fetch_row($risultato2);
    if($riga[0] == "SI")
    {
    echo "true";
    }
    else
    {
     echo "false";
    }
}


?>
