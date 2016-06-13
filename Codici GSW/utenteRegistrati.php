<?php


include('database.inc');
$database="is";
conn_sel($database);

$user=$_GET['prova'];
$pwd=$_GET['pwd'];


echo $user;

?>
