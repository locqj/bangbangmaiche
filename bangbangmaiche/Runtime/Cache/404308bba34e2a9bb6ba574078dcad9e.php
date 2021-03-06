<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=0,minimum-scale=1.0,user-scalable=no">
	<script src='./Public/js/jquery-1.4.2.min.js'></script>
	<script src="./Public/js/angular.min.js"></script>

	<link rel="stylesheet" href="./Public/public/public.css">
	<link rel="stylesheet" href="./Public/css/cm-carresource.css">
	<link rel="stylesheet" href="./Public/css/cm-recommd.css">
	<link rel="stylesheet" href="./Public/public/head/head.css">
	<link rel="stylesheet" href="./Public/public/left/left.css">
	<link rel="stylesheet" href="./Public/css/form.css">

	<script src='./Public/public/head/head.js'></script>
	<script src='./Public/js/one-show.js'></script>
	<script src='./Public/js/index.js'></script>
	<script src='./Public/js/operate.js'></script>


	<script>
	function pic(){
		var formData = new FormData();
        formData.append('picture', $('#picture')[0].files[0]);
		var id=document.getElementById('shopid').value;
		// var pic=document.getElementById('picture').picture[];
		var url='http://xwj.565tech.com/Ucar/index.php?m=Shop&a=pic';
		var data={
			'shopid':id,
			'pic':formData,
// 'name':'hello'
               };
        var success=function(response){
	    if(response!=null)
	    {
	    	alert(response);
		document.getElementById('img').src='response';
	    }

  }
// $.post(url,data,success,'json');
$.post(url,data,success,'json');


// return a;

}
</script>

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
				<div class="lname" style="background-color:#eee">
					<a href="javascript:void(0)">
						<i class="iconfont">&#xe603;</i>商城
					</a>
				</div>
				<ul id="one">
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Admin" id="two">添加商品</a></li>
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
				<div class="lname" >
					<a href="javascript:void(0)"><i class="iconfont">&#xe600;</i>评价</a>
				</div>
				<ul class="cm-context"  >
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
					<li><a href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource">提供车源</a></li>
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
					<p>添加汽车商品</p>
				</div>
				<div class="rmiddle">
					<form action="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=sub_shopinfo" method='post' enctype="multipart/form-data">
						<input type="text" name='shopid' id='shopid' style='display:none' value='<?php echo ($id); ?>'>
						<div><span>汽车来源</span><input name='comefrom' type="text"  placeholder="请输入汽车来源"></div>
						<div><span>汽车品牌</span><input name='logo' type="text" placeholder="请输入汽车品牌"></div>
						<div><span>汽车型号</span><input name='size' type="text" placeholder="请输入汽车型号"></div>
						<div><span>汽车颜色</span><input name='color' type="text" placeholder="请输入汽车颜色"></div>
						<div><span>汽车价格</span><input name='price' type="text" placeholder="请输入汽车价格"></div>
						<div><span>汽车定金</span><input type="text" name="orderpay" placeholder="请输入汽车定金"></div>
						<!-- <div class="cimage">汽车图片<input name='pic' type="file" accept="image/*"></div> -->
						<div><span>汽车照片</span>
							<!-- <input type="file" name="pic" id="img"/> -->
							<div class="ctianjia" style="display:inline-block;width:60%;text-align:left;">
								<a href="javascript:void(0)" class="cadd-img">
									<i class="icon-add">&#xe606;</i>添加照片
								</a><br>
								<div class="cimg-hide">
									<div class="cimag">
										<input type="file" name='pic[]' accept="image/*" >				
										<!-- <img id='img' src='' alt="暂无图片"> -->
										<input type="button" value="删除" class="cdelet" >
									</div>
								</div>
							</div>
						</div>
					<!-- 	<div>
							<span>微信商城</span>
							<div class="tianjia" style="display:inline-block;width:60%;text-align:left;">
								<a href="javascript:void(0)" class="add-img">
									<i class="icon-add">&#xe606;</i>添加照片
								</a><br>
								<div class="img-hide">
									<div class="imag">
										<input type="file" accept="image/*" >
										<input type="button" value="上传">
										<img  src='' alt="暂无图片">
										<input type="button" value="删除" class="delet" >
									</div>
								</div>
							</div>
						</div> -->
						<input type="submit" value='提交'>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>