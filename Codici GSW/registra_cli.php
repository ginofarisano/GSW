<html>
<head>
<style type="text/css">
@import url(registra_cli.css);
<STYLE>
body {font-size: x-large;}


</style>
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript">
dati=new Array();
i=0;
function controlla(x, id){
	
	if(id=="ctr1")
	{
		var stringa = x;
	    var myregexp = /^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]{1,20}\s?)+$/;
	    if (myregexp.test(x) == false)
	    {
	        document.getElementById("name").style.display="block";
			document.getElementById("name").style.color="black";
			document.getElementById("name").style.backgroundColor= "red";  
			document.getElementById("name").style.fontSize="8pt";

	    }
		else
		{
			document.getElementById("name").style.display="none";


		}
	}
	if(id=="ctr2")
	{
			var stringa = x;
		    var myregexp = /^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]{1,20}\s?)+$/;
		    if (myregexp.test(x) == false)
		    {
		        document.getElementById("name1").style.display="block";
				document.getElementById("name1").style.color="black";
				document.getElementById("name1").style.backgroundColor= "red";  
				document.getElementById("name1").style.fontSize="8pt";

		    }
			else
			{
				document.getElementById("name1").style.display="none";


			}
	}
	if(id=="ctr3")
	{
			var stringa = x;
		    var myregexp = /^([a-zA-Z1-9]\s?)+$/;
		    if (myregexp.test(x) == false)
		    {
		        document.getElementById("name2").style.display="block";
				document.getElementById("name2").style.color="black";
				document.getElementById("name2").style.backgroundColor= "red";  
				document.getElementById("name2").style.fontSize="8pt";
		    }
			else
			{
				document.getElementById("name2").style.display="none";

			}
	}
	if(id=="ctr4")
	{
			var stringa = x;
		    var myregexp = /^([a-zA-Z]\s?)+$/;
		    if (myregexp.test(x) == false)
		    {
		        document.getElementById("name3").style.display="block";
				document.getElementById("name3").style.color="black";
				document.getElementById("name3").style.backgroundColor= "red";  
				document.getElementById("name3").style.fontSize="8pt";
		    }
			else
			{
				document.getElementById("name3").style.display="none";

			}
	}
	if(id=="ctr5")
	{
		var stringa = x;
	    var myregexp = /^\d{5}$/;
	    if (myregexp.test(x) == false)
	    {
	        document.getElementById("name4").style.display="block";
			document.getElementById("name4").style.color="black";
			document.getElementById("name4").style.backgroundColor= "red";  
			document.getElementById("name4").style.fontSize="8pt";
	    }
		else
		{
			document.getElementById("name4").style.display="none";

		}
	}
	if(id=="ctr7")
	{
		var stringa = x;
	    var myregexp = /^([a-z0-9]{16})+$/;
	    if (myregexp.test(x) == false)
	    {
	        document.getElementById("name5").style.display="block";
			document.getElementById("name5").style.color="black";
			document.getElementById("name5").style.backgroundColor= "red";  
			document.getElementById("name5").style.fontSize="8pt";
	    }
		else
		{
			document.getElementById("name5").style.display="none";

		}
	}
	if(id=="ctr8")
	{
			var stringa = x;
		    var myregexp = /^[0-9]+$/;
		    if (myregexp.test(x) == false)
		    {
		        document.getElementById("name6").style.display="block";
				document.getElementById("name6").style.color="black";
				document.getElementById("name6").style.backgroundColor= "red";  
				document.getElementById("name6").style.fontSize="8pt";
		    }
			else
			{
				document.getElementById("name6").style.display="none";

			}
	}
	if(id=="ctr9")
	{
		var stringa = x;
	    var myregexp = /^([0-9])+$/;
	    if (myregexp.test(x) == false)
	    {
	        document.getElementById("name7").style.display="block";
			document.getElementById("name7").style.color="black";
			document.getElementById("name7").style.backgroundColor= "red";  
			document.getElementById("name7").style.fontSize="8pt";
	    }
		else
		{
			document.getElementById("name7").style.display="none";

		}
	}
	if(id=="ctr12")
	{
		var stringa = x;
	    var myregexp = /^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]{1,20}\s?)+$/;
	    if (myregexp.test(x) == false)
	    {
	        document.getElementById("name9").style.display="block";
			document.getElementById("name9").style.color="black";
			document.getElementById("name9").style.backgroundColor= "red";  
			document.getElementById("name9").style.fontSize="8pt";
	    }
		else
		{
			document.getElementById("name9").style.display="none";

		}
	}
	
	if(id=="ctr13")
	{
			var stringa = x;
		    var myregexp = /^[a-zA-Z0-9\_\*\-\+\!\?\,\:\;\.\xE0\xE8\xE9\xF9\xF2\xEC\x27]{6,12}/
		    if (myregexp.test(x) == false)
		    {
		        document.getElementById("name10").style.display="block";
				document.getElementById("name10").style.color="black";
				document.getElementById("name10").style.backgroundColor= "red";  
				document.getElementById("name10").style.fontSize="8pt";
		    }
			else
			{
				document.getElementById("name10").style.display="none";

			}
	}
	
	if(x==""){
		document.getElementById(id).style.backgroundColor="red";
		document.getElementById("name").style.display="none";
		document.getElementById("name1").style.display="none";
		document.getElementById("name2").style.display="none";
		document.getElementById("name3").style.display="none";
		document.getElementById("name4").style.display="none";
		document.getElementById("name5").style.display="none";
		 document.getElementById("name6").style.display="none";
		document.getElementById("name7").style.display="none";
		document.getElementById("name8").style.display="none";
		document.getElementById("name9").style.display="none";
		document.getElementById("name10").style.display="none";
		}
	else{
		document.getElementById(id).style.backgroundColor="white";
		}
}
// FASE 6: FUNZIONE INVOCATA DAL PULSANTE REGISTRATI, CONTROLLA I CAMPI OBBLIGATORI E SI COLLEGA ALLA PAGINA REGISTRADB_CLI.PHP
// E MOSTRA IL MESSAGGIO DI REGISTRAZIONE EFFETTUATA
function invia(){
	elementi=dati.join();
	tmp=0;
	for(i=1; i<=13;i++){
		if(document.getElementById("ctr"+i).value==""){
			document.getElementById("ctr"+i).style.backgroundColor="red";
			tmp=1;
			}	
	}
	if(tmp==1){
		alert("Campo obbligatorio non completato (Vedi campo/i evidenziato/i in rosso)");
		}
	else{
		for(i=1; i<=13;i++)
			dati[i]=document.getElementById("ctr"+i).value;
		elementi=dati.join();
		xml=new XMLHttpRequest();
		xml.open("get", "registradb_CLI.php?dati="+elementi, true);
		xml.send();
		alert("Inserimento effettuato con successo");
		
		window.close();
	}
}
//FINE FASE 6

