<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
       $(function(){
       
              
            var C1=window.location.href.split("id=")[1]; //得到id=楼主
             //alert(C1);
       	
       
       	$('button a').click(function(){
       		var href=$('button a').attr('href');
                  var name=$('.username').val();
                  var money=$('.money').val();
       		href = href+ '&id1='+name+'&id2='+money+'&id3='+C1;
       		$('a').attr('href',href);
       		alert(href);
       	});
       	})
       		
     
	</script>
</head>
<body>
	 
	 姓名:<input name="username" type="text" class='username' />	
	 金额:<input name="pass" type="number" class='money' />	
	       <button>
	         <a href="http://xwj.565tech.com/Ucar/index.php?m=Wxpay&a=jsapiPay">submit</a> 
	         
	       </button>

</body>
</html>