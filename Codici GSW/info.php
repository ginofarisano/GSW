<html>
<head>
<title>
	Info
</title>

<style type="text/css">
@import url(info.css);
</style>

</head>
<?php
session_start();
$sess=session_id();

/*if(isset($_SESSION['user']))
{
	echo "PROVA";
}
else
echo "NONE";*/
?>

<form method="GET" >
<body>

	<div id="body">
		
		<!--HEADER-->
		<div id="header">
			<div id="logo">
				<div id="logo1"></div>
			</div>
			<div id="chisiamo"><!--AFFIDABILE-->
			<span id="testo">
			GSW! Perch&egrave; non basta dire "sono su internet". Oggi non basta pi&ugrave; la
			semplice presenza; su internet si deve basare una buona parte del 
			contatto col cliente e una buona parte della ricerca dei potenziali nuovi
			clienti.
			</span>
			</div><!--CHIUSURA AFFIDABILE-->
		
		</div><!--CHIUSURA HEADER-->
		<div id="ps">
			<span id="descrizione">
				Il software di gestione servizi web &egrave; un prodotto rivolto a singoli utenti, aziende e ad enti pubblici.
				 Lo scopo &egrave; quello di fornire una gestione multiutente/multiazienda accurata di vari programmi applicativi disponibili. 
				Il rapporto tra le parti verr&agrave; regolato da un contratto in base alle normative vigenti che il 
				cliente dovr&agrave; sottoscrivere all'atto della registrazione. La rescissione del contratto potr&agrave; avvenire 
				solo dopo un determinato periodo di tempo. Il sistema verr&agrave; usato da un amministratore che effettuer&agrave; il 
				login, che provveder&agrave; a gestire i dati riguardanti i singoli utenti, aziende ed enti pubblici. 
				Nella pagina iniziale ci sar&agrave; un'interfaccia per l'interazione con gli utenti. Una volta effettuato il 
				login, si potranno scegliere le varie applicazioni. Tutti gli utenti saranno registrati in un ambiente virtuale. 
				Per quanto riguarda le aziende e gli enti pubblici, potranno richiedere pi&ugrave; licenze per la stessa applicazione. 
				 Se &egrave; l'utente singolo ad effettuare il login esso verr&agrave; reindirizzato ad una pagina che visualizzer&agrave;: 
				le sue credenziali, tutte le applicazioni che pu&ograve; richiedere, quelle gi&agrave; acquistate. Se &egrave; un'Azienda o 
				un ente pubblico ad effettuare il login, verranno reindirizzate ad una pagina che visualizzer&agrave;: i dati 
				relativi dell'ente stesso, le applicazioni che pu&ograve; richiedere, quelle gi&agrave; richieste alle quali vuole 
				aggiungere altre licenze. Entrambe le tipologie di utente possono disattivare le proprie licenze in base
				 al contratto stipulato precedentemente. Una volta terminate le operazioni tutti gli utenti effettueranno un logout.
			</span>
		</div><!--CHIUSURA CHI SIAMO-->
		
		<!--SIDEBAR-->
		<div id="sidebar">
			<span id="home"> <?php 
			if(isset($_SESSION['user']))
			echo "<a href='homeLog.php'>GSW Home</a>" ;
			else
			echo "<a href='Home.php'>GSW Home</a>" ;
		
			?>
			
			</span>
			<span id="company" class="menu">Company
			<span id="info"><a  href="info.php">Info</a></span></span>
			<span id="tecnology" class="menu">Tecnology
				<span id="servizi"><a  href="servizi.php">Servizi web e Internet</a>
					</span></span>
			<span id="account" class="menu">Account
				<span id="registrati"><a  href="registrati.php">Registrati</a>
					</span></span>
		</div><!--CHIUSURA SIDEBAR-->
		
	</div><!--CHIUSURA BODY-->
	

</form>	
</body>
</html>