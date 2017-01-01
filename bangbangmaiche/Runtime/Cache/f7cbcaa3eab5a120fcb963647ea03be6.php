<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>帮帮买车</title>
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./wechatpublic/css/userinfo.css">
	<link rel="stylesheet" type="text/css" href="./wechatpublic/css/public.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
       $(function(){
       	var name=$('.username').val();
       	var money=$('.money').val();
       	var href=$('button a').attr('href');
       //	alert(href);
       	$('button').click(function(){
       		var href = href+ '&id1='+name+'&id2='+money;
       		$('a').attr(href);
       		alert(href);
       	});
       	})
       		
     
	</script>
</head>
<body style="background:url(./wechatpublic/img/bg4.jpg) center center">
	 <p class="title">用户信息</p>
	 <div class="container">
	 	<div>
	 		<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</span>
	 		<input name="username" type="text" class='username' placeholder="请输入用户名"/>	
	 	</div>
	 	<div>
	 		<span>联系方式:</span>
	 		<input name="pass" type="number" class='money' placeholder="请输入联系方式" />
	 	</div>
	    <div style="width: 100%;text-align: center">
	      <!-- <button> -->
	         <a href="http://xwj.565tech.com/Ucar/index.php?m=Wxpay&a=index">提&nbsp;交</a>
	       <!-- </button> -->
	    </div>
	 </div>
	 

</body>
</html>