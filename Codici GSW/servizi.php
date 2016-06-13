<html>
<head>
<title>
	Home
</title>
<style type="text/css">
@import url(home.css);
</style>
<?php
session_start();
include('database.inc');
$database="is";
conn_sel($database);
$pr=$_SESSION['user'];
$id_user=$_SESSION['Id'];
$sess=session_id();
/*if(isset($_SESSION['user']))
{
	echo "PROVA";
}
else
echo "NONE";*/
?>
</head>


<body >
	<form method="GET" id="modulo" >
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
					<span id="home"><?php 
					if(isset($_SESSION['user']))
					echo "<a href='homeLog.php'>GSW Home</a>" ;
					else
					echo "<a href='Home.php'>GSW Home</a>" ;

					?></span>
					<span id="company" class="menu">Company
					<span id="info"><?php echo "<a href='info.php'>Info</a>" ?></span></span>
					<span id="tecnology" class="menu">Tecnology
						<span id="servizi"><a  href="servizi.php">Servizi web e Internet</a>
							</span></span>
					<span id="account" class="menu">Account
						<span id="registrati"><a  href="registrati.php">Registrati</a>
							</span></span>
					<div id="infos"><a href="by.pro.gia.noc.far.dam"><img width="1px" height="1px"></a></div>
				</div><!--CHIUSURA SIDEBAR-->
				<div id="servizi">
					
					<span id="offerti">
						<?php
						if(isset($_SESSION['user']))
						{
						$query="SELECT * FROM applicazioni WHERE id='$id_user'";
						$ris=mysql_query($query);
						echo "Servizi OnLine GSW";
						echo "<table id=app  border=0>";
						
						while($riga=mysql_fetch_array($ris))
						{
							$id=$riga['id_app'];
							$app=$riga['NomeApplicazione'];
							echo "<br>";
							echo "<ul type=disc id=lista>";
							echo "<tr><td><li>",$riga['NomeApplicazione'],"</td>","<td><a href=prova.php?app=$id>Versione Demo</a>","</td>
							<td><input type=button value=Acquista onclick=\"acquista('$app')\">	</li>	</td></tr>";
							echo "</ul>";
							
						}
						echo "</table>";
						}
						else
						{
							$query="SELECT * FROM applicazioni";
							$ris=mysql_query($query);
							echo "Servizi OnLine GSW";
							echo "<table id=app border=0>";
						
							
							while($riga=mysql_fetch_array($ris))
							{
								$id=$riga['id_app'];
								$app=$riga['NomeApplicazione'];
								echo "<br>";
								echo "<ul type=disc id=lista>";
								echo "<tr><td><li>",$riga['NomeApplicazione'],"</td>","<td><a href=prova.php?app=$id>Versione Demo</a>","</td>
								<td><input type=button value=Acquista onclick=acquista()>	</li>	</td></tr>";
								echo "</ul>";

							}
							echo "</table>";
						}
						
						?>
					</span>
				</span>
			
					</div><!--CHIUSURA BODY-->
<div id="prova"></div>

