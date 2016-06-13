<?php

$dati=$_GET['dati'];
$elementi=explode(',', $dati);
//print_r($elementi);
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is") or die("Errore selezione db");
$query="INSERT INTO applicazioni(id,NomeApplicazione,Tipo,Autori,Prezzo, Link) VALUES ('$elementi[6]','$elementi[1]','$elementi[2]','$elementi[3]','$elementi[4]', '$elementi[5]')";
$rs=@mysql_query($query) or die("ERRORE QUERY");
//$query="INSERT INTO login(Nome, Password) VALUES ('$elementi[12]','$elementi[13]')";
//@mysql_query($query) or die("ERRORE QUERY LOGIN");
?>