<?

session_start();
$nome = $_SESSION['nomeA'];
$cognome = $_SESSION['cognomeA'];
$username = $_SESSION['usernameA'];
$email = $_SESSION['emailA'];
$password = $_SESSION['passwordA'];
$ripetiPassword = $_SESSION['ripetiPasswordA'];
echo $nome." ".$cognome." ".$username." ".$email." ".$password." ".$ripetiPassword."";
$connessione = mysql_connect("localhost", "", "");

echo "<h3> Iscrizione effettuato con successo!! </h3> I tuoi dati sono:<br>";
echo "<b> Nome: </b> ".$nome."<br>";
echo "<b> Cognome: </b>".$cognome."<br>";
echo "<b> Username: </b>".$username."<br>";
echo "<b> e-mail: </b>".$email."<br>";
echo "<b> password: </b>".$password."<br>";

mysql_select_db("my_provaprova9494");

$query = "INSERT INTO Amministratori VALUES('".$nome."', '".$cognome."', '".$username."','".$email."','".$password."');";
mysql_query($query);

mysql_close();






?>