function provi(){
	xml=new XMLHttpRequest();
	xml.onreadystatechange=function(){
		document.getElementById("prov").innerHTML=xml.responseText;
	}
	xml.open("get", "provincia.php", true);
	xml.send();
}

function controlla_email(id, email){
	var espressione = new RegExp("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+[\.]([a-zA-Z0-9-]+)*([a-zA-Z]{2,3})$");
	if (!espressione.test(email)){
		document.getElementById("name8").style.display="block";
		document.getElementById("name8").style.color="black";
		document.getElementById("name8").style.backgroundColor= "red";  
		document.getElementById("name8").style.fontSize="8pt";
		}
		else
		{
			document.getElementById("name8").style.display="none";

		}
}
</script>

</head>
<body onload="provi()">

	<!--HEADER-->
	<div id="header">
		<div id="logo">
			<div id="logo1"></div>
		</div>
			</div><!--CHIUSURA HEADER-->
<div id="modulo">         <!--SI DEVE METTERE PRIMA PROVINCIA E POI COMUNE-->
	
	<!--FORM CON I CAMPI PER LA REGISTRAZIONE-->
		<table id="table">
		MODULO REGISTRAZIONE CLIENTE<br>
		&nbsp;<br>
		<tr><td>Nome*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr1">
			<span class="hidden" style="display:none" id="name" >
		      Non puoi inserire numeri
	          </span></td></tr>
		<tr><td>Cognome*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr2" >
			<span class="hidden" style="display:none" id="name1" >
		      Non puoi inserire numeri
	          </span></td></tr>
		<tr><td>Indirizzo*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr3">
			<span class="hidden" style="display:none" id="name2" >
		     Puoi inserire solo caratteri alfanumerici
	          </span></td></tr>
		<tr><td>Comune*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr4">
			<span class="hidden" style="display:none" id="name3" >
		      Non puoi inserire numeri
	          </span></td></tr>
			<tr><td>Provincia*:</td><td><div id="prov"></div></td></tr>
		<tr><td>C.A.P.*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr5" >
			<span class="hidden" style="display:none" id="name4" >
		      Non puoi inserire caratteri alfabetici e devi inserire 5 numeri
	          </span></td></tr>
		<tr><td>Codice Fiscale*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr7">
			<span class="hidden" style="display:none" id="name5" >
		      esempio CF prvprv00p00p000p 
	          </span></td></tr>
		<tr><td>Telefono*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr8">
			<span class="hidden" style="display:none" id="name6" >
		      Non puoi inserire caratteri alfabetici e / come separatore
	          </span></td></tr>
		<tr><td>Fax(facoltativo):</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="000000" id="ctr9">
				<span class="hidden" style="display:none" id="name7" >
			      Non puoi inserire caratteri alfabetici e / come separatore
		          </span></td></tr>
		<tr><td>Email*:</td><td><input type="text" size="20" onchange="controlla_email(id, this.value)" onblur="controlla(this.value, id)" value="" id="ctr10" >
			<span class="hidden" style="display:none" id="name8" >
		      Non puoi inserire caratteri non alfanumerici e devi inserire @
	          </span></td></tr>
		<tr><td>Sesso*:</td><td><input type="radio" value="M" name="sesso" id="ctr11" onclick="controlla(this.value, id)">M<input type="radio" id="ctr11" value="F" name="sesso"onclick="controlla(this.value,id)">F </td></tr>
	
		 <TR> <TD> Username*<TD> <input id="ctr12" name="login" type="text" 
									size="20"
		                            onfocus="resetta(this)"
		                            onblur="checkLogin(this.value);controlla(this.value,id)" />
		              				<span class="hidden" style="display:none" id="name9" >
								      Non puoi inserire caratteri numerici 
							          </span>
		              <span class="hidden" id="loginCheckFailed">
				      Questa login &egrave; gi&agrave; in uso. Per favore, 
				      sceglierne un'altra.Oppure il campo &egrave; vuoto;
		              </span>
		<tr><td>Password*:</td><td><input type="password" size="20" onblur="controlla(this.value, id)" value=""id="ctr13" >
			<span class="hidden" style="display:none" id="name10" >
		      La password deve essere min 6 caratteri
	          </span></td></tr>
	
	<!--FASE 5: PULSANTE REGISTRATI CHE CLICCATO INVOCA LA FUNZIONE INVIA()-->
		<tr><td></td><td><input type="button" value="Registrati" onclick="invia()"></td></tr>
		<!-- FINE FASE 5-->
		</table>
</div>
<!--FINE FORM-->
<div id="sidebar">
	<!--SIDEBAR-->
	<div id="sidebar">
		<span id="home"><a href="Home.php">GSW Home</a></span>

	
<div id="istr">I campi con * sono obbligatori ai fini della registrazione</div>
		</div><!--CHIUSURA SIDEBAR-->
</body>

</html>