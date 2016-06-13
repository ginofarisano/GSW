<?php
include('database.inc');
$database="is";
conn_sel($database);

$scelta=$_GET['app'];

$query="SELECT * FROM applicazioni WHERE id_app='$scelta'";
$ris=mysql_query($query);
$rec=mysql_fetch_array($ris);
echo $rec['NomeApplicazione'];

?>