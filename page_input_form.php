<html>
<head>
<style>
</style>
<script src='js/jquery.js'></script>
<script>
function add_html() {
	
	row_num=$(":text").length+1;
	
	html="<span title='like email, national number, etc.'>"+row_num+". your secret/private info:</span> <input type=text name='user_data[]' size=30><br><br><span class=place_holder></span>";
	
	elems=$.parseHTML(html);
	
	$('.place_holder').last().prepend(elems);
	
}
</script>
</head>
<body>
<br>
<center>
<form method=post>
<span title='like email, national number, etc.'>1. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>2. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>3. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>4. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>5. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>6. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>7. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>8. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>9. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span title='like email, national number, etc.'>10. your secret/private info:</span> <input type=text name='user_data[]' size=30>
<br><br>
<span class=place_holder></span>

<button type=button onclick='add_html()' id=add_button>add row</button>
&nbsp;&nbsp;&nbsp;<input type=submit name='gen_commits' value='create hash based commitments'>

</form>
</center>

<?php require 'page_links.php'; ?>

</body>
</html>