<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<script src='./wechatpublic/js/jquery-1.4.2.min.js'></script>
	<title>商城</title>
	<link rel="stylesheet" href="./wechatpublic/css/shopmall.css">
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<script src='./wechatpublic/js/shopmall.js'></script>
</head>
<body>
	<script>
	// public function search(){
	// var id=document.getElementById('search').value;
	var url='<?php echo U(Phone/showsearch);?>'
			//  var data={
			// 	 'combine':id,
			// 	// 'name':'hello'
			// }
			//  var success=function(response){
			//  	{}

			//  }
			// $.post(url,data,success,'json');
			// $.get(url,data,success,'json');
		// }	
	</script>
	<div class="container">
		<div class="search">
			<a id='a1' href="" class="search2"><i  class="iconfont">&#xe600;</i></a>
			<input type="text" id='search' placeholder="请输入品牌/车型">
		</div>
		<!-- <div class="top">
			<div class="lastest">最新</div>
			<div class="price">价格</div>
		</div> -->

		<ul class="lastest-list">
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><li>
				<a href="<?php echo U('Phoneshop/showdetail');?>&id=<?php echo ($v["id"]); ?>">
					<div class="img"><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
					<div class="rg">
						<p><?php echo ($v["logo"]); echo ($v["size"]); echo ($v["color"]); ?>(最新)</p>
						<p><label><?php echo ($v["price"]); ?></label></p>
						<p></p>
					</div>
				</a>
			</li><?php endforeach; endif; ?>
		</ul>

		<ul class="price-list">
			<?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><li>
				<a href="<?php echo U('Phoneshop/showdetail');?>&id=$v.id">
					<div class="img"><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
					<div class="rg">
						<p><?php echo ($v["logo"]); echo ($v["size"]); echo ($v["color"]); ?>(价格)</p>
						<p><label><?php echo ($v["price"]); ?></label></p>
						<p></p>
					</div>
				</a>
			</li><?php endforeach; endif; ?>
		</ul>

		<ul class="search-list">
			<?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><li>
				<a href="<?php echo U('Phoneshop/showdetail');?>&id=$v.id">
					<div class="img1" ><img src="<?php echo ($v["imageurl"]); ?>" alt=""></div>
					<div class="rg">
						<p ><?php echo ($v["combine"]); ?></p>
						<p ><label ><?php echo ($v["price"]); ?></label></p>
						<p></p>
					</div>
				</a>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>

</body>
</html>