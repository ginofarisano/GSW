<html>
<head>
<title>
	Home
</title>
<style type="text/css">
@import url(home.css);
</style>

</head>
<?php
session_start();
$user=$_SESSION['user'];
?>
<body >
	<form method="POST" id="modulo" >
		<div id="body">
			
	
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
				
				
			</div><!--CHIUSURA HEADER-->
			<!--SIDEBAR-->
			<div id="sidebar">
				<span id="home">
					<?php
					if(isset($_SESSION['user']))
					echo "<a href='homeLog.php'>GSW Home</a></span>";
					else
					echo "<a href='Home.php'>GSW Home</a></span>";
					?>
				<div id="registra">
					
					
					<!--FASE 3:IL SISTEMA PRESENTA 2 SCELTE CLIENTE E AZIENDA-->
					<span id="scritta">Non sei registrato?<br>Registrati ora!</span>
					
					<!--FASE 4: CLICK SUL PULSANTE AZIENDA-->
					<!-- VIENE INVOCATA LA FUNZIONE REGIAZ()-->
					<span id="registraA"><input  type="button" value="Azienda" id="azienda" onclick="regiAz();"></span>
					<!--FINE FASE 4-->
					
					<div id="imgA"></div>
					<div id="infos"><a href="by.pro.gia.noc.far.dam"><img width="1px" height="1px"></a></div>
					
					<!--FASE 4:CLICK SUL PULSANTE CLIENTE-->
					<!-- VIENE INVOCATA LA FUNZIONE REGICLI()-->
					<span id="registraC"><input type="button" value="Cliente" id="cliente" onclick="regiCli()"></span>
						<!--FINE FASE 4-->
						
					<!--FINE FASE 3-->	
						
					<div id="imgB"></div>
				</div>
			</div><!--CHIUSURA SIDEBAR-->

				</div><!--CHIUSURA BODY-->

</form>
<!--FASE 5: FUNZIONE REGIAZ-->
<!--VIENE APERTA LA PAGINA REGISTRA_AZI.PHP CHE MOSTRA LA FORM PER LA REGISTRAZIONE-->
<script type="text/javascript">
function regiAz()
{
	//document.location.href=("registra_azi.php");
	window.open("registra_azi.php");
}
</script>	
<!--FINE FASE 5-->		
		
<!--FASE 5: FUNZIONE REGICLI-->
<!--VIENE APERTA LA PAGINA REGISTRA_CLI.PHP CHE MOSTRA LA FORM PER LA REGISTRAZIONE-->
<script type="text/javascript">
function regiCli()
{
	//document.location.href=("registra_cli.php");
	window.open("registra_cli.php");
}
</script>
<!--FINE FASE 5-->


</body>

</html>