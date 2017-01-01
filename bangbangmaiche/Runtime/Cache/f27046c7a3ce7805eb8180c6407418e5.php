<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
     <style type="text/css">
        ul {
            margin-left:10px;
            margin-right:10px;
            margin-top:10px;
            padding: 0;
        }
        li {
            width: 32%;
            float: left;
            margin: 0px;
            margin-left:1%;
            padding: 0px;
            height: 100px;
            display: inline;
            line-height: 100px;
            color: #fff;
            font-size: x-large;
            word-break:break-all;
            word-wrap : break-word;
            margin-bottom: 5px;
        }
        a {
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        text-decoration:none;
            color:#fff;
        }
        a:link{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        text-decoration:none;
            color:#fff;
        }
        a:visited{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        text-decoration:none;
            color:#fff;
        }
        a:hover{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        text-decoration:none;
            color:#fff;
        }
        a:active{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        text-decoration:none;
            color:#fff;
        }
    </style>
</head>
<body>



<script type="text/JavaScript">
//调用微信JS api 支付
function jsApiCall()
{
WeixinJSBridge.invoke(
'getBrandWCPayRequest',
<?php echo ($jsApiParameters); ?>,
function(res){
WeixinJSBridge.log(res.err_msg);
alert(res.err_code+res.err_desc+res.err_msg);
}
);
}


function callpay()
{
if (typeof WeixinJSBridge == "undefined"){
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
<script type="text/javascript">
//获取共享地址
function editAddress()
{
WeixinJSBridge.invoke(
'editAddress',
<?php echo ($editAddress); ?>,
function(res){
var value1 = res.proviceFirstStageName;
var value2 = res.addressCitySecondStageName;
var value3 = res.addressCountiesThirdStageName;
var value4 = res.addressDetailInfo;
var tel = res.telNumber;

alert(value1 + value2 + value3 + value4 + ":" + tel);
}
);
}

window.onload = function(){
if (typeof WeixinJSBridge == "undefined"){
   if( document.addEventListener ){
       document.addEventListener('WeixinJSBridgeReady', editAddress, false);
   }else if (document.attachEvent){
       document.attachEvent('WeixinJSBridgeReady', editAddress); 
       document.attachEvent('onWeixinJSBridgeReady', editAddress);
   }
}else{
editAddress();
}
};

</script>

<br/>
    <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px">1分</span>钱</b></font><br/><br/>
<div align="center">
<button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
</div>

</body>
</html>