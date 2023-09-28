<html>
<head>
<style>
textarea {
	width: 90%;
	height: 25%;
	vertical-align: middle;
}
.copy { }
</style>
<script src='js/jquery.js'></script>
<script src='js/copyToClipboard.js'></script>
<script>
</script>
</head>
<body>

<center>

all(private+public / data+salt+hash)<br>
<textarea id=all onfocus='this.select();'><?php echo $out['all']; ?></textarea>

<button class=copy onclick="copyToClipboard(document.getElementById('all'))">copy</button>

<br><br>private(data+salt)<br>
<textarea id=private onfocus='this.select();'><?php echo $out['private']; ?></textarea>

<button class=copy onclick="copyToClipboard(document.getElementById('private'))">copy</button>

<br><br>public(hash)<br>
<textarea id=public onfocus='this.select();'><?php echo $out['public']; ?></textarea>

<button class=copy onclick="copyToClipboard(document.getElementById('public'))">copy</button>

<br>
<?php require 'page_links.php'; ?>

</center>

</body>
</html>