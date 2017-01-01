<?php
class JssdkAction extends WechatAction{
	private $appId='wx5016b96d756975f3';
	private $appSecret='e9bda3e8af214c104a6c69986543a8f3';

 	public function index(){
		$signPackage=$this->getSignPackage();
		// var_dump($signPackage);
		$this->assign('signPackage',$signPackage);
		$this->display('index');

	}
	  public function getSignPackage() {
    $jsapiTicket = $this->getJsApiTicket();

    // 注意 URL 一定要动态获取，不能 hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    var_dump($signPackage);
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

  private function getJsApiTicket() {
  	$accessToken = $this->access_token();
    // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
    $jsticketFile ="./Application/Tpl/Json/jsapi_ticket.json";//缓存文件名
    $result =file_get_contents($jsticketFile);
    $result1=json_decode($result);
    
    if ($result1->expires_in < time() or !$result1->expires_in) {    
      $url = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token='.$accessToken;
      $res = file_get_contents($url);
      $RES=json_decode($res,true);
      $ticket = $RES['ticket'];

      if($ticket) {
        $RES['expires_in'] = time() + 7000;
        $RES['ticket'] = $ticket;
        $fp = fopen('./Application/Tpl/Json/jsapi_ticket.json', "w");
        fwrite($fp, json_encode($RES));
        fclose($fp);
      }
    } else {

      $ticket = $result1->ticket;
    }
  
     
     return $ticket;
  }




  //   $data = json_decode($this->get_php_file("http://xwj.565tech.com/Ucar/jssdk/jsapi_ticket.php"));
  //   if ($data->expire_time < time()) {
  //     $accessToken = $this->access_token();
  //     // 如果是企业号用以下 URL 获取 ticket
  //     // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
  //     $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
  //     $res = json_decode($this->httpGet($url));
  //     $ticket = $res->ticket;
  //     if ($ticket) {
  //       $data->expire_time = time() + 7000;
  //       $data->jsapi_ticket = $ticket;
  //       $this->set_php_file("http://xwj.565tech.com/Ucar/jssdk/jsapi_ticket.php", json_encode($data));
  //     }
  //   } else {
  //     $ticket = $data->jsapi_ticket;
  //   }

  //   return $ticket;
  // }

  // private function getAccessToken() {
  //   // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
  //   $data = json_decode($this->get_php_file("http://xwj.565tech.com/Ucar/jssdk/access_token.php"));
  //   if ($data->expire_time < time()) {
  //     // 如果是企业号用以下URL获取access_token
  //     // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
  //     $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
  //     $res = json_decode($this->httpGet($url));
  //     $access_token = $res->access_token;
  //     if ($access_token) {
  //       $data->expire_time = time() + 7000;
  //       $data->access_token = $access_token;
  //       $this->set_php_file("http://xwj.565tech.com/Ucar/jssdk/access_token.php", json_encode($data));
  //     }
  //   } else {
  //     $access_token = $data->access_token;
  //   }
  //   return $access_token;
  // }

  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
    // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }

  private function get_php_file($filename) {
    return trim(substr(file_get_contents($filename), 15));
  }
  private function set_php_file($filename, $content) {
    $fp = fopen($filename, "w");
    fwrite($fp, "<?php exit();?>" . $content);
    fclose($fp);
  }
}




// 	public function getSignPackage() {
//     $jsapiTicket = $this->getJsApiTicket();

//     // 注意 URL 一定要动态获取，不能 hardcode.
//     $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
//     $url = "http://xwj.565tech.com/Ucar/Application/Tpl/Jssdk/index.html";
//     $timestamp = time();
//     $nonceStr = $this->createNonceStr();

//     // 这里参数的顺序要按照 key 值 ASCII 码升序排序
//     $string = "jsapi_ticket=".$jsapiTicket."&noncestr=".$nonceStr."&timestamp=".$timestamp."&url=".$url;
//     var_dump($string);
//     $signature = sha1($string);
//     var_dump($signature);

//     $signPackage = array(
//       "appId"     => $this->appid,
//       "nonceStr"  => $nonceStr,
//       "timestamp" => $timestamp,
//       "url"       => $url,
//       "signature" => $signature,
//       "rawString" => $string
//     );
    
//     return $signPackage; 
//   }

//   private function createNonceStr($length = 16) {
//     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//     $str = "";
//     for ($i = 0; $i < $length; $i++) {
//       $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
//     }
//     return $str;
//   }

//   private function getJsApiTicket() {
//     // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
//     $data = json_decode($this->get_php_file("http://xwj.565tech.com/Ucar/jssdk/jsapi_ticket.php"));
//     if ($data->expire_time < time()) {
//       $accessToken = $this->access_token();
//       // 如果是企业号用以下 URL 获取 ticket
//       // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
//       $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=".$accessToken;
//       $res = json_decode($this->httpGet($url));
//       var_dump($res);
//       $ticket = $res->ticket;
//       if ($ticket) {
//         $data->expire_time = time() + 7000;
//         $data->jsapi_ticket = $ticket;
//         $this->set_php_file("http://xwj.565tech.com/Ucar/jssdk/jsapi_ticket.php", json_encode($data));
//       }
//     } else {
//       $ticket = $data->jsapi_ticket;
//     }
//     // var_dump($accessToken);
//     // var_dump($ticket);

//     return $ticket;
//   }

//   // private function getAccessToken() {
//   //   // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
//   //   $data = json_decode($this->get_php_file("http://xwj.565tech.com/Ucar/jssdk/access_token.php"));
//   //   if ($data->expire_time < time()) {
//   //     // 如果是企业号用以下URL获取access_token
//   //     // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
//   //     $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
//   //     $res = json_decode($this->httpGet($url));
//   //     $access_token = $res->access_token;
//   //     if ($access_token) {
//   //       $data->expire_time = time() + 7000;
//   //       $data->access_token = $access_token;
//   //       $this->set_php_file("http://xwj.565tech.com/Ucar/jssdk/access_token.php", json_encode($data));
//   //     }
//   //   } else {
//   //     $access_token = $data->access_token;
//   //   }
//   //   return $access_token;
//   // }

//   private function httpGet($url) {
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($curl, CURLOPT_TIMEOUT, 500);
//     // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
//     // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
//     curl_setopt($curl, CURLOPT_URL, $url);

//     $res = curl_exec($curl);
//     curl_close($curl);

//     return $res;
//   }

//   private function get_php_file($filename) {
//     return trim(substr(file_get_contents($filename), 15));
//   }
//   private function set_php_file($filename, $content) {
//     $fp = fopen($filename, "w");
    // fwrite($fp, "<?php exit();
// 
  
