<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
//$wechatObj->valid();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	
            exit;
        }
    }

    public function responseMsg()
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

      	//extract post data
		if (!empty($postStr)){
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                   the best way is to check the validity of xml by yourself */
                libxml_disable_entity_loader(true);
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $openid=(string)$fromUsername;
                $toUsername = $postObj->ToUserName;
                $event=$postObj->Event;
                $keyword = trim($postObj->Content);
                $time = time();
               
       //          $textTpl = "<xml>
							// <ToUserName><![CDATA[%s]]></ToUserName>
							// <FromUserName><![CDATA[%s]]></FromUserName>
							// <CreateTime>%s</CreateTime>
							// <MsgType><![CDATA[%s]]></MsgType>
							// <Content><![CDATA[%s]]></Content>
							// <FuncFlag>0</FuncFlag>
							// </xml>";
                $newsTpl="<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[news]]></MsgType>
                            <ArticleCount>1</ArticleCount>
                            <Articles>
                            <item>
                            <Title><![CDATA[%s]]></Title>
                            <Description><![CDATA[%s]]></Description>
                            <PicUrl><![CDATA[%s]]></PicUrl>
                            <Url><![CDATA[%s]]></Url>
                            </item>
                            </Articles>
                            </xml> 
                            ";                   
				if($postObj->Event == 'CLICK' &&$postObj->EventKey=='carhave' )
                {
                    $Title='车源提供';
                    $Description='提供您的车源信息';
                    $PicUrl='http://xwj.565tech.com/Ucar/Public/Uploads/583bdb711c9ec.jpg';
                    $Url='http://xwj.565tech.com/Ucar/index.php?m=Phone&a=carhave&openid='.$openid;
                    // $url1=urlencode($url);
                    // $Url='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx5016b96d756975f3&redirect_uri='.$url1.'&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';
              		
                	$contentStr = "Welcome to wechat world!";
                	$resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $Title,$Description,$PicUrl,$Url);
                	echo $resultStr;
                }elseif($postObj->Event == 'CLICK' &&$postObj->EventKey=='suggest'){
                	$Title='客户推荐';
                    $Description='推荐客户信息';
                    $PicUrl='http://xwj.565tech.com/Ucar/Public/Uploads/581ebc4fd2cb4.jpg';
                    $Url='http://xwj.565tech.com/Ucar/index.php?m=Phone&a=suggest&openid='.$openid;
                    // $url1=urlencode($url);
                    // $Url='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx5016b96d756975f3&redirect_uri='.$url1.'&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';
                    
                    $contentStr = "Welcome to wechat world!";
                    $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $Title,$Description,$PicUrl,$Url);    
                    echo $resultStr;         
                               }
                 elseif($postObj->Event == 'CLICK' &&$postObj->EventKey=='mine')
                 {
                    $Title='我的推荐';
                    $Description='推荐客户信息';
                    $PicUrl='http://xwj.565tech.com/Ucar/Public/Uploads/1480079553.jpg';
                    $Url='http://xwj.565tech.com/Ucar/index.php?m=Phone&a=recordquery&openid='.$openid;
                    // $url1=urlencode($url);
                    // $Url='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx5016b96d756975f3&redirect_uri='.$url1.'&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';
                    
                    $contentStr = "recordquery";
                    $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $Title,$Description,$PicUrl,$Url);    
                    echo $resultStr; 

                 }


        }else {
        	echo "";
        	exit;
        }
    }
		
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

// 
/*
 | --------------------------------------------------------------------------
 | Author: Fusky  |  E-Mail: choggle2011@gmail.com  |  2016-04-20 13:02:13
 | --------------------------------------------------------------------------
 | Copyright (c) 20014-2016 http://iperson.cn   All rights reserved.
 | --------------------------------------------------------------------------
 | 
 | 微信接口对接a
 | 
 */
// define("TOKEN", "weixin");
// $wechatObj = new wechatCallbackapiTest();
// $wechatObj->valid();
// $wechatObj->responseMsg();


// class wechatCallbackapiTest
// {
//     // 验证服务器
//     public function valid()
//     {
//         $echoStr = $_GET["echostr"];
//         if($this->checkSignature()){
//             echo $echoStr;
//             exit;
//         }
//     }

//     public function responseMsg()
//     {
//         $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
//         // 红包绑定通知
//         // <xml>   
//         // <ToUserName><![CDATA[toUser]]></ToUserName>     
//         // <FromUserName><![CDATA[fromUser]]></FromUserName> 
//         // <CreateTime>1442824314</CreateTime> 
//         // <MsgType><![CDATA[event]]></MsgType>    
//         // <Event><![CDATA[ShakearoundLotteryBind]]></Event>   
//         // <LotteryId><![CDATA[lotteryid]]></LotteryId>    
//         // <Ticket><![CDATA[ticket]]></Ticket>     
//         // <Money>88</Money>   
//         // <BindTime>1442824313</BindTime> 
//         // </xml>
        
//         if (!empty($postStr)){
//             $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
//             $fromUsername = $postObj->FromUserName;
//             $toUsername = $postObj->ToUserName;
//             $keyword = trim($postObj->Content);
//             if(!$keyword){
//                 $keyword = trim($postObj->EventKey);
//             }
//             error_log("关键词是：".$keyword."\n", 3, './tpl/keyword.log');
//             $time = time();
//             $textTpl = "<xml>
//                         <ToUserName><![CDATA[%s]]></ToUserName>
//                         <FromUserName><![CDATA[%s]]></FromUserName>
//                         <CreateTime>%s</CreateTime>
//                         <MsgType><![CDATA[%s]]></MsgType>
//                         <Content><![CDATA[%s]]></Content>
//                         <FuncFlag>0</FuncFlag>
//                         </xml>";  

