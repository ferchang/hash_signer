<html>
<head>
<style>
</style>
<script src='js/jquery.js'></script>
<script>
function add_row() {
	
	row_num=$(":text").length+1;
	
	html="<span title='like email, national number, etc.'>"+row_num+". your secret/private info:</span> <input type=text name='user_data[]' size=30><br><br>";
	
	elems=$.parseHTML(html);
	
	$('#add_row_place_holder').append(elems);
	
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
<span id=add_row_place_holder></span>

<button type=button onclick='add_row()'>add row</button>
&nbsp;&nbsp;&nbsp;<input type=submit name='gen_commits' value='create hash based commitments'>

</form>
</center>

<?php require 'page_links.php'; ?>

</body>
</html>