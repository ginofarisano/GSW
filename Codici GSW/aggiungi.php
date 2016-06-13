<?php
include('database.inc');
$database="is";
conn_sel($database);

$app=$_GET['app'];
$licenza=$_GET['licenza'];
$query="SELECT  licenze FROM acquisti WHERE acquistate='$app'";
$ris=mysql_query($query);
$rec=mysql_fetch_array($ris);
$valore=$rec['licenze'];
$somma=(int)$valore+$licenza;
$query1="UPDATE acquisti SET licenze='$somma' WHERE acquistate='$app'";
$ris1=mysql_query($query1);

?>