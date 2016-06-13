<?php
$tipo=$_GET['x'];
if($tipo=="az"){
?><!-- RICERCA UTENTE FASE 3: INSERIMENTO PAROLA PER RICERCA -->
	<!-- VIENE MOSTRATO UN CAMPO DI TESTO DOVE L AMMINISTRATORE PUO' INSERIRE UNA PAROLA CHIAVE-->
<input type="text" id="inserisci" size="40" value="Inserisci Username Azienda" name="name" onfocus="this.value=''" onchange="interroga(this.value, '<?php echo $tipo; ?>')">
<?php
}else{ ?>
<input type="text"id="inserisci" size="40" value="Inserisci Username Cliente" name="name" onfocus="this.value=''" onchange="interroga(this.value, '<?php echo $tipo; ?>')">
<?php } ?> <!-- FINE RICERCA UTENTE -->