<?php

header("Content-type: text/html; charset=utf-8"); 

class WechatAction extends Action{
	public function index(){
		$appid="wx0e0d6ba14bbb2722";
		$appsecret="7c3940d722ccdf9544d549cfb5615738";
		$accesstoken=$this->access_token();
		
		$prizeData=array(			 
  'button' => 
  array (
    0 => 
    array (
      'name'=>'买车帮帮',
      'sub_button'=>array (
        0=> 
        array (
          'type'=>'click',
          'name'=>'推荐朋友',
          'key'=>'suggest',                   
        ),
        1=> 
        array (
          'type'=>'click',
          'name'=>'提供车源',
          'key'=>'carhave'   
        ),
        2=>
        array(
          'type'=>'view',
          'url'=>'http://xwj.565tech.com/Ucar/index.php?m=Wxpay&a=actpayinfo',
          'name'=>'支付定金'
          ),
      ),
    ),
    1=>
    array(
      'type'=>'view',
      'url'=>'http://xwj.565tech.com/Ucar/index.php?m=Phoneshop&a=showphonemap',
      'name'=>'商城',
      'key'=>'shopmall'

      ),
    2=>
    array(
      'name'=>'我的帮帮',
      'sub_button'=>array(
        0=>
        array(
          'type'=>'click',
          // 'url'=>'http://xwj.565tech.com/Ucar/index.php?m=Phone&a=showactivity',
          'name'=>'我的推荐',
          'key'=>'mine'
          ),
        1=>
        array(
          'type'=>'view',
          'url'=>'http://xwj.565tech.com/Ucar/index.php?m=Phone&a=showactivity',
          'name'=>'活动预览',
          'key'=>'activity'

          ),



        )


      )
    
  ),

         
			);
    var_dump(json_encode($prizeData,JSON_UNESCAPED_UNICODE));
		

		$url='https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$accesstoken;
		$result=$this->curl_post($url,json_encode($prizeData,JSON_UNESCAPED_UNICODE));
	}



		/**
	 * curl_post 方法
	 * @param  [type] $url  [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function curl_post($url,$data)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POST, 1);//发送一个常规的Post请求
    	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);//Post提交的数据包
        $rv = curl_exec($curl);//输出内容
        curl_close($curl);
        var_dump($rv);
        return $rv;
        
    }

	
	public function access_token(){
	$appid = 'wx0e0d6ba14bbb2722';
	$appsecret = '7c3940d722ccdf9544d549cfb5615738';

    $tokenFile ="./Application/Tpl/Json/Accesstoken.json";//缓存文件名
    $result =file_get_contents($tokenFile);
    $result1=json_decode($result);
    
    if ($result1->expires_in < time() or !$result1->expires_in) {    
      $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx0e0d6ba14bbb2722&secret=7c3940d722ccdf9544d549cfb5615738';
      $res = file_get_contents($url);
      $RES=json_decode($res,true);
      $access_token = $RES['access_token'];

      if($access_token) {
        $RES['expires_in'] = time() + 7000;
        $RES['access_token'] = $access_token;
        $fp = fopen('./Application/Tpl/Json/Accesstoken.json', "w");
        fwrite($fp, json_encode($RES));
        fclose($fp);
      }
    } else {

      $access_token = $result1->access_token;
    }
  
     
     return $access_token;
  }

  public function getuserinfo()
  {
      $openid=I('openid');
      $accesstoken=$this->access_token();
      $url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN';
      $data1=file_get_contents($url);
      $data=json_decode($data1,true);
  }
  public function test()
  {
        //M('user')->join('ct_userinfo On ct.userinfo.userid=ct_user.id')->select();//join方法
        
  }



}