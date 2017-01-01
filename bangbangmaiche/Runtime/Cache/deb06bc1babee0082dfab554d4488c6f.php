<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>模板</title>
	<style type="text/css">
		body,ul,li,h2{
			margin: 0;
			padding: 0;
		}
		ul{
			list-style: none;
		}
		#demo{

		}
		#demo .header{
			width: 100%;
			height: 50px;
			background-color: #CCFFCC;
			line-height: 50px;
			padding: 0 20px;
			color: #999;
		}
		#demo .left{
			width: 20%;
			float: left;
		}
		#demo .right{
			width: 75%;
			float: right;
		}
		#demo .left ul{

		}
		#demo .left ul li a{
			width: 90%;
			display:inline-block; 
			padding: 20px 15px;
			text-decoration: none;
			color: #333;
			background-color: #eee;
			border-bottom: 1px solid #FFF;
		}
		#demo .left ul li a:hover{
			background-color: #ddd;
		}
		#demo .right{
			
		}
	</style>
</head>
<body>
	<div id="demo">
		<div class="header">
			<h2>许王疆的Demo</h2>
		</div>
		<div class="main">
			<div class="left">
				<ul>
					<li>
						<a href="<?php echo U('Wap/adminjudge');?>">suggest管理员评价</a>
					</li>
					<li>
						<a href="<?php echo U('Wap/admincarhavejudge');?>">carhave管理员评价</a>
					</li>
					<li>
						<a href="#">小玉的家</a>
					</li>
					<li>
						<a href="#">习大大的国</a>
					</li>
					<li>
						<a href="#">我的全世界</a>
					</li>
				</ul>
			</div>
			<div class="right">
				
			</div>
		</div>
	</div>
</body>
</html>