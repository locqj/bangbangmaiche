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

	<!-- 本页面添加 -->
	<script src='./Public/js/one-show.js'></script>
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	
	<script src='./Public/js/index.js'></script>
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
				<ul class="ac-context">
					<li><a href="./Public/html/ac-one.html">活动编辑</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity">活动列表</a></li>
				</ul>
			</div>

			<!-- 活动结束== -->
			<!-- 评价开始=================================== -->
			<div class="comment">
				<div class="lname" style="background-color:#eee">
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul class="cm-context" id="one">
					<!-- <li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge">客户评价</a></li> -->
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest" id="two">对推荐人评价</a></li>
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
					<p>管理员对推荐人的评价</p>
				</div>
				<div class="rmiddle">
					<table>
						<tr>
							<td style="width:8%" class="xuhao">序号</td>
							<td style="width:17%">推荐人姓名</td>
							<td style="width:18%">客户姓名</td>
							<td style="width:18%">联系方式</td>
							<td style="width:18%">车型</td>
							<!-- <td>分数</td>
							<td>管理员评价</td> -->
							<td>操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr class="tb-context">
								<td><?php echo ($v["id"]); ?></td>
								<td><?php echo ($v["nickname"]); ?></td>
								<td><?php echo ($v["username"]); ?></td>
								<td><?php echo ($v["userphone"]); ?></td>
								<td><?php echo ($v["userwant"]); ?></td>	
							<!-- <td>
								<select class="score">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>  
							</td> -->
							<!-- <td><textarea class="gcomment"></textarea> -->
							<td>
								<a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=savesuggestedit&id=<?php echo ($v["id"]); ?>"><button class="add">评论</button></a>
								<a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=deletesuggest&id=<?php echo ($v["id"]); ?>"><button class="delete">删除</button></a>
							</td>
						</tr><?php endforeach; endif; ?> 
					<!-- <td colspan='6' align='center' style="padding:10px;font-weight:bold">
						<?php echo ($page); ?> 
					</td> -->
					<tr>
						<td colspan='8' align='center' style="padding:10px;">
							<?php echo ($page); ?>
							<!-- <div class="page">
								当前第<span class="nowpage"></span>页
								共<span class="totalpage"></span>页
								<a href="javascript:void(0)" class="beforepage">上一页</a>
								
								<a href="javascript:void(0)"  class="nextpage">下一页</a>
								跳转到<input type="text" class="topage">页
								<a href="javascript:void(0)" class="turnpage">跳转</a>
							</div> -->
						</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>