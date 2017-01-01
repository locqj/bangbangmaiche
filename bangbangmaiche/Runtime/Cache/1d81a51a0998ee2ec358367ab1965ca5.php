<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=0,minimum-scale=1.0,user-scalable=no">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>
	<script src="./Public/js/angular.min.js"></script>

	<link rel="stylesheet" href="./Public/public/public.css">
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">
	<link rel="stylesheet" href="./Public/css/form.css">
	<link rel="stylesheet" href="./Public/css/shop-show-table.css">

	<script src='./Public/public/head/head.js'></script>
	<script src='./Public/js/index.js'></script>
	<script src='./Public/js/one-show.js'></script>
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<script src='./Public/js/operate.js'></script>
	<!-- ueditor引用 -->
	<script type="text/javascript" charset="utf-8" src="./Public/html/editor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="./Public/html/editor/ueditor.all.min.js"> </script>
	<link rel="stylesheet" href="./Public/css/ac.css">
	<script type="text/javascript" charset="utf-8" src="./Public/html/editor/lang/zh-cn/zh-cn.js"></script>
	<!-- ueditor引用结束 -->
   
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
				<div class="lname"  >
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul class="sm-context" >
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Admin">添加商品</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo" >商品列表</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showmap"  >商铺地址</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showlunbo">轮播照片</a></li>
			
				</ul>
			</div>
			<!-- 商城结束== -->
			<!-- 活动开始=================================== -->
			<div class="active">
				<div class="lname"  style="background-color:#eee">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe601;</i>活动
					</a>
				</div>
				<ul class="ac-context" id="one">
					<li><a href="./Public/html/ac-one.html">活动编辑</a></li>
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity" id="two">活动列表</a></li>
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
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=orderrecord" >支付记录</a></li>
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
					<p>活动列表之活动修改</p>
				</div>
				<div class="rmiddle">
					<form action="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=savedb" method='post' class="modifycar" enctype="multipart/form-data" >
						<input type="text" value="<?php echo ($data["id"]); ?>" name='id' style="display:none">
						<div>
							<div class="lf">
								<span>活动名称</span>
								<input type="text" name='name' value='<?php echo ($data["name"]); ?>'>
							</div>
							<div class="rg">
								<span>活动主题</span>
								<input type="text" name='theme' value='<?php echo ($data["theme"]); ?>'>
							</div>
						</div>
						<div>
							<div class="lf">
								<span>活动时间</span>
								<input type="text" name='activitytime' value='<?php echo ($data["activitytime"]); ?>'>
							</div>
							<div class="rg">
								<span>活动地点</span>
								<input type="text" name='address' value='<?php echo ($data["address"]); ?>'>
							</div>
						</div>
						 
						<div >
							<div class="lf">
								<span>活动定金</span>
								<input type="text" name='dingjin' value='<?php echo ($data["dingjin"]); ?>'>
							</div>
							<div class="rg">
								<span>封面图片</span>
								<input name='image' type="file" accept="image/*">
							</div>
						</div>
						<div class="clear"></div>  
						<!-- <div>
						<div style="display:inline-block"><span style="width:32%;margin-right:0">活动名称</span>
							<input type="text" name='name' value='<?php echo ($data["name"]); ?>'>
						</div>
						<div style="display:inline-block"><span style="width:32%;margin-right:0">活动主题</span>
							<input type="text" name='theme' value='<?php echo ($data["theme"]); ?>'>
						</div>
						</div>
						<div >
						<div style="display:inline-block"><span style="width:32%;margin-right:0">活动时间</span>
							<input type="text" name='activitytime' value='<?php echo ($data["activitytime"]); ?>'>
						</div>
						<div style="display:inline-block"><span style="width:32%;margin-right:0">活动地点</span>
							<input type="text" name='address' value='<?php echo ($data["address"]); ?>'>
						</div>
						</div>
						<div >
						<div style="display:inline-block"><span style="width:32%;margin-right:0;margin-left:38px; ">活动定金</span>
							<input type="text" style="width:50%" name='dingjin' value='<?php echo ($data["dingjin"]); ?>'>
						</div>
						<div style="display:inline-block"><span style="width:32%;margin-right:0;margin-left:-12px;">封面图片</span>
							<input name='image' type="file" accept="image/*">
						</div>
						</div> -->
						<!-- ueditor -->
						 <script id="editor" type="text/plain" style="margin-left:-100px;width:111%;height:350px;"></script>
						 <!-- 后台用于传值的 -->
						<input type="text" id='content' name='content' style="display:none">

						 
						<div>
							<input id="form-context" name="form"  type="submit" onclick="getContent();">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
<script type="text/javascript">
	//实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
      ue.ready(function() {
    ue.setContent('<?php echo html_entity_decode($data['descripe'])?>');
});
  
    function getContent() {
    	var arr = [];
    	//arr.push("使用editor.getContent()方法可以获得编辑器的内容");
    	//arr.push("内容为：");
    	arr.push(UE.getEditor('editor').getContent());
    	document.getElementById('content').value=arr;
    	// return arr;
    	// alert(arr);
    }
    
  </script>
</body>
</html>