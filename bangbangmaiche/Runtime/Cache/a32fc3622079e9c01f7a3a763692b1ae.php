<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name='viewport' content="width=device-width,initial-scale=1.0">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>
	<!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src='http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js'></script> -->	
	<script src="./Public/js/angular.min.js"></script>
	<link rel="stylesheet" href="./Public/public/public.css">
	<script src='./Public/public/head/head.js'></script>
	
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">

	<!-- 本页面添加 -->
	<script src='./Public/js/one-show.js'></script>
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<script src='./Public/js/index.js'></script>
	<script src='./Public/js/operate.js'></script>

	<link rel="stylesheet" href="./Public/css/form.css">

</head>
<body ng-app='myApp' ng-controller='myCtrl'>
	<div ng-include="'./Public/public/head/head.html'"></div>	
	<div class="whole-context">
		<div class="left float-left">
			<!-- 商城======================================== -->
			<div class="shopmall">
				<div class="lname" style="background-color:#eee">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul id="one">
					<li><a href="./Public/html/index.html" id="two">添加商品</a></li>
					<li><a href="./Public/html/shop-show.html">商品列表</a></li>
				</ul>
			</div>
			<!-- 商城结束== -->
			<!-- 活动开始=================================== -->
			<div class="active">
				<div class="lname">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe601;</i>活动
					</a>
				</div>
				<ul class="ac-context">
					<li><a href="./Public/html/ac-one.html">活动编辑</a></li>
					<li><a href="./Public/html/ac-two.html">活动列表</a></li>
				</ul>
			</div>

			<!-- 活动结束== -->
			<!-- 评价开始=================================== -->
			<div class="comment">
				<div class="lname" >
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul class="cm-context"  >
					<li><a href="./Public/html/cm-carsource.html">客户评价</a></li>
					<li><a href="./Public/html/cm-recommd.html" >对推荐人评价</a></li>
					<li><a href="./Public/html/cm-car.html">对车源评价</a></li>
				</ul>
			</div>

			<!-- 评价结束== -->
			<!-- 记录查询开始=================================== -->
			<div class="search">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe602;</i>记录查询</a>
				</div>
				<ul class="sr-context">
					<li><a href="./Public/html/search-car.html">推荐客户</a></li>
					<li><a href="./Public/html/search-user.html">推荐车源</a></li>
				</ul>
			</div>
			<!-- 记录查询结束== -->
			<!-- 管理员权限开始=================================== -->
			<div class="power">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe604;</i>管理权限</a>
				</div>
				<ul class="pw">
					<li><a href="./Public/html/power-manage.html">权限管理</a></li>
				</ul>
			</div>
			<!-- 管理员权限结束== -->
		</div>

		<div class="right float-left">
			<div class="right-context">
				<div class="rtop">
					<p>添加汽车商品</p>
				</div>
				<div class="rmiddle">
					<form action="">
						<div class="carsource">汽车来源<input type="text"></div>
						<div class="cname">汽车品牌<input type="text"></div>
						<div class="ctype">汽车型号<input type="text"></div>
						<div class="ccolor">汽车颜色<input type="text"></div>
						<div class="cprice">汽车价格<input type="text"></div>
						<div class="cimage">汽车图片<input type="file" accept="image/*"></div>
						<input type="submit">
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>