<?php
include('database.inc');
$database="is";
conn_sel($database);
$user=$_GET['acqui'];
$app=$_GET['app'];
$licenze=$_GET['licenze'];

$query="INSERT INTO acquisti(utente,acquistate,licenze) VALUES('$user','$app','$licenze')";
$ris=mysql_query($query);



?>