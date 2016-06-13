<?php

mysql_connect("localhost", "is", "root");
mysql_select_db("is");
$query="SELECT * FROM applicazioni";
$rs=mysql_query($query);
echo "<table border='1'><tr><th>Nome Applicazioni</th><th>Tipo</th><th>Autori</th><th>Prezzo</th><th>Link</th></tr>";
while($riga=mysql_fetch_array($rs))
	echo "<tr><td>$riga[2]</td><td>$riga[3]</td><td>$riga[4]</td><td>$riga[5]</td><td>$riga[6]</td></tr>";
echo "</table>";

?>