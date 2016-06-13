<?php
	function conn_sel($database){
	$cn=mysql_connect("localhost","is","root") or
		die("Connessione non riuscita");
	
	
	mysql_select_db($database) or
		die("selezione non riuscita");
	
	}	
?>