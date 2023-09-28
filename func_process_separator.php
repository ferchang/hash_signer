<?php

function process_separator($in, $custom) {
	
	if($in!=='custom') {
		if($in==='comma') return ',';
		if($in==='space') return ' ';
		if($in==='tab') return "\t";
	}
	else $in=$custom;
	
	$search=array('\n', '\r', '\t');
	$replace=array("\n", "\r", "\t");
	return str_replace($search, $replace, $in);

}

?>
