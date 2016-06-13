<?php
@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is")or die ("ERRORE SELEZIONE DB");

$query="SELECT * FROM settore";
$rs=@mysql_query($query) or die ("ERRORE QUERY");
?>
<select>
<?php
while($riga=mysql_fetch_array($rs)){?>
	<option value="<?php echo $riga[1];?>" id="ctr2" onclick="controlla(this.value, id)"><?php echo $riga[1];?>
	<?php } ?>
</select>