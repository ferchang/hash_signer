<?php

require 'common.php';
require 'func_random.php';

//session_name('hash_signer_session');
//session_start();

if(isset($_POST['output'])) {

	//echo '<pre>';
	//print_r($_POST);
	
	$commits=unserialize(base64_decode($_POST['commits']));

	//echo '<br>';
	//print_r($commits);
	
	require 'func_process_separator.php';
	
	$fs=process_separator($_POST['fs'], $_POST['fs_custom']);
	$rs=process_separator($_POST['rs'], $_POST['rs_custom']);
	
	//-----------------------------------
	
	$out=array();
		
	$out['all']='';
	foreach($commits as $k=>$v) {
		
		if($out['all']!=='') $out['all'].=$rs;
		$out['all'].=$v['data'].$fs.$v['salt'].$fs.$v['hash'];
		
	}

	//-----------------------------------
	
	$out['private']='';
	foreach($commits as $k=>$v) {
		
		if($out['private']!=='') $out['private'].=$rs;
		$out['private'].=$v['data'].$fs.$v['salt'];
		
	}	
	
	//-----------------------------------
	
	$out['public']='';
	foreach($commits as $k=>$v) {
		
		if($out['public']!=='') $out['public'].=$rs;
		$out['public'].=$v['hash'];
		
	}
	
	//-----------------------------------
	
	require 'page_custom_output.php';
	
	//echo "<pre>$out</pre>";
	
	//file_put_contents('out.txt', $out);
	
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
