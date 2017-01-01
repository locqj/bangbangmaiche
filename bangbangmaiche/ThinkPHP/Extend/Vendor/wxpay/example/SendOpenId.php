<?php
require_once "WxPay.JsApiPay.php";
$tools = new JsApiPay();
$openId = $tools->GetOpenid();
echo $openId;








?>