//              // 关键词回复                      
//             if($keyword=="text")
//             {
//                 $msgType = "text";
//                 $contentStr = "welcome";
//                 $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
//                 echo $resultStr;
//             }else if ($keyword== "news" ) {
//                 $Title = "news";
//                 $Description = "下单抽奖，礼品多多！";
//                 $PicUrl = "http://wxe.csrcbank.com/yanzhiju/Public/icon/homeBackImage.png";
//                 $Url = "http://wxe.csrcbank.com/yanzhiju/index.php?g=App&m=Slyder&a=showQRcode&openid=".$fromUsername;
//                 $this->msg_new($fromUsername, $toUsername, $Title, $Description, $PicUrl, $Url);
//                 exit;
//             }else {
//                 $msgType = "text";
//                 $contentStr = "welcome";
//                 $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
//                 echo $resultStr;
//         }
//         }else {
//             $msgType = "text";
//             $contentStr = "welcome";
//             $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
//             echo $resultStr;
//         }
//     }
        
//     private function checkSignature()
//     {
//         $signature = $_GET["signature"];
//         $timestamp = $_GET["timestamp"];
//         $nonce = $_GET["nonce"];    
                
//         $token = TOKEN;
//         $tmpArr = array($token, $timestamp, $nonce);
//         sort($tmpArr);
//         $tmpStr = implode( $tmpArr );
//         $tmpStr = sha1( $tmpStr );
        
//         if( $tmpStr == $signature ){
//             return true;
//         }else{
//             return false;
//         }
//     }

//     /**
//     * 文本消息回复
//     * @param  string $fromUsername 发送openid
//     * @param  string $toUsername   接收方微信号
//     * @param  string $contentStr   文本内容
//     * @return NULL               
//     */
//     public function msg_text($fromUsername, $toUsername, $contentStr){
//         $textTpl = "<xml>
//         <ToUserName><![CDATA[%s]]></ToUserName>
//         <FromUserName><![CDATA[%s]]></FromUserName>
//         <CreateTime>%s</CreateTime>
//         <MsgType><![CDATA[text]]></MsgType>
//         <Content><![CDATA[%s]]></Content>
//         <FuncFlag>0</FuncFlag>
//         </xml>";
//         $time = time();
//         $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);
//         echo $resultStr;            
//         exit;
//     }

//     /**
//     * 图文消息发送
//     * @param  string $fromUsername 发送 openid
//     * @param  string $toUsername   接收微信号
//     * @param  string $Title        标题
//     * @param  string $Description  描述
//     * @param  string $PicUrl       图片 URL
//     * @param  string $Url          链接地址
//     * @return NULL               
//     */
//     public function msg_new($fromUsername, $toUsername, $Title, $Description, $PicUrl, $Url){
//         $newsTpl = "<xml>
//         <ToUserName><![CDATA[%s]]></ToUserName>
//         <FromUserName><![CDATA[%s]]></FromUserName>
//         <CreateTime>%s</CreateTime>
//         <MsgType><![CDATA[news]]></MsgType>
//         <ArticleCount>1</ArticleCount>
//         <Articles>
//         <item>
//         <Title><![CDATA[%s]]></Title> 
//         <Description><![CDATA[%s]]></Description>
//         <PicUrl><![CDATA[%s]]></PicUrl>
//         <Url><![CDATA[%s]]></Url>
//         </item>
//         </Articles>
//         </xml>";
//         $time = time();
//         $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $Title, $Description, $PicUrl, $Url);
//         echo $resultStr;            
//         exit;
//     }

//     /**
//     * 图文消息发送
//     * @param  string $fromUsername 发送 openid
//     * @param  string $toUsername   接收微信号
//     * @param  string $Title        标题
//     * @param  string $Description  描述
//     * @param  string $PicUrl       图片 URL
//     * @param  string $Url          链接地址
//     * @return NULL               
//     */
//     public function msg_news($fromUsername, $toUsername, $Title, $Description, $PicUrl, $Url, $Title2, $Description2, $PicUrl2, $Url2){
//         $newsTpl = "<xml>
//         <ToUserName><![CDATA[%s]]></ToUserName>
//         <FromUserName><![CDATA[%s]]></FromUserName>
//         <CreateTime>%s</CreateTime>
//         <MsgType><![CDATA[news]]></MsgType>
//         <ArticleCount>2</ArticleCount>
//         <Articles>
//         <item>
//         <Title><![CDATA[%s]]></Title> 
//         <Description><![CDATA[%s]]></Description>
//         <PicUrl><![CDATA[%s]]></PicUrl>
//         <Url><![CDATA[%s]]></Url>
//         </item>
//         <item>
//         <Title><![CDATA[%s]]></Title> 
//         <Description><![CDATA[%s]]></Description>
//         <PicUrl><![CDATA[%s]]></PicUrl>
//         <Url><![CDATA[%s]]></Url>
//         </item>
//         </Articles>
//         </xml>";
//         $time = time();
//         $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $Title, $Description, $PicUrl, $Url, $Title2, $Description2, $PicUrl2, $Url2);
//         echo $resultStr;            
//         exit;
//     }

// }

// ?>