<?php
$user=$_GET['user'];
$dati=$_GET['dati'];
$elementi=explode(',', $dati);
print_r($elementi);
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is") or die("Errore selezione db");
$query="UPDATE azienda SET  NomeAzienda='$elementi[1]',Settore='$elementi[2]',NumeroDipendenti='$elementi[3]',Indirizzo='$elementi[4]',Cap='$elementi[5]',Provincia='$elementi[6]',Comune='$elementi[7]',Telefono='$elementi[8]',Fax='$elementi[9]',Email='$elementi[10]',SitoWeb='$elementi[11]',PartitaIva='$elementi[12]',NomeReferente='$elementi[13]',Username='$elementi[14]',Password='$elementi[15]' WHERE Username='$user'";
$rs=@mysql_query($query) or die("ERRORE QUERY");
$query1="UPDATE login SET Nome='$elementi[14]',Password='$elementi[15]' WHERE Nome='$user'";
@mysql_query($query1) or die("ERRORE QUERY LOGIN");
?>