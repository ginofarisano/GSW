<!--REGISTRA L'UTENTE NEL DATABASE CLIENTE E LOGIN-->
<?php

$dati=$_GET['dati'];
$elementi=explode(',', $dati);
//print_r($elementi);
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is") or die("Errore selezione db");
$query="INSERT INTO cliente(id,Nome, Cognome, Indirizzo, Comune, CAP, Provincia, CodiceFiscale, Telefono, Fax, Email, Sesso, Username, Password) VALUES ('01','$elementi[1]','$elementi[2]','$elementi[3]','$elementi[4]','$elementi[5]','$elementi[6]','$elementi[7]','$elementi[8]','$elementi[9]','$elementi[10]','$elementi[11]','$elementi[12]', '$elementi[13]')";
$rs=@mysql_query($query) or die("ERRORE QUERY");
$query="INSERT INTO login(Id,Nome, Password) VALUES ('01','$elementi[12]','$elementi[13]')";
@mysql_query($query) or die("ERRORE QUERY LOGIN");
?>