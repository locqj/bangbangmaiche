<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=0.5,user-scalable=no">
	<script src='./wechatpublic/js/jquery-1.4.2.min.js'></script>
	   <script type="text/javascript">
        //调用微信JS api 支付
        function jsApiCall()
        {
            WeixinJSBridge.invoke(
                    'getBrandWCPayRequest',
                    <?php echo ($jsApiParameters); ?>,
            function(res){
                WeixinJSBridge.log(res.err_msg);
               // alert(res.err_code+res.err_desc+res.err_msg);  //这里是信息提示。可以加判断做跳转，支付成功后也都会回到这里提示信息。具体你可以参考手册里面的信息。
            }
        );
        }
        function callpay()
        {
            if (typeof WeixinJSBridge == "undefined"){
              //  alert('nul');
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                }
            }else{
                jsApiCall();
            }
        }
    </script>
	<title>定金支付</title>
	<!-- <link rel="stylesheet" href="./wechatpublic/css/shopmall.css"> -->
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
	<link rel="stylesheet" href="./wechatpublic/css/pay.css">
	<!-- <link rel="stylesheet" href="./wechatpublic/css/form.css"> -->
</head>
<body>
	<div class="container">
			<p class="pay-title">定金支付</p>
			<div>
				<!--把金额放在label标签里面 -->
				<span>请支付诚意金:￥<label></label></span>
				<p class="day"></p>
				<div class="ac-pic"><img  src="" alt="活动图片"></div>
				<div class="paynow"><button onclick="callpay()">立&nbsp;即&nbsp;支&nbsp;付</button></div>
				<div class="uperweima"><span>也可长按二维码支付</span></div>
				<div class="erweima"><img src="" alt="支付二维码"></div>	
			</div> 
	</div>
</body>
</html>