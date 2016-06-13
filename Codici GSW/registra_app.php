<html>
<head>
<style type="text/css">
@import url(registra_cli.css);
</style>

<script type="text/javascript">
dati=new Array();
i=0;
function controlla(x, id){
	if(id=="ctr1"){
		if(x.length<4 || x.length>100){
			document.getElementById(id).style.backgroundColor="red";
			alert("devi inserire una stringa di minimo 4 caratteri e massimo 100");
			return;
			}
	}
	
	if(id=="ctr2"){
		if(x.length<4 || x.length>100){
			document.getElementById(id).style.backgroundColor="red";
			alert("devi inserire una stringa di minimo 4 caratteri e massimo 100");
			return;
			}
	}
	
	if(id=="ctr3"){
		if(x.length<4 || x.length>200){
			document.getElementById(id).style.backgroundColor="red";
			alert("devi inserire una stringa di minimo 4 caratteri e massimo 200");
			return;
			}
	}
	if(id=="ctr4"){
		if(!isNaN(x)){
			if(x<0){
				document.getElementById(id).style.backgroungColor="red";
				alert("Hai inserito un prezzo inferiore a 0.");
				return;
				}
		}
		else{
			document.getElementById(id).style.backgroungColor="red";
			alert("Non hai inserito un numero.");
			return;
			}
	}
	if(id=="ctr5"){
		var espressione = new RegExp("^[a-z0-9\-\.]+\.(it|com|org|net|eu|mobi)$");
		if (!espressione.test(x)){
			document.getElementById(id).style.backgroundColor="red";
			alert("Indirizzo non corretto. Riprova");
			return;
		}	
	}
	if(x==""){
		document.getElementById(id).style.backgroundColor="red";
		}
		
		if(id=="ctr6"){
			if(x=='01' || x=='02'){
				document.getElementById(id).style.backgroundColor="white";
				
			}	
			else
			{
				document.getElementById(id).style.backgroundColor="red";
				alert("devi inserire un numero(01 applicazione cliente 02 applicazione azienda)");
				return;
			}
			
		}
		if(x==""){
			document.getElementById(id).style.backgroundColor="red";
			}
			else{
		document.getElementById(id).style.backgroundColor="white";
		}
}

function invia(){
	elementi=dati.join();
	tmp=0;
	nome=document.getElementById("ctr1").value;
	for(i=1; i<=6;i++){
		if(document.getElementById("ctr"+i).value==""){
			document.getElementById("ctr"+i).style.backgroundColor="red";
			tmp=1;
			}	
	}
	if(tmp==1){
		alert("Campo obbligatorio non completato (Vedi campo/i evidenziato/i in rosso)");
		}
	else{
		for(i=1; i<=6;i++)
			dati[i]=document.getElementById("ctr"+i).value;
		elementi=dati.join();
		xml=new XMLHttpRequest();
		xml.open("get", "registradb_APP.php?dati="+elementi, true);
		xml.send();
		alert("Inserimento effettuato con successo");
		window.close();
	}
}

</script>

</head>
<body>

	<!--HEADER-->
	<div id="header">
		<div id="logo">
			<div id="logo1"></div>
		</div>
			</div><!--CHIUSURA HEADER-->
<div id="modulo">         
		<table id="table">
		MODULO INSERIMENTO APPLICAZIONE<br>
		&nbsp;<br>
		<tr><td>id*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr6"></td></tr>
		<tr><td>Nome Applicazione(min 4 caratteri)*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr1"></td></tr>
		<tr><td>Tipo*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr2" ></td></tr>
		<tr><td>Autori*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr3"></td></tr>
		<tr><td>Prezzo*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr4"></td></tr>
		<tr><td>Link*:</td><td><input type="text" size="20" onblur="controlla(this.value, id)" value="" id="ctr5"></td></tr>
		

		<tr><td></td><td><input type="button" value="Registra" onclick="invia()"></td></tr>
		</table>
</div>

	<!--SIDEBAR-->
	<div id="sidebar">
		

	
<div id="istr">I campi con * sono obbligatori ai fini della registrazione</div>
		</div><!--CHIUSURA SIDEBAR-->

</body>

</html>