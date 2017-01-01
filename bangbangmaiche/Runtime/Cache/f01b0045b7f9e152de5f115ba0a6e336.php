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
	<!-- <link rel="stylesheet" href="./Public/css/map.css"> -->
	<link rel="stylesheet" href="./Public/css/alert.css">
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
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showmap"  >商铺地址</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showlunbo">轮播照片</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showpayorder" id="two">活动定金</a></li>
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
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge">客户评价</a></li>
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
					<p>活动定金</p>
				</div>		
				<div class="rmiddle">
					<table style="text-align:center">
						<tr>
							<td style="width:8%" class="xuhao">序号</td>
							<td  style="width:15%">定金</td>
							<td  style="width:20%">时间</td>
							<td  style="width:30%">活动图片</td>
							<td  style="width:25%">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
								<td></td>
								<td><?php echo ($v["dingjin"]); ?></td>
								<td> <?php echo ($v["time"]); ?></td>
								<td><img src="<?php echo ($v["image"]); ?>" alt=""></td>
								<td>
									<button class="modifymoney">修改</button>
									<a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=delpaydingjininfo&id=<?php echo ($v["id"]); ?>"><button class="delete paydelete">删除</button></a>
								</td>
							</tr><?php endforeach; endif; ?>
						<!-- <?php if(is_array($data)): foreach($data as $key=>$v): ?>-->
						<!--<?php endforeach; endif; ?>	 -->
						<tr>
							<td colspan='6' align='center' style="padding:10px;">
								<?php echo ($page); ?>
							</td>
						</tr>
					</table>
					<div style="text-align:center;margin:20px auto 0;">
						<a href="javacript:void(0)" class="addmanage">
							<i class="icon-add">&#xe606;</i>添加活动定金
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!-- 添加定金 -->
	<div class="alert">
		<div class="alert-context">
			<div class="alert-top">
				<p class="alert-top-left">添加活动定金</p>
				<a href="javascript:void(0)" class="close"><i class="icon-close">&#xe607;</i></a>
			</div>
			<form action="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=payorder" method="post" class="addzb">
				<div>
					<div class="flf">金额</div>
					<div class="lrg"><input type="text" name="paymoney" placeholder="请填写活动定金金额"></div>
				</div>
				<div>
					<div class="flf">时间</div>
					<div class="lrg"><input type="date" name="paytime" placeholder="请填写活动时间"></div>
				</div>
				<div>
					<div class="flf">图片</div>
					<div class="lrg"><input type="file" name="payimg" accept="image/*" placeholder="请选择活动图片"></div>
				</div>
				<div class="ftijiao">
					<input type="submit">
				</div>
			</form>
		</div>
	</div>

</body>
</html>