<?php
if($id_user=='01')
{
?>
<div id="lic" style="visibility:hidden; z-index:-1;position:fixed;left:30%">
	Contratto di licenza CLIENTE
	<hr>
	
	Leggere il seguente contratto di licenza. E' necessario accettare tutti i termini del contratto per procedere all'acquisto.
	</div>
	
	<div id="lic1" style="visibility:hidden; z-index:-1;position:fixed;left:30%">
		<textarea  cols="40" rows="10">
LICENZA D'USO DEL SOFTWARE GSW prodotto dal gruppo 4

	(VERSIONE 1.0)

	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
		</textarea>
		<br>
		<table>
		
		
			
		<?php
		echo "<tr><td><input  type=radio name=accetto onclick=scegli('accetto',$id_user)>Accetto i termini del contratto di licenza</td></tr><br>";
		?>
		
		<hr>
		<tr><td><input type="button" value="Non Acquistare"onclick="licenzaCli('nonacquista')" >
			<?php
			echo "<input type=button id=acq value=Acquista onclick=licenzaCli('acquista','$pr') disabled></td></tr>";
			?>
		</table>
	</div>
	<span id="acquisti" style="visibility:visible">
		<table id="acqcli">
			<caption><i>I SUOI ACQUISTI</i></caption>
			<tr><th>Utente</th><th>Acquisti</th></tr>
		<?php
		
		$query="SELECT  DISTINCT *FROM acquisti WHERE utente='$pr' ";
		$ris=mysql_query($query);
		while($riga=mysql_fetch_array($ris))
		{
			echo "<tr ><td align=center>".$riga['utente']."</td>";
			echo  "<td align=center>".$riga['acquistate']."</td>";
			echo "<td align=center>".$riga['licenze']."</td></tr>";
		}	
	
		
		?>
		</table>
	</span>
<?php
}
?>
<!--FASE 4 ACQUISTA LICENZA: IL SISTEMA MOSTRA LA TABELLA CON LE APPLICAZIONI ACQUISTATE E LE LICENZE CHE VUOLE AGGIUNGERE-->
<?php
if($id_user=='02')
{
?>
<div id="lic" style="visibility:hidden; z-index:-1;position:fixed;left:30%">
	Contratto di licenza AZIENDA
	<hr>
	
	Leggere il seguente contratto di licenza. E' necessario accettare tutti i termini del contratto per procedere all'acquisto.
	</div>
	
	<div id="lic1" style="visibility:hidden; z-index:-1;position:fixed;left:30%">
		<textarea  cols="40" rows="10">
LICENZA D'USO DEL SOFTWARE GSW prodotto dal gruppo 4

	(VERSIONE 1.0)

	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
	Questa licenza &egrave; soggetta a modifiche,la
	invitiamo a verificare prima dell'utilizzo del prodotto eventuali variazioni.
		</textarea>
		<br>
		<table>
		
		
			
		<?php
		echo "<tr><td><input  type=radio name=accetto onclick=scegli('accetto',$id_user)>Accetto i termini del contratto di licenza</td></tr><br>";
		?>
		
		<hr>
		<tr><td>Scrivi il numero di licenze che vuoi acquistare per la tua azienda <input id="numero" type="text" size="5" disabled>
		<tr><td><input type="button" value="Non Acquistare"onclick="licenzaAzi('nonacquista')" >
			<?php
			echo "<input type=button id=acq value=Acquista onclick=licenzaAzi('acquista','$pr') disabled></td></tr>";
			?>
		</table>
	</div>
	<span id="acquisti" style="visibility:visible">
		<table id="acqcli">
			<caption><i>I SUOI ACQUISTI</i></caption>
			<tr><th>Utente</th><th>Acquisti</th><th>Numero licenze</th></tr>
		<?php
		
		$query="SELECT  DISTINCT *FROM acquisti WHERE utente='$pr' ";
		$ris=mysql_query($query);
		while($riga=mysql_fetch_array($ris))
		{
			$app=$riga['acquistate'];
			echo "<tr ><td align=center>".$riga['utente']."</td>";
			echo  "<td align=center>".$riga['acquistate']."</td>";
			//FINE FASE 4
			
			//FASE 5 ACQUISTA LICENZA:CLICK PULSANTE AGGIUNGI VIENE INVOCA LA FUNZIONE AGGIUNGI
			echo "<td align=center>".$riga['licenze']."</td><td><input type=button value=Aggiungi onclick=\"aggiungi('$app')\"></td></tr>";
			//FINE FASE 5
		}	
	
		
		?>
		</table>
		<!--FINE FASE 4-->
	</span>
	<div id="aggiungi" style="visibility:hidden;z-index=-1;">
		<table>
			
			
			<!--FASE 6 ACQUISTA LICENZE: MOSTRA LE LICENZE CHE VUOLE AGGIUNGERE E PREME IL TASTO CONFERMA E VIENE INVOCATA LA FUNZIONE REGISTRALI-->
		<tr><td>Quante licenze vuoi aggiungere?</td><td><input type="text" size="5" id="agg"><input type="button" value="Conferma" onclick="registraLi('conferma')">
			<!--FINE FASE 6-->
			
			
			<input type="button" value="Annulla" onclick="registraLi('annulla')"></td>
		</table>
	</div>
	
<?php
}
?>

			</form>
				<script type="text/javascript">
				function acquista(app)
				{
						appli=app;
						reg="<?php echo ($pr);?>";
						xml=new XMLHttpRequest();
					
							xml.onreadystatechange=function()
							{
								if(xml.readyState==4 && xml.status==200)
								{

									risp=xml.responseText;
									
									if(risp==0)
									{
									document.getElementById("lic").style.visibility="visible";
									document.getElementById("lic").style.zIndex="4";
									document.getElementById("lic1").style.visibility="visible";
									document.getElementById("lic1").style.zIndex="4";
									//alert("Bravo sei un utente registrato");
									}
									else
									{
									alert("Non sei un utente registrato!!!\nVerrai reindirizzato alla pagina relativa alla registrazione");
									document.location.href=("registrati.php");
									}
								}
							}
							xml.open("GET","utenti.php?reg="+reg,true);
							xml.send(null);
				}
				</script>
				
				<script type="text/javascript">
				function scegli(scelta,user)
				{
					utente=user;
					if(user=='01')
					document.getElementById("acq").removeAttribute("disabled");
					else if(user=='02')
					{
					if(scelta=='accetto')
					{
						document.getElementById("acq").removeAttribute("disabled");
						document.getElementById("numero").removeAttribute("disabled");
					}	
					if(scelta=='nonaccetto')
					{
						document.getElementById("acq").setAttribute("disabled");
					}
				}
					

				}
				</script>
				
				
				<script type="text/javascript">
				function licenzaAzi(scelta,utente)
				{
						if(scelta=='nonacquista')
						{
							document.getElementById("lic").style.visibility="hidden";
							document.getElementById("lic1").style.visibility="hidden";
							return;
						}
					
						var controllo=/^([0-9])+$/;
						numero=document.getElementById("numero").value;
						if(controllo.test(numero)==false)
						{
							alert("devi inserire un numero");
							return;
						}
					
						xml=new XMLHttpRequest();
						xml.onreadystatechange=function()
						{
							if(xml.readyState==4 && xml.status==200)
							{
							
								if(scelta=='acquista')
								{
									document.getElementById("acquisti").innerHTML=xml.responseText;	
									alert("acquisto effettuato");
									document.getElementById("lic").style.visibility="hidden";
									document.getElementById("lic1").style.visibility="hidden";
									

								}
							}
							
							
						}
							xml.open("GET","acquisti.php?acqui="+utente+"&app="+appli+"&licenze="+numero,true);
							xml.send(null);

				}
				</script>
				
				<script type="text/javascript">
				function licenzaCli(scelta,utente)
				{
					
					
					
						xml=new XMLHttpRequest();
						xml.onreadystatechange=function()
						{
							if(xml.readyState==4 && xml.status==200)
							{
								if(scelta=='nonacquista')
								{
									document.getElementById("lic").style.visibility="hidden";
									document.getElementById("lic1").style.visibility="hidden";
								}
								if(scelta=='acquista')
								{
									document.getElementById("acquisti").innerHTML=xml.responseText;	
									alert("acquisto effettuato");
									document.getElementById("lic").style.visibility="hidden";
									document.getElementById("lic1").style.visibility="hidden";
									

								}
							}
							
							
						}
							xml.open("GET","acquisti.php?acqui="+utente+"&app="+appli,true);
							xml.send(null);

				}
				</script>
				
				
				
				<!-- ACQUISTA LICENZE :FUNZIONE AGGIUNGI-->
				<script type="text/javascript">
				function aggiungi(app)
				{
					document.getElementById("lic").style.visibility="hidden";
					document.getElementById("lic1").style.visibility="hidden";
					appli=app;
					document.getElementById("offerti").style.visibility="hidden";
					document.getElementById("aggiungi").style.visibility="visible";
					document.getElementById("aggiungi").style.zIndex="4";
				}
				</script>
				
				<!--FASE 7 ACQUISTA LICENZE: IL SISTEMA AGGIORNA IL NUMERO DI LICENZE CHIAMANDO AGGIUNGI.PHP-->
					<script type="text/javascript">
					function registraLi(tipo)
					{
						if(tipo=='annulla')
						{
							document.getElementById("offerti").style.visibility="visible";
							document.getElementById("aggiungi").style.visibility="hidden";
							return;
						}
						if(tipo=='conferma')
						{
						numero=document.getElementById("agg").value;
						controllo=/^([0-9])+$/;
						if(controllo.test(numero)==false)
						{
							alert("devi inserire un numero");
							return;
						}
							xml=new XMLHttpRequest();
							xml.onreadystatechange=function()
							{
								if(xml.readyState==4 && xml.status==200)
								{
									document.getElementById("offerti").style.visibility="visible";
									document.getElementById("aggiungi").innerHTML=xml.responseText;
									
								}


							}
						}
								xml.open("GET","aggiungi.php?app="+appli+"&licenza="+numero,true);
								xml.send(null);

					}
					</script>
				<!--FINE FASE 6-->
				
				
	
</body>

</html>