<?php

require 'common.php';

if(isset($_COOKIE['hash_signer_session'])) {
	
	session_name('hash_signer_session');
	session_start();
	
	if(isset($_POST['destroy'])) {
		session_name('hash_signer_session');
		session_start();
		session_destroy();
		header("Location: {$_SERVER['PHP_SELF']}");
		exit;
	}
	
	echo '<table align="center" cellpadding="10" style="border: thin solid #000"><tr><td><pre>';
	print_r($_SESSION);
	echo '</pre><br><center><form style="margin-bottom: 0px" method="post" action=""><input type="submit" name="destroy" value="Destroy session"></form></center></td></tr></table>';
}
else echo '<center>No session (cookie) exists.</center>';
require 'page_links.php';

?>