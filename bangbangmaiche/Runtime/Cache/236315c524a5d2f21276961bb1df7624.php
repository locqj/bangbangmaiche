<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script src='../../js/jquery-1.4.2.min.js'></script>
	<title>支付</title>
	<link rel="stylesheet" href="../../css/shopmall.css">
	<link rel="stylesheet" href="../../css/public.css">
</head>
<body>
	<div class="container">
		<div class="paydetail">
			<p class="top-title">订单支付</p>
			<form action="">
				<div>
					<div class="paylf">用户姓名</div>
					<div class="payrg"></div>
				</div>
				<div>
					<div class="paylf">联系方式</div>
					<div class="payrg"></div>
				</div>
				<div>
					<div class="paylf">选择车型</div>
					<div class="payrg"></div>
				</div>
				<div>
					<div class="paylf">支付金额</div>
					<div class="payrg"></div>
				</div>
				<div>
					<div class="paylf">附加信息</div>
					<div class="payrgtextarea">
						<textarea name="" id="" rows="4"></textarea>
					</div>
				</div>
				<div class="btnpay">
					<input type="button" value="确认支付">
				</div>
			</form>
		</div>
	</div>
	<div class="fanhui">
		<a href="two-shopmall-detail.html">返回</a>
	</div>
</body>
</html>