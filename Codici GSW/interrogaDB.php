<?php
$cognome=$_GET['x'];
$tipo=$_GET['tipo'];

@mysql_connect("localhost", "is", "root") or die ("ERRORE CONNESSIONE");
@mysql_select_db("is")or die ("ERRORE SELEZIONE DB");

if($tipo=='ut'){
	$query="SELECT * FROM cliente WHERE Username='$cognome'";
	$rs=@mysql_query($query) or die ("ERRORE QUERY");

	?><!-- RICERCA UTENTE FASE 4: STAMPA RISULTATI CORRISPONDENTI ALLA RICERCA -->
		<!-- VIENE RIPRODOTTA UNA TABELLA DOVE OGNI RIGA CORRISPONDE AD UN UTENTE CHE HA NOME SIMILE A QUELLO RICERCATO-->
	<table border="1"id="table"><tr><td><b>Nome<td><b>Cognome<td><b>Indirizzo<td><b>Comune<td><b>C.A.P.<td><b>Provincia<td><b>Codice Fiscale<td><b>Telefono<td><b>Fax<td><b>Email<td><b>Sesso<td><b>Username<td><b>Password</td></tr>
	<?php

		while($riga=mysql_fetch_array($rs)){
			echo "<tr>";
			for($i=1; $i<count($riga)/2; $i++)
				echo "<td>$riga[$i]</td>";
				echo "<td><input id=cancella_cli type=button value=Cancella Utente onclick=elimina('$cognome')></td>";
				
			echo "</tr>";
			}
	
		?>
	</tr></table>
<?php }


else if($tipo=='az'){
	$query="SELECT * FROM azienda WHERE Username='$cognome'";
	$rs=@mysql_query($query) or die ("ERRORE QUERY");
	?>
	<table border="1" id="table"><tr><td><b>Nome Azienda<td><b>Settore<td><b>Numero Dipendenti<td><b>Indirizzo<td><b>C.A.P.<td><b>Provincia<td><b>Comune<td><b>Telefono<td><b>Fax<td><b>Email<td><b>SitoWeb<td><b>Partita IVA/Codice Fiscale<td><b>Nome Referente<td><b>Username<td><b>Password</td></tr>
	<?php
		while($riga=mysql_fetch_array($rs)){
			echo "<tr>";
			for($i=1; $i<count($riga)/2; $i++)
				echo "<td align=center>$riga[$i]</td>";
				echo "<td><input id=cancella_cli type=button value=Cancella Utente onclick=elimina('$cognome')></td>";
			echo "</tr>";
			}
		?>
	</tr></table><?php
}
?>	<!-- RICERCA UTENTE FASE 4 -->
