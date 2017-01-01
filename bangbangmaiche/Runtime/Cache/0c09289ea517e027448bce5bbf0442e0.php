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
	
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">
	<!-- ueditor引用 -->
	<script type="text/javascript" charset="utf-8" src="editor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="editor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>
	<!-- ueditor引用结束 -->

	<!-- 本页面添加 -->
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<link rel="stylesheet" href="./Public/css/ac.css">
	
	<script src='./Public/js/index.js'></script>
	<script src='./Public/js/one-show.js'></script>
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
				<div class="lname">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Admin">添加商品</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo">商品列表</a></li>
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
				<ul class="ac-context" >
					<li><a href="./Public/html/ac-one.html" >活动编辑</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity">活动列表</a></li>
					<!-- <li><a href="ac-three.html">活动3</a></li> -->
				</ul>
			</div>

			<!-- 活动结束== -->
			<!-- 评价开始=================================== -->
			<div class="comment">
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul class="cm-context" >
					<!-- <li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge">客户评价</a></li> -->
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest" >对推荐人评价</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource">对车源评价</a></li>
				</ul>
			</div>

			<!-- 评价结束== -->
			<!-- 记录查询开始=================================== -->
			<div class="search">
				<div class="lname" style="background-color:#eee">
					<a href="javascript:void(0)"><i class="iconfont">&#xe602;</i>记录查询</a>
				</div>
				<ul class="sr-context" id="one">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser"  >推荐用户</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchcar">提供车源</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=orderrecord" id="two">支付记录</a></li>
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
			<div >
				<h3>定金支付查询</h3>
				<div class="right-context">
					<div class="rmiddle">
								<table>
							<tr>
								<td style="width:5%" class="xuhao ">序号</td>
								<td style="width:10%">用户名</td>
								<td style="width:10%">联系方式</td>
								<td style="width:10%">车源</td>
								<td style="width:10%">车型</td>
								<td style="width:10%">定金</td>
								<td style="width:10%">交易时间</td>
								<td style="width:17%">活动名称</td>
							</tr>
							 <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr class="tb-context">
									<td><?php echo ($key); ?></td>
									<td><?php echo ($v["name"]); ?> </td>
									<td><?php echo ($v["phone"]); ?> </td>
									<td><?php echo ($v["place"]); ?> </td>
									<td><?php echo ($v["good"]); ?> </td>
									<td><?php echo ($v["dingjin"]); ?></td>
									<td><?php echo ($v["time_end"]); ?></td>
									<td><?php echo ($v["actName"]); ?></td>
								</tr><?php endforeach; endif; ?>  
							<tr>
							<td colspan='8' align='center' style="padding:10px;">
									<?php echo ($page); ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

</body>
</html>