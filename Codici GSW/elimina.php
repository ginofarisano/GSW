<?php
$nome=$_GET['user'];

@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is")or die ("ERRORE SELEZIONE DB");

$query="DELETE FROM cliente WHERE Username='$nome'";
$query2="DELETE FROM azienda WHERE Username='$nome'";
$query3="DELETE FROM login WHERE Nome='$nome'";
@mysql_query($query) or die ("ERRORE QUERY 1");
@mysql_query($query2) or die ("ERRORE QUERY 2");
@mysql_query($query3) or die ("ERRORE QUERY 2");



?>