<br>
<form method=post id=format_form>
<fieldset><legend>Output to another format:</legend>

field separator:
<select name=fs id=fs_sel onchange='fs_sel_change()'>
<option>comma
<option>space
<option>tab
<option>\n
<option>\r\n
<option>custom
</select>
<input type=text name=fs_custom id=fs_custom_in style='display: none'>

&nbsp;&nbsp;record separator:
<select name=rs id=rs_sel onchange='rs_sel_change()'>
<option>comma
<option>space
<option>tab
<option>\n
<option>\r\n
<option>custom
</select>
<input type=text name=rs_custom id=rs_custom_in style='display: none'>

&nbsp;&nbsp;<input type=checkbox name=add_hashes_end>
add hashes at the end again separately

<?php echo "<input type=hidden name=commits value='$commits'>"; ?>

&nbsp;&nbsp;<input type=submit name='output' value=' go '>

</fieldset>
</form>