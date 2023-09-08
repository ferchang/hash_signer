<?php

require 'common.php';
require 'func_random.php';

//session_name('hash_signer_session');
//session_start();

if(isset($_POST['output'])) {

	echo '<pre>';
	print_r($_POST);
	
	$commits=unserialize(base64_decode($_POST['commits']));

	echo '<br>';
	print_r($commits);
	exit;
}

if(isset($_POST['gen_commits'])) {
	
	/*echo '<pre>';
	print_r($_POST);
	exit;*/
	
	$commitments=array();
	
	$user_data=$_POST['user_data'];
	
	foreach($user_data as $k=>$v) {
		$user_data[$k]=trim($v);
		if($user_data[$k]==='') continue;
		$salt=my_random_string(22);
		$hash=hash_hmac('sha256', $v, $salt);
		$commitments[]=array('data'=>$v, 'salt'=>$salt, 'hash'=>$hash);
	}
	
	if(!empty($commitments)) {
		//echo '<pre>';
		//print_r($commitments);
		
		require 'page_display_commits.php';
		//var_dump($_POST);
		require 'page_links.php';
		exit;
	}
	
}

//hash_hmac('sha256', 'data', 'secret')

require 'page_input_form.php';

?>
