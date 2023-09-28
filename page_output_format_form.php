<br><br>
<center>
<form method=post id=format_form>
<span style='border: thin solid #000; padding: 10px;'>
<b>Output to another format:</b>&nbsp;&nbsp;

field separator:
<select name=fs id=fs_sel onchange='fs_sel_change()'>
<option>comma
<option>space
<option>tab
<option>\n
<option>\r\n
<option>custom
</select>
<input type=text name=fs_custom id=fs_custom_in style='display: none' title='u can use \t \n \r in addition to normal characters'>

&nbsp;&nbsp;record separator:
<select name=rs id=rs_sel onchange='rs_sel_change()'>
<option>\n
<option>\r\n
<option>comma
<option>space
<option>tab
<option>custom
</select>
<input type=text name=rs_custom id=rs_custom_in style='display: none' title='u can use \t \n \r in addition to normal characters'>

<?php echo "<input type=hidden name=commits value='$commits'>"; ?>

&nbsp;&nbsp;<input type=submit name='output' value=' go '>

</span>
</form>