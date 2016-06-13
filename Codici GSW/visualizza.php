<?php
$tipo=$_GET['tipo'];
if($tipo=='app'){?>
	<input type="button" value="Visualizza Applicazione" onclick="apri_app()" style="width:150px;">
	&nbsp;<br>&nbsp;<br>
	<input type="button" value="Aggiungi Applicazione" onclick="registra_app()" style="width:150px;">
	<!--&nbsp;<br>&nbsp;<br>
	<input type="button" value="Cancella Applicazione" onclick="" style="width:150px;"> -->
<?php
}
else if ($tipo=='ut'){ ?>
	<input type="button" value="Visualizza Cliente" onclick="apri_cli('ut')" style="width:150px;">
	&nbsp;<br>&nbsp;<br>
	<!--<input type="button" value="Aggiungi Cliente" onclick="registra_cli('ut')" style="width:150px;">-->
	<!-- &nbsp;<br>&nbsp;<br>
	<input type="button" value="Cancella Cliente" onclick="" style="width:150px;"> -->
<?php
} else if ($tipo=='az'){ ?>
<input type="button" value="Visualizza Azienda" onclick="apri_cli('az')" style="width:150px;">
	&nbsp;<br>&nbsp;<br>
	<!--<input type="button" value="Aggiungi Azienda" onclick="registra_cli('az')" style="width:150px;">-->
	<!--&nbsp;<br>&nbsp;<br>
	<input type="button" value="Cancella Cliente" onclick="" style="width:150px;"> -->
<?php } ?>
