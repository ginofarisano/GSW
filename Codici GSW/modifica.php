<?php
session_start();
$id=$_SESSION['Id'];

if($id=='01')
include('modifica_cli.php');

if($id=='02')
include('modificaAzi.php')
?>