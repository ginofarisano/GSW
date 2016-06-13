<html>
<head>
<title>
	Home
</title>
<style type="text/css">
@import url(home.css);
</style>
<script type="text/javascript">
//FUNZIONE LOGIN CHE INVOCA CONTROLLA
function login()
{
	
	 usr=document.getElementById("utente").value;
	 pwd=document.getElementById("pass").value;
	controlla("user="+usr+"&pwd="+pwd);
}
//FINE LOGIN

//FASE 2 ACQUISTA LICENZE AZIENDA: CONTROLLA I CAMPI INSERITI E INVOCA LA PAGINA LOGIN.PHP
function controlla(data)
{
	
	user=document.getElementById("utente");
	pass=document.getElementById("pass");
	sugg=document.getElementById("sugg");
	sugg1=document.getElementById("sugg1");
	
	// RICERCA UTENTE FASE 1 BIS: ACCEDI CON CREDENZIALI DI AMMINISTRATORE 
	//	SI VIENE REINDIRIZZATI ALLA PAGINA DEDICATA ALL AMMINISTRATORE
	if(usr=="admin" && pwd=="admin")
		document.location.href=("amministratore.php");
	if(pwd=="")
		sugg.style.visibility="visible";
	

		
	xml=new XMLHttpRequest();
	
		xml.onreadystatechange=function()
		{
			if(xml.readyState==4 && xml.status==200)
			{
				
				var pwd=xml.responseText;
				//RESTITUITO 0 SI VIENE REINDIRIZZATI ALLA PAGINA HOMELOG.PHP E L'UTENTE E' LOGGATO
				if(pwd==0)
				{
				
				document.getElementById("prova").innerHTML="login ok";
				sugg.style.visibility="hidden";
				document.location.href=("homeLog.php?"+data);
				
				
				}
				//RESTITUITO 1 SI RIMANE SULLA PAGINA HOME E VIENE MOSTRATO UN SUGGERIMENTO ALL'UTENTE
				if(pwd==1)
				{
				sugg.style.visibility="visible";
				user.style.backgroundColor="red";
				pass.style.backgroundColor="red";
				document.getElementById("prova").style.visibility="hidden";
				
				}
				
				
			}
		}
		
	
		xml.open("GET","login.php?"+data,true);
		xml.send(data);
}
//FINE FASE 2

function ripristina()
	{
		document.getElementById("utente").style.backgroundColor="white";
		document.getElementById("pass").style.backgroundColor="white";
	}
</script>
</head>
<?php
session_start();
//$user=$_SESSION['user'];
?>
<body >
	<form method="POST" id="modulo" >
		<div id="body">
		
		<!-- BACKGROUND-->
			<div id="back-image"></div>
			<!--HEADER-->
			<div id="header">
				<div id="logo">
					<div id="logo1"></div>
				</div>
				<div id="affidabile"><!--AFFIDABILE-->
				<span id="testo">
				GSW! Perch&egrave; non basta dire "sono su internet". Oggi non basta pi&ugrave; la
				semplice presenza; su internet si deve basare una buona parte del 
				contatto col cliente e una buona parte della ricerca dei potenziali nuovi
				clienti.
				</span>
				</div><!--CHIUSURA AFFIDABILE-->
				<!--DIV LOGIN-->
				<!-- RICERCA UTENTE FASE 1: INSERIMENTO CREDENZIALI DI ACCESSO-->
				<div id="login"><span id="log">Login</span>
					
				<!--FASE 1 ACQUISTA LICENZE : INSERIMENTO LOGIN E PASSWORD AZIENDA E PREME IL PULSANTE ACCEDI CHE INVOCA LA FUNZIONE LOGIN()-->
				<span id="user"><input  id="utente" type="text" name="usr" value="username" onkeypress="ripristina()">
				<span id="sugg" style="visibility:hidden;" >Parametri non corretti</span></span>
				<span id="pwd"><input id="pass" type="password" name="pwd" value="password" onkeypress="ripristina()">
				</span>
				<span id="accedi"><input type="button" value="Accedi" onclick="login()"></span>
				<!--FINE FASE 1-->
				
				
				<span id="recupero"><a href="rec_dati.php">Hai perso i dati?</a></span>
				</div><!--CHIUSURA DIV LOGIN-->
			</div><!--CHIUSURA HEADER-->
			<!-- FINE RICERCA UTENTE FASE 1-->
			<!--SIDEBAR-->
			<div id="sidebar">
				<span id="home"><a href="Home.php">GSW Home</a></span>
				<span id="company" class="menu">Company
				<div id="infos"><a href="by.pro.gia.noc.far.dam"><img width="1px" height="1px"></a></div>
				<span id="info"><?php echo "<a href='info.php'>Info</a>" ?></span></span>
				<span id="tecnology" class="menu">Tecnology
					<span id="servizi"><?php echo "<a href='servizi.php'>Servizi web e Internet</a>" ?>
						</span></span>
				<span id="account" class="menu">Account
					
					<!-- FASE 2 REGISTRAZIONE NUOVO UTENTE-->
					<!-- L'UTENTE CLICCA SUL LINK REGISTRATI E SI COLLEGA ALLA PAGINA REGISTRATI.PHP-->
					<span id="registrati"><?php echo "<a href='registrati.php'>Registrati</a>" ?>
					<!-- FINE FASE 2-->
					
						</span></span>
			</div><!--CHIUSURA SIDEBAR-->

				</div><!--CHIUSURA BODY-->
	

		
				

<div id="prova" >


</div>
</form>
</body>

</html>