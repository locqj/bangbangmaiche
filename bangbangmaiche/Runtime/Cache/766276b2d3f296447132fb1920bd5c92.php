<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=0,minimum-scale=1.0,user-scalable=no">
	<script src='./wechatpublic/js/jquery-1.4.2.min.js'></script>
	<script src='./wechatpublic/js/angular.min.js'></script>
	<script src='./wechatpublic/js/header.js'></script>
	<title>帮帮买车之推荐用户</title>
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/form.css">
	<link rel="stylesheet" href="./wechatpublic/css/shopmall.css">
</head>
<body ng-app='myapp' ng-controller='myctrl' style="background:url(./wechatpublic/img/bg1.jpg) right top">
	<!-- <div ng-include=" 'header.html' "></div> -->
	<div class="container">
		<div class="context">
		<p class="top-title">推荐的用户信息</p>
		<form action="http://xwj.565tech.com/Ucar/index.php?m=Phone&a=sub_suggest" method='post'>
		<input type="text" name='openid' value="<?php echo ($openid); ?>" style='display:none'>

			<div><span class="left">姓&nbsp;名:</span><br>
				<input type="text" name='username' placeholder="请输入用户姓名">
			</div>
			<div><span class="left">手&nbsp;机：</span><br>
			<input type="tel" name='userphone' placeholder="请输入用户手机号">
			</div>
			<div><span class="left">车&nbsp;型:</span> <br>
				<input type="text" name='userwant' placeholder="请输入用户需求车型">	
			</div>
			<div class="sub">
				<button type="submit">提交</button>
				<!-- <input type="submit"> -->
			</div>
		</form>
	</div>
	</div>	
</body>
</html>