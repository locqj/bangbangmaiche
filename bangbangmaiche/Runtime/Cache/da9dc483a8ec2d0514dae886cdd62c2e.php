<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>
	<!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src='http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js'></script> -->	
	<script src="./Public/js/angular.min.js"></script>
	<link rel="stylesheet" href="./Public/public/public.css">
	<script src='./Public/public/head/head.js'></script>
	<script src='./Public/js/index.js'></script>
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">
	<link rel="stylesheet" href="./Public/css/form.css">
	<link rel="stylesheet" href="./Public/css/shop-show-table.css">

	<!-- 本页面添加 -->
	<script src='./Public/js/one-show.js'></script>
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<script src='./Public/js/operate.js'></script>

</head>
<body ng-app='myApp' ng-controller='myCtrl'>
		<!-- <div ng-include="'./Public/public/head/head.html'"></div>	 -->
		<!-- 头部 -->
	<div class="head">
		<div class="content">
			<div class="head-left float-left">
				<div class="image"><img src="./Public/img/logo.jpg" alt="公司logo"></div>
				<h2 class="cname">后台管理系统</h2>
			</div>
			<div class="head-right float-right">
				<div>欢迎您:<span class="uname"><?php echo ($admin); ?></span></div>
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
				<div class="lname">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul class="sm-context"  >
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Admin">添加商品</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo"  >商品列表</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showmap"  >商铺地址</a></li>
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
				<div class="lname"  style="background-color:#eee">
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul id="one">
					<!-- <li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge">客户评价</a></li> -->
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest"  id="two">对推荐人评价</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource" >对车源评价</a></li>
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
				<ul class="pw" >
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Login&a=showadmin" >权限管理</a></li>
				</ul>
			</div>
			<!-- 管理员权限结束== -->
		</div>

		<div class="right float-left">
			<div class="right-context">
				<div class="rtop">
					<p>管理员对推荐人的评价详情</p>
				</div>
				
				<div class="rmiddle">
					<form action="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=savesuggestdb" method='post' class="modifycar">
						<input type="text" value="<?php echo ($data["id"]); ?>" name='id' style="display:none">
						<div><span>推荐人姓名</span>
							<input type="text" name='nickname' readonly="true" value='<?php echo ($data["nickname"]); ?>'>
						</div>
						<div><span>客户姓名</span>
							<input type="text" name='username' readonly="true" value='<?php echo ($data["username"]); ?>'>
						</div>
						<div><span>联系方式</span>
							<input type="text" name='userphone' readonly="true" value='<?php echo ($data["userphone"]); ?>'>
						</div>
						<div><span>车型</span>
							<input type="text" name='userwant' readonly="true" value='<?php echo ($data["userwant"]); ?>'>
						</div>
						<div><span>评分</span>
							<div  style="width:60%;display:inline-block;text-align:left">
								<select name='scount' class="score">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>  
							</div>
						</div>
						<div><span>评论</span>
							<div style="width:60%;display:inline-block;text-align:left">
								<td><textarea name='adminjudge' class="gcomment" placeholder="请输入评论"></textarea></td>
							</div>
						</div>
						<div align="center">
							<input type="submit" value="保存修改">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>