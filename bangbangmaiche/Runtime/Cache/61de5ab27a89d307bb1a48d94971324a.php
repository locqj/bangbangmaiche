<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>

</head> 
<body>
test

 
	<?php if(is_array($shopinfo)): foreach($shopinfo as $key=>$v): ?><a href="<?php echo U('Wxpay/test');?>&id=<?php echo ($v["id"]); ?>"><?php echo ($v["id"]); ?></a><br/><?php endforeach; endif; ?>
 
 
</body>

</html>