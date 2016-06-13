<html>
<head>
<title>
	Home
</title>

<style type="text/css">
@import url(home.css);
</style>
<?php
include('database.inc');
$database="is";
conn_sel($database);
?>
<?php
session_start();

$user=$_SESSION['user'];
$id=$_SESSION['Id'];

$sess1=session_id();


?>
</head>

<form method="POST" >
<body>
	
	
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
			
				<div id="benvenuto">
					<span id="loggato">Benvenuto: <?php
					echo $user;
					?>
					<a href="modifica.php">Modifica profilo</a>
					</span>
						<?php echo "<a id=logout href=login.php?sessione=$user >Logout</a>"?>
					</div>
				 
				</div><!--CHIUSURA HEADER-->
				<!--SIDEBAR-->
				<div id="sidebar">
					<!-- TOLTO GSW HOME<span id="home"><a href="Home.php">GSW Home</a></span>-->
					<span id="company" class="menu">Company
					<span id="info"><?php echo "<a href='info.php'>Info</a>" ?></span></span>
					<span id="tecnology" class="menu">Tecnology
						
						<!--FASE 3 ACQUISTA LICENZE AZIENDA  LINK SERVIZI WEB E INTERNET SI VIENE REINDIRIZZATI ALLA PAGINA SERVIZI.PHP-->
						<span id="servizi"><?php echo "<a href='servizi.php'>Servizi Web e Internet</a>" ?>
							</span></span>
						<!--FINE FASE 3-->
						
						
					<span id="account" class="menu">Account
						<span id="registrati"><?php echo "<a href='registrati.php'>Registrati</a>" ?>
							</span></span>
				</div><!--CHIUSURA SIDEBAR-->

					</div><!--CHIUSURA BODY-->
</form>

</script>	
</body>
</html>