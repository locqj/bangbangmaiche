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
	<link rel="stylesheet" href="./wechatpublic/css/recordquery.css">
	<script src='./wechatpublic/js/recordquery.js'></script>
	<!-- <link rel="stylesheet" href="./wechatpublic/css/shopmall.css"> -->
	
</head>
<!-- <body ng-app='myapp' ng-controller='myctrl' style="background:url(./wechatpublic/img/bg2.jpg) no-repeat ;background-size:100%  cover"> -->
<body style="background-color:#f9f9f9">
	<!-- <div ng-include=" 'header.html' "></div> -->
	<div class="container">
		<div class="record">
			<div class="re-top">
				<div class="re-toplf"><a href="javascript:void(0)">推荐过的用户</a></div>
				<div class="re-toprg" style="margin-left:-3%;">
					<a href="javascript:void(0)">提供过的车源</a>
				</div>
			</div>
			<div class="re-middle user">
				<?php if(is_array($data)): foreach($data as $key=>$v): ?><ul>
						<li>	
							<a href="http://xwj.565tech.com/Ucar/index.php?m=Phone&a=userdetail&id=<?php echo ($v["id"]); ?>">
								<div class="lf">		
									<div>用户姓名:<span><?php echo ($v["username"]); ?> </span></div>
									<div>联系方式:<span><?php echo ($v["userphone"]); ?></span> </div>
								</div>
								<div class="rg">
									<i class="iconfont">&#xe601;</i>
								</div>
								<!-- <div class="clear"></div> -->
							</a>
						</li>		
					</ul><?php endforeach; endif; ?>

				<div class="count">共<span class="num"></span>条记录</div>
			</div>
			<div class="re-middle ucar">
				<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><ul>
						<li>
							<a href="http://xwj.565tech.com/Ucar/index.php?m=Phone&a=cardetail&id=<?php echo ($v["id"]); ?>">		
								<div class="lf">		
									<div>提供车源:<span> <?php echo ($v["source"]); ?></span></div>
									<div>联系方式:<span><?php echo ($V["phone"]); ?></span> </div>
								</div>
								<div class="rg">
									<i class="iconfont">&#xe601;</i>
								</div>
							</a>
							<!-- <div class="clear"></div> -->
						</li>	
					</ul><?php endforeach; endif; ?>
				<div class="count">共<span class="num"></span>条记录</div>
			</div>
		</div>
	</div>
	<!-- <a href="<?php echo U('Phone/showpay');?>">测试定金</a> -->
</body>
</html>