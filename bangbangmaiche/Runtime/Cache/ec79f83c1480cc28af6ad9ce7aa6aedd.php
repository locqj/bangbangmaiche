<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">

	<meta charset="UTF-8">
	<title>汽车详情</title>
	
	<script src='./wechatpublic/js/jquery-1.4.2.min.js'></script>
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/shopmall.css">
	<style>
		body{
			overflow-x: hidden;
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="context">
			<p class="top-title">汽车详情</p>
			<div>
				<div class="cleft"> 车&nbsp;源:</div>
				<div class="ctight"><?php echo ($data["comefrom"]); ?></div>
			</div>
			<div>
				<div class="cleft">品&nbsp;牌:</div>
				<div class="ctight"><?php echo ($data["logo"]); ?></div>
			</div>
			<div>
				<div class="cleft">型&nbsp;号:</div>
				<div class="ctight"><?php echo ($data["size"]); ?></div>
			</div>
			<div>
				<div class="cleft">颜&nbsp;色:</div>
				<div class="ctight"><?php echo ($data["color"]); ?></div>
			</div>
			<div>
				<div class="cleft">价&nbsp;格:</div>
				<div class="ctight"><?php echo ($data["price"]); ?></div>
			</div>
			<!-- <div>
				<div class="cleft">照&nbsp;片:</div>				
				<div class="ctight"></div>
			</div> -->
			<div class="fullcar" style="width:100%;border:0">
					<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><img src="<?php echo ($v["imageurl"]); ?>" alt=""><?php endforeach; endif; ?>
			</div>	
		</div>

		<!-- 联系客服\确认订单 -->
		<div class="bottom">
			<div class="contact">
				<a href="tel:02159919816">
					<i class="iconfont">&#xe602;</i>
					联系客服
				</a>
			</div>
			<div class="sure">
				<a href="http://xwj.565tech.com/Ucar/index.php?m=Wxpay&a=carpayuserinfo&id=<?php echo ($data["id"]); ?>">我要预订</a>
			</div>
		</div>
	</div>
<!-- 	<div class="fanhui">
		<a href="<?php echo U('Phoneshop/index');?>">返回</a>
	</div> -->
</body>
</html>