<?php
header('Content-Type: text/xml');

include('database.inc');
$database="is";
conn_sel($database);

function loginInUso($q)
{  
  $query="SELECT *FROM login WHERE Nome='$q' ";
	$ris=mysql_query($query);
	$rec=mysql_fetch_array($ris);

	if($rec['Nome']!=$q)
		return '0';
	else
		return '1';

}

?>
<?php 
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'; 
  echo "\n";
?>
<response>
  <result><?php echo loginInUso($_POST['q']) ?></result>
</response>
