<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>suggest</title>
	<script src='http://code.jquery.com/jquery-1.4.1.min.js'></script>
</head>
<body>
	<form action='http://xwj.565tech.com/Ucar/index.php?m=Wap&a=sub_suggest' method='post'>
	<span>name:</span>
	<input type='text' id='name' name='name'>
	<br>
	<span>phone:</span>
	<input type="text" id='phone'name='phone'>
	<!-- <input type="text" id='openid'name='openid' value="<?php echo ($openid); ?>" style="display:none;"> -->
	<br>
	<input type="text" value='<?php echo ($openid); ?>' style='display:none;' id='openid' name='openid'>
	<span>want:</span>
	<input type="text" id='want' name ='want'><br>
	<input type='submit' id='sub' value='sub' >

</form>
<script>


</script>
</body>
</html>