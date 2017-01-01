<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<script src='./wechatpublic/js/jquery-1.4.2.min.js'></script>
	<script src='./wechatpublic/js/angular.min.js'></script>
	<title>帮帮买车之记录查询</title>
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<script src='./wechatpublic/js/header.js'></script>
	<link rel="stylesheet" href="./wechatpublic/css/form.css">
	<!-- <link rel="stylesheet" href="./wechatpublic/css/recordquery.css"> -->
	<script src='./wechatpublic/js/recordquery.js'></script>

	<link rel="stylesheet" href="./wechatpublic/css/active.css">
</head>
<!-- <body ng-app='myapp' ng-controller='myctrl' style="background:url(./wechatpublic/img/bg5.jpg) no-repeat top left; background-size:center center"> -->
<body style="background-color: #f9f9f9">
	<!-- <div ng-include=" 'header.html' "></div> -->
	<div class="container">
		<div class="record">
			<div class="re-top">
				<div class="re-toplf">
					<a href="javascript:void(0)">最新活动</a>
				</div>
				<div class="re-toprg" style="margin-left:-3%;">
					<a href="javascript:void(0)">往期活动</a>
				</div>
			</div>
			<div class="re-middle user">
				<ul>
					<li>	
						<a href="<?php echo U('Phone/showlatest');?>">	
							<div class="image"><img src="<?php echo ($data["imageurl"]); ?>" alt=""></div>
							<div class="lf ">		
								<div><span>活动名称:<?php echo ($data["name"]); ?></span> </div>
								<div><span>活动时间:<?php echo ($data["activitytime"]); ?></span> </div>
							</div>
							<div class="rg ">
								<i class="iconfont">&#xe601;</i>
							</div>
							<!-- <div class="clear"></div> -->
						</a>
					</li>		
				</ul>

				<div class="count">共<span class="num"></span>条记录</div>
			</div>
			<div class="re-middle ucar">
				<ul>
					<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><li>	
							<a href="<?php echo U('Phone/showbefore');?>&id=<?php echo ($v["id"]); ?>">	
								<div class="image"><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
								<div class="lf ">		
									<div><span>活动名称:<?php echo ($v["name"]); ?></span> </div>
									<div><span>活动时间:<?php echo ($v["activitytime"]); ?></span> </div>
								</div>
								<div class="rg ">
									<i class="iconfont">&#xe601;</i>
								</div>
								<!-- <div class="clear"></div> -->
							</a>
						</li><?php endforeach; endif; ?>		
				</ul>
				<div class="count">共<span class="num"></span>条记录</div>
			</div>
		</div>
	</div>

</body>
</html>