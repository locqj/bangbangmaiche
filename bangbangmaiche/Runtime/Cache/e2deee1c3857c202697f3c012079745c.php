<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<!-- <script src='./wechatpublic/js/jquery-1.4.2.min.js'></script> -->
	<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
	<title>商城</title>
	<link rel="stylesheet" href="./wechatpublic/css/shopmall.css">
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/imglunbo.css">
	<script src='./wechatpublic/js/shopmall.js'></script>
	<script src='./wechatpublic/js/imglunbo.js'></script>
<script>
    $(function(){
        $(".example").luara({width:"370",height:"200",interval:4000,selected:"seleted"});
    });
    </script>
</head>
<body>
	<div class="container">
		<div class="search">
			<a id='a1' href="" class="search2"><i  class="iconfont">&#xe600;</i></a>
			<input type="text" id='search' placeholder="请输入品牌/车型">
		</div>
		<!-- 头部搜索结束 -->
		<!-- 图片轮播 -->
		<!-- <div class="center"> -->
			<!-- <div class="center_top"> -->
				<div class="  example">
					<ul>
						<!-- <?php if(is_array($data3)): foreach($data3 as $key=>$v): ?>-->
						<!-- 修改图片大小 -->
						<!-- <li style=" background-size: 100% 100%; zoom:0.6; background:url() no-repeat center center;"> -->
						<!-- <li>
							<img src="<?php echo ($v["imageurl"]); ?>" alt="">
						</li> -->
					<!--<?php endforeach; endif; ?> -->
					<li><img src="./wechatpublic/img/1.jpg" alt=""></li>
					<li><img src="./wechatpublic/img/2.jpg" alt=""></li>
					<li><img src="./wechatpublic/img/3.jpg" alt=""></li>
					</ul>
				</div>  

			<!-- </div>     -->
		<!-- </div> -->
		<!-- 图片轮播结束 -->

		<!-- 下面的商品展示 -->
		<div class="top">
			<div class="lastest">最新</div>
			<div class="price">价格</div>
		</div>

		<ul class="lastest-list">
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><li>
					<a href="<?php echo U('Phoneshop/showdetail');?>&id=<?php echo ($v["id"]); ?>">
						<div class="img"><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
						<div class="rg">
							<p><?php echo ($v["logo"]); echo ($v["size"]); echo ($v["color"]); ?> </p>
							<p><label><?php echo ($v["price"]); ?></label></p>
							<p><?php echo ($v["comefrom"]); ?></p>  
						</div>
					</a>
				</li><?php endforeach; endif; ?>
		</ul>

		<ul class="price-list">
			<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><li>
					<a href="<?php echo U('Phoneshop/showdetail');?>&id=<?php echo ($v["id"]); ?>">
						<div class="img"><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
						<div class="rg">
							<p><?php echo ($v["logo"]); echo ($v["size"]); echo ($v["color"]); ?> </p>
							<p><label><?php echo ($v["price"]); ?></label></p>
							<p><?php echo ($v["comefrom"]); ?></p>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
		</ul>

		<ul class="search-list">
			<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><li>
					<a href="<?php echo U('Phoneshop/showdetail');?>&id=$v.id">
						<div class="img1" ><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
						<div class="rg">
							<p id='info'></p>
							<p ><label id='price'><?php echo ($v["price"]); ?></label></p>
							<p></p>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
		</ul>
	</div>

</body>
</html>