<?php

$dati=$_GET['dati'];
$elementi=explode(',', $dati);
print_r($elementi);
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is") or die("Errore selezione db");
$query="INSERT INTO azienda(id, NomeAzienda ,  Settore ,  NumeroDipendenti ,  Indirizzo ,  Cap ,  Provincia ,  Comune ,  Telefono ,  Fax ,  Email ,  SitoWeb ,  PartitaIva ,    NomeReferente ,  Username ,  Password ) VALUES ('02','$elementi[1]','$elementi[2]','$elementi[3]','$elementi[4]','$elementi[5]','$elementi[6]','$elementi[7]','$elementi[8]','$elementi[9]','$elementi[10]','$elementi[11]','$elementi[12]', '$elementi[13]', '$elementi[14]', '$elementi[15]')";
$rs=@mysql_query($query) or die("ERRORE QUERY");
$query="INSERT INTO login(Id,Nome, Password) VALUES ('02','$elementi[14]','$elementi[15]')";
@mysql_query($query) or die("ERRORE QUERY LOGIN");
?>