<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>

	<script src="./Public/js/angular.min.js"></script>
	<link rel="stylesheet" href="./Public/public/public.css">
	<script src='./Public/public/head/head.js'></script>
	<script src='./Public/js/index.js'></script>
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">

	<link rel="stylesheet" href="./Public/css/shop-show-table.css">

	<!-- 本页面添加 -->
	<script src='./Public/js/one-show.js'></script>
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<link rel="stylesheet" href="./Public/css/map.css">
	<link rel="stylesheet" href="./Public/css/alert.css">
	<link rel="stylesheet" href="./Public/css/ac.css">
	<script src='./Public/js/operate.js'></script>
	<script src='./Public/js/alert.js'></script>
	
</head>
<body ng-app='myApp' ng-controller='myCtrl'>

	<!-- 头部 -->
	<div class="head">
		<div class="content">
			<div class="head-left float-left">
				<div class="image"><img src="./Public/img/logo.jpg" alt="公司logo"></div>
				<h2 class="cname">后台管理系统</h2>
			</div>
			<div class="head-right float-right">
				<div>欢迎您:<span class="uname">用户名</span></div>
				<div><b><a href="<?php echo U('Login/index');?>" style="color:#F9C609">退出</a></b></div>
				<p class="time"></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- end 头部 -->
	<div class="whole-context">
		<div class="left float-left">
			<!-- 商城======================================== -->
			<div class="shopmall">
				<div class="lname"  style="background-color:#eee">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul class="sm-context" id="one">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Admin">添加商品</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo">商品列表</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showmap"  id="two">商铺地址</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showlunbo">轮播照片</a></li>
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
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity">活动列表</a></li>
				</ul>
			</div>

			<!-- 活动结束== -->
			<!-- 评价开始=================================== -->
			<div class="comment">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul>
					<!-- <li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge">客户评价</a></li> -->
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest" >对推荐人评价</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource">对车源评价</a></li>
				</ul>
			</div>
			
			<!-- 评价结束== -->
			<!-- 记录查询开始=================================== -->
			<div class="search">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe602;</i>记录查询</a>
				</div>
				<ul class="sr-context">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser">推荐用户</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchcar">提供车源</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=orderrecord"　>支付记录</a></li>
				</ul>
			</div>
			<!-- 记录查询结束== -->
			<!-- 管理员权限开始=================================== -->
			<div class="power">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe604;</i>管理权限</a>
				</div>
				<ul class="pw">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Login&a=showadmin">权限管理</a></li>
				</ul>
			</div>
			<!-- 管理员权限结束== -->
		</div>

		<div class="right float-left">
			<div class="right-context">
				<div class="rtop">
					<p>商铺地址之地址修改</p>
				</div>
				
				<div class="rmiddle">
				
					<!-- <form action="<?php echo U('Shop/update');?>" method='post' class="addzb"> -->
				<form action="<?php echo U('Shop/saveupdate');?>" method='post' class="addzb" enctype="multipart/form-data">
				<div>
					<div class="flf">城市</div>
					<div class="lrg">
						<input type="text" name='city' value="<?php echo ($data["city"]); ?>">
						<input type="text" name='id' value="<?php echo ($data["id"]); ?>" style="display:none">
					</div>
				</div>
				<div>
					<div class="flf">车源</div>
					<div class="lrg"><input type="text" name='carsource'  value="<?php echo ($data["carsource"]); ?>"></div>
				</div>
				<div>
					<div class="flf">品牌</div>
					<div class="lrg"><input type="text" name='pingpai'  value="<?php echo ($data["pingpai"]); ?>"></div>
				</div>
				<div>
					<div class="flf">logo</div>
					<div class="lrg">
						
						<input type="file" accept="image/*" name="image" id="img" placeholder="请选择logo图片"></div>
				</div>
				<div>
					<div class="flf">拾取</div>
					<div class="lrg" style="text-align:left">
						<a class="shiqu"  href="http://api.map.baidu.com/lbsapi/getpoint/index.html" target="_blank" style='margin-left:10px'>点击拾取</a>
					</div>
				</div>
				<div>
					<div class="flf">坐标</div>
					<div class="lrg"><input type="text" name='zuobiao'  value="<?php echo ($data["zuobiao"]); ?>"></div>
				</div>
				<div class="ftijiao">
					<input type="submit" value="保存">
				</div>
			</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>