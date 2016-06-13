<?php
session_start();
if($_SESSION["alive"]!="1"){
	echo "sessione scaduta";
}
?>