<?php
$user=$_GET['user'];
$dati=$_GET['dati'];
$elementi=explode(',', $dati);
//print_r($elementi);
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is") or die("Errore selezione db");
$query="UPDATE cliente SET id='01',Nome='$elementi[1]',Cognome='$elementi[2]',Indirizzo='$elementi[3]',Comune='$elementi[4]',CAP= '$elementi[5]',Provincia='$elementi[6]',CodiceFiscale='$elementi[7]',Telefono='$elementi[8]',Fax='$elementi[9]',Email='$elementi[10]',Sesso='$elementi[11]',Username='$elementi[12]', Password='$elementi[13]' WHERE Username='$user'";
$rs=@mysql_query($query) or die("ERRORE QUERY");
$query1="UPDATE login SET Id='01',Nome='$elementi[12]',Password='$elementi[13]' WHERE Nome='$user'";
@mysql_query($query1) or die("ERRORE QUERY LOGIN");
?>