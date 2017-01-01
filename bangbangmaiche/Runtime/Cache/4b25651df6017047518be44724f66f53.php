<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=0,minimum-scale=1.0,user-scalable=no">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>

	<link rel="stylesheet" href="./Public/public/public.css">
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	
	
	<script src="./Public/js/angular.min.js"></script>
	<script src='./Public/public/head/head.js'></script>
	<script src='./Public/js/one-show.js'></script>
	<script src='./Public/js/index.js'></script>
	<script type="text/javascript" src='./Public/js/operate.js'></script>


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
				<div class="lname" style="background-color:#eee">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe601;</i>活动
					</a>
				</div>
				<ul class="ac-context" id="one">
					<li><a href="./Public/html/ac-one.html" >活动编辑</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity" id="two">活动列表</a></li>
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
				<div class="lname">
					<a href="javascript:void(0)"><i class="iconfont">&#xe602;</i>记录查询</a>
				</div>
				<ul class="sr-context">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser">推荐用户</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchcar">提供车源</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=orderrecord">支付记录</a></li>
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
					<p>活动展示列表</p>
				</div>
				<div class="rmiddle">
					<table>
						<tr>
							<td style="width:8%"  class="xuhao">序号</td>
							<td style="width:15%">活动名称</td>
							<td style="width:15%">活动主题</td>	
							<td style="width:15%">活动时间</td>
							<td style="width:15%">活动地点</td>
							<!-- <td>活动图片</td>
							<td>详细描述</td> -->
							<td style="width:30%">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>

								<td><span class="num"><?php echo ($v["id"]); ?></span></td>
								<td><?php echo ($v["name"]); ?></td>
								<td><?php echo ($v["theme"]); ?></td>	
								<td><?php echo ($v["activitytime"]); ?></td>
								<td><?php echo ($v["address"]); ?></td>
							<!-- <td><?php echo ($v["theme"]); ?></td>
							<td><textarea class="acomment"><?php echo ($v["descripe"]); ?></textarea></td> -->
							<!-- <td><button class="modify">修改</button>  -->
							<td>
								<a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=saveactivityinfo&id=<?php echo ($v["id"]); ?>"><button class="save">修改</button></a>
								<a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=deleteactivity&id=<?php echo ($v["id"]); ?>"><button class="delete">删除</button></a> 

							</td>
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
			<!-- <button id='test'>测试</button> -->
			<div class="clear"></div>

		</div>
	
		<script>
			// $(function(){
			// 	$('#test').click(function(){
			// 		alert('test this page show');
			// 	})
				
			// })
		</script>
	</body>
	</html>