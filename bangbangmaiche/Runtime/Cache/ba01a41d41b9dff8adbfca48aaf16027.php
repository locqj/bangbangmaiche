<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<title>最新活动信息</title>
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/active.css">

	<style>
		 .con img{
			width: 100%;
		}
	</style>

</head>
<body>
	
	<div class="container con" id='divcontent'>	
	<?php echo html_entity_decode($data['descripe'])?>

	</div>

</body>
</html>