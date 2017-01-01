<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<title>车源详细信息</title>
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/recordquery-list.css">
	<link rel="stylesheet" href="./wechatpublic/css/shopmall.css">
</head>
<body style="background:url(./wechatpublic/img/bg3.jpg) no-repeat center;background-size:100% cover">
	<div class="container">
		<div class="context">
			<p class="top-title"  style="text-shadow: 6px 6px 7px #939395;">车源详细信息</p>
			<ul class="detail">
				<li>
					<span class="cleft">提供车源</span>
					<span class="ctight"><?php echo ($data["source"]); ?></span> 
				</li>
				<li>
					<span class="cleft">联系方式</span>
					<span class="ctight"><?php echo ($data["phone"]); ?></span> 
				</li>
				<li>
					<span class="cleft">可供车型</span>
					<span class="ctight"><?php echo ($data["main"]); ?></span> 
				</li>
				<li>
					<span class="cleft">帮帮评分</span>
					<span class="ctight"><?php echo ($data["scount"]); ?></span>
				</li>
				<li>
					<span class="cleft">帮帮评价</span>
					<span class="ctight"><?php echo ($data["adminsuggest"]); ?></span>
				</li>
				<!-- <li><span>需求时间:</span><span name='time'></span></li> -->
			</ul>
		</div>
	</div>
	<!-- <div class="fanhui">
		<a href="three-recordquery.html">返回</a>
	</div> -->
</body>
</html>