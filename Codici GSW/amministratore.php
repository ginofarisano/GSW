<html>
<head>
<style type="text/css">
@import url(amministratore.css);
</style>
<!-- RICERCA UTENTE FASE 2: PAGINA VISUALIZZABILE SOLO SE SONO STATE INSERITE LE GIUSTE CREDENZIALI PER L AMMINISTRATORE -->
<!-- MOSTRA TUTTE LE OPERAZIONI CHE L AMMINISTRATORE PUO' EFFETTUARE DIVISE IN CATEGORIE-->
<script type="text/javascript">
function apri(x){  //mostra le opzioni disponibile in base alla selezione fatta dall utente
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		if(xml.readyState==4 && xml.status==200)
		{
		document.getElementById("tabella").style.visibility="hidden"; //ri-nasconde la tabella
		document.getElementById("tabella_app").style.visibility="hidden"; //nasconde la tabella delle applicazioni
		document.getElementById("freccia").style.visibility="hidden"; //ri-nasconde la freccia
		document.getElementById("cliente").style.visibility="hidden"; //ri-nasconde il campo di ricerca del cliente
		document.getElementById('graffa').removeAttribute("hidden");
		document.getElementById('risp_coll').innerHTML=xml.responseText;
	}
	}
	xml.open("get", "visualizza.php?tipo="+x, true);
	xml.send();
}

function apri_app(){ //visualizza il campo attraverso il quale è possibile interrogare il db
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		if(xml.readyState==4 && xml.status==200)
		{
		document.getElementById("tabella").style.visibility="hidden"; //ri-nasconde la tabella
		document.getElementById("freccia").style.visibility="visible"; //visualizza la freccia
		document.getElementById("tabella_app").style.visibility="visible"; //visualizza la tabella delle applicazioni
		document.getElementById("cliente").style.visibility="hidden"; //nasconde il campo di ricerca del cliente
	//	document.getElementById("cancella_cli").style.visibility="hidden"; //nasconde il bottone cancellazione utente
		document.getElementById('tabella_app').innerHTML=xml.responseText;
	}
	}
	xml.open("get", "applicazioni.php", true);
	xml.send();
}

function registra_app(){
	window.open('registra_app.php');
}

function apri_cli(tipo){ //visualizza il campo di ricerca attraverso il quale è possibile interrogare il database
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		if(xml.readyState==4 && xml.status==200)
		{
		document.getElementById("tabella_app").style.visibility="hidden"; //nasconde la tabella delle applicazioni
		//document.getElementById("tabella").style.visibility="hidden"; //ri-nasconde la tabella
		document.getElementById("freccia").style.visibility="visible"; //visualizza la freccia
		document.getElementById("graffa").removeAttribute("hidden");
		document.getElementById("cliente").style.visibility="visible"; //visualizza il campo di ricerca del cliente
		//document.getElementById("cancella_cli").style.visibility="hidden"; //nasconde il bottone cancellazione utente
		document.getElementById('cliente').innerHTML=xml.responseText;
	}
	}
	xml.open("get", "cerca.php?x="+tipo, true);
	xml.send();
}
function elimina(username){ //cancella la tupla dall interno del database
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		if(xml.readyState==4 && xml.status==200)
		{
		alert("Cancellazione utente completata."); //PERCHE' MI STAMPA 4/5 VOLTE L ALERT?
		
		}
	}
	xml.open("get", "elimina.php?user="+username, true);
	xml.send();
}

function interroga(cognome, tipo){ //interroga direttamente il database e ne stampa la tabella
	surname=cognome;
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		if(xml.readyState==4 && xml.status==200)
		{
		document.getElementById('tabella').innerHTML=xml.responseText;
		document.getElementById("tabella").style.visibility="visible"; //ri-nasconde la tabella
		document.getElementById("tabella_app").style.visibility="hidden"; //nasconde la tabella delle applicazioni
		document.getElementById("freccia").style.visibility="hidden"; //ri-nasconde la freccia
		document.getElementById("cliente").style.visibility="hidden"; //ri-nasconde il campo di ricerca del cliente
		}
	}
	xml.open("get", "interrogaDB.php?x="+cognome+"&tipo="+tipo, true);
	xml.send();
}



function registra_cli(tipo){ //apre una nuova pagina dove carica le rispettive pagine di registrazione dell utente o azienda.
	if(tipo=='ut')
		window.open('registra_cli.php');
	else
		window.open('registra_azi.php');
}
</script>
</head>
<body>
<h1 align="center"> Gestione GSW </h1>
<div id="collegamenti"> <!-- Elemento sempre visualizzato all interno della pagina che mostra le opzioni dell amministratore-->
	<input type="button" value="Applicazioni" onclick="apri('app')" style="width:150px;">
	&nbsp;<br>&nbsp;<br>
	<input type="button" value="Azienda" onclick="apri('az')" style="width:150px;">
	&nbsp;<br>&nbsp;<br>
	<input type="button" value="Cliente" onclick="apri('ut')" style="width:150px;">
	<div id="home"> <?php 
	
	echo "<a href='Home.php'>GSW Home</a>" ;
	
	?>
	
	</div>
<div id="graffa" hidden></div>
<div id="risp_coll"></div>
<div id="cliente" ></div>
<div id="infos"><a href="by.pro.gia.noc.far.dam"><img width="1px" height="1px"></a></div>
<div id="freccia"></div>
<div id="tabella"></div>
<div id="tabella_app"></div>
<!--<div id="cancella_cli" hidden><input type="button" value="Cancella Utente" onclick="elimina()" style="width:150px;"></div>-->
</body>
</html>
<!-- RICERCA UTENTE FINE FASE 2 -->