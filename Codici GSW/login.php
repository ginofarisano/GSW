<?php

session_start();

$sessione=$_GET['sessione'];
if(isset($sessione))
{
	session_destroy();
	header("location:Home.php");
}

include('database.inc');
$database="is";
conn_sel($database);

$user=$_GET['user'];
$pwd=$_GET['pwd'];




$query="SELECT *FROM login WHERE Nome='$user'";
$ris=mysql_query($query);
$rec=mysql_fetch_array($ris);
$id=$rec['Id'];
if($rec['Password']=="")
	echo '1';
else if($rec['Nome']=="")
	echo '1';

else if($rec['Password']==$pwd)
{
$_SESSION['user']=$user;
$_SESSION['Id']=$id;
echo '0';
}
else
echo '1';
?>
