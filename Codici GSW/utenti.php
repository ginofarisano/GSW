<?php


include('database.inc');
$database="is";
conn_sel($database);



$reg=$_GET['reg'];



if($reg!="")
{
	$query="SELECT *FROM login WHERE Nome='$reg'";
	$ris=mysql_query($query);
	$rec=mysql_fetch_array($ris);
	
	if($rec['Nome']==$reg)
	{
	
	echo '0';
	}
	
}
else
echo '1';




?>


