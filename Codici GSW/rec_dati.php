<html>
<head>
<style type="text/css">
@import url(rec_dati.css);
</style>
<script type="text/javascript">
function controlla(id){
	var espressione = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+[\.]([a-z0-9-]+)*([a-z]{2,3})$");
	if (!espressione.test(email)){
		document.getElementById(id).style.backgroundColor="red";
		alert("Mail non corretta. Riprova");
		}
	else{	
		alert("Mail inviata. Controlla la tua casella di posta.");
		document.getElementById(id).style.backgroundColor="white";
		}
		
}

function salva(mail){
	var espressione = new RegExp("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+[\.]([a-zA-Z0-9-]+)*([a-zA-Z]{2,3})$");
	if (!espressione.test(mail)){
		document.getElementById("mail2").style.display="block";
		document.getElementById("mail2").style.color="black";
		document.getElementById("mail2").style.backgroundColor= "red";  
		document.getElementById("mail2").style.fontSize="8pt";
		}
		else
		{
			document.getElementById("mail2").style.display="none";

		}
}
</script>
</head>

<body>

<div id="rec"><b>RECUPERO PASSWORD</b><br>&nbsp;<br><b>Scrivi nel modulo sottostante il tuo indirizzo e-mail, riceverai per posta le<br>informazioni di accesso del tuo account.</b></div>
<div id="email">Email  <input type="text" size="30" value="" id="mail" onchange="salva(this.value)"> 
	<span class="hidden" style="display:none" id="mail2" >
      Non puoi inserire caratteri non alfanumerici e devi inserire @
      </span> 
<input type="button" value="Invia" onclick="controlla('mail')"></div>
<div id="logo"></div>
<div id="link"><a href="Home.php">GSW Home</a></div>

</body>

</html>