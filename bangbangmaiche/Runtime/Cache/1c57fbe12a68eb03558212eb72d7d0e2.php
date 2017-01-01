<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>suggest</title>
</head>
<body>
	<form action='http://xwj.565tech.com/Ucar/index.php?m=Wap&a=sub_carhave' method='post'>
	<span>name:</span>
	<input type='text' id='name' name='name'>
	<br>
	<span>carinfo:</span>
	<input type='text' id='carinfo' name='carinfo'>
	<br>
	<span>phone:</span>
	<input type="text" id='phone'name='phone'>
	<br>
	<span>price:</span>
	<input type="text" value='<?php echo ($openid); ?>' style='display:none;' id='openid' name='openid'>s
	<input type="text" id='price' name ='price'><br>
	<input type='submit' id='sub' value='sub' >

</form>
</body>
</html>