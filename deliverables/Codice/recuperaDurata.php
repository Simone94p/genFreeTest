<? session_start();
$passwordTest = $_SESSION['passwordTest'];

$connessione = mysql_connect("localhost", "", "");
mysql_select_db("my_provaprova9494", $connessione);

// Recupera la durata nel database
$query = "SELECT Durata FROM Test WHERE Password = '".$passwordTest."' ;";
$risultato = mysql_query($query);
$durata = mysql_fetch_row($risultato);

// restituisce la durata
echo $durata[0];
?>
