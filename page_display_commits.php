<html>
<head>
<style>
td { text-align: left }
td.no { text-align: center }
.monospace { font-family: monospace, monospace; }
button.copy { margin-left: 5px;}
#format_form { }
#fs_sel { }
option { text-align: center; }
</style>
<script src='js/jquery.js'></script>
<script src='js/copyToClipboard.js'></script>
<script>

function fs_sel_change() {
	
	val=document.getElementById("fs_sel").options[document.getElementById("fs_sel").selectedIndex].value;
	
	if(val==='custom') $('#fs_custom_in').show();
	else $('#fs_custom_in').hide();
	
}

function rs_sel_change() {
	
	val=document.getElementById("rs_sel").options[document.getElementById("rs_sel").selectedIndex].value;
	
	if(val==='custom') $('#rs_custom_in').show();
	else $('#rs_custom_in').hide();
	
}

</script>
</head>
<body onload='fs_sel_change(); rs_sel_change();'>
<br>
<center>
<table border>
<tr><th>no.</td><th>user data (private)</th><th>random salt (private)</th><th>hash_hmac('sha256', $data, $salt) (public)</th></tr>

<?php

foreach($commitments as $k=>$v) {

	$data=$v['data'];
	$salt=$v['salt'];
	$hash=$v['hash'];
	
	$no=$k+1;

	echo <<<HDOC

	<tr>
	
	<td class=no>$no</td>
	<td><span id='data$k'>$data</span>
	<button class=copy onclick="copyToClipboard(document.getElementById('data$k'))">copy</button>
	</td>
	
	<td><span id='salt$k' class=monospace>$salt</span>
	<button class=copy onclick="copyToClipboard(document.getElementById('salt$k'))">copy</button>
	</td>
	
	<td><span id='hash$k' class=monospace>$hash</span>
	<button class=copy onclick="copyToClipboard(document.getElementById('hash$k'))">copy</button>
	</td>
	
	</tr>
	
HDOC;

}

?>

</table>
</center>

<?php
$commits=base64_encode(serialize($commitments));
require 'page_output_format_form.php';
?>
