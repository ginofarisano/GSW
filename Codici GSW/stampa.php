<?php
@$cognome=$_POST['name'];

@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is")or die ("ERRORE SELEZIONE DB");

$query="SELECT * FROM cliente WHERE Cognome='$cognome'";
$rs=@mysql_query($query) or die ("ERRORE QUERY");
$riga=mysql_fetch_array($rs);
?>
<table><tr>
<?php
	for($i=0; $i<count($riga)/2; $i++)
		echo "<td>$riga[$i]</td>";
	?>
</tr></table>
	