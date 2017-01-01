<?php
 
class WxpayAction extends Action {
    //在类初始化方法中，引入相关类库
    public function _initialize() {
        vendor('wxpay.example.WxPayJsApiPay');
        vendor('wxpay.example.phpqrcode.phpqrcode');
        vendor('wxpay.example.WxPayNativePay');
        vendor('wxpay.example.WxPayApi');
        vendor('wxpay.example.WxPayNotify'); 
        vendor('wxpay.example.log');
        ini_set('date.timezone','Asia/Shanghai');
        error_reporting(E_ERROR);
 
    }
    /*
    public function erweima(){
    
         $data['money']='1';
         $data['tranMoney']=$data['money']*'0.01';
         //获取用户openid
         $notify = new NativePay();
         $url1 = $notify->GetPrePayUrl("123456789");
          $tools = new JsApiPay();
          $openId = $tools->GetOpenid();
         //2、统一下单
          $input = new WxPayUnifiedOrder();
          $input->Setbody("test");
          $input->Setattach("test");
          $input->Setout_trade_no(WxPayConfig::MCHID.date("YmdHis"));
          $input->Settotal_fee($data['money']);
          $input->Settime_start(date("YmdHis"));
          $input->Settime_expire(date("YmdHis", time() + 600));
          $input->Setgoods_tag("test");
          $input->Setnotify_url("http://xwj.565tech.com/Ucar/wxback.php");
          $input->Settrade_type("NATIVE");
          $input->Setproduct_id("123456789");
          $result = $notify->GetPayUrl($input);
          $url2 = $result["code_url"];  
           $order = WxPayApi::unifiedOrder($input);
           //数据入库
           $db=M('yanzhengzhifu');
           $data['openid']=$openId;
           $data['name']="陈庆杰";
           $data['flag']='0';
           $data['phone']='15501523654';
           $data['good']='car';
           $data['place']="常熟";
           $data['dingjin']="100";
           $data['time_start']=date("YmdHis");
           $data['out_trade_no']=$input->Getout_trade_no();
           $data['product_id']=$input->Getproduct_id();
           $data['trade_type'] = $input->Gettrade_type();
           
           // $aaa = QRcode::png($url2);
           //$data['time_expire']=$input->Gettime_expire();
         
            $db->add($data);
           //$where['openid']=$openId;
           //$where['flag']='0';
           //$where['out_trade_no']= $out_trade_no;
          // $a=$db->where($where)->order('time_start desc')->limit('1')->save();
           //var_dump($a);
           $jsApiParameters = $tools->GetJsApiParameters($order);
           $this->jsApiParameters=$jsApiParameters;
           //$this->assign('data',$data); 
           $this->assign('url2',$url2);
           //echo $aaa;
          // $this->display('index'); 

    } */
 /*
    public function jsapiPay(){
          
        $data['money']='1';
        $data['tranMoney']=$data['money']*'0.01';
        //1、获取openid
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();
        $_SESSION['openid']=$openId;
        //2、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("定金");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis")); 
        $input->SetTotal_fee($data['money']);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://xwj.565tech.com/Ucar/wxback.php");   //支付回调地址，这里改成你自己的回调地址。
        $input->Settrade_type("JSAPI");
        $input->SetOpenid($openId);
        $_SESSION['Out_trade_no']=$input->GetOut_trade_no();
        $_SESSION['trade_type']=$input->Gettrade_type();
        $_SESSION['time_expire']=$input->Gettime_expire();
        //$input->Settime_expire(date("YmdHis"));

        $order = WxPayApi::unifiedOrder($input);
   
        //$where['openid']=$openId;
        //$where['flag']='0';
        //$where['out_trade_no']= $out_trade_no;
        // $a=$db->where($where)->order('time_start desc')->limit('1')->save();
        //var_dump($a);
        $jsApiParameters = $tools->GetJsApiParameters($order);
        $this->jsApiParameters=$jsApiParameters;
        $this->assign('data',$data); 
        $this->display('index');
          
    } 
    public function addsqldata(){
            //数据入库
            
        $db=M('yanzhengzhifu');
        $data['openid']=$_SESSION['openId'];
        $data['name']=$_POST['name'];
        $data['flag']='0';
        $data['phone']=$_POST['phone'];
        $data['good']='car';
        $data['place']="常熟";
        $data['dingjin']="100";
        $data['trade_type'] = $_SESSION['trade_type'];
        $data['time_start'] = date("YmdHis");
        $data['out_trade_no'] = $_SESSION['Out_trade_no'];
        $data['time_expire']=$_SESSION['time_expire'];
        $db->add($data);
        //echo 'ok';  

    }*/
    public function jsapiPay(){ //支付汽车定金的
        $shopinfo = M('shopinfo');
        $shopdata['id']=$_GET['id3'];
        $shopinfo = $shopinfo->where($shopdata)->select();
        //print_r($shopinfo);
        $dat['imageurl']=$shopinfo[0]['imageurl'];
        $dat['money']= $shopinfo[0]['dingjin'];
        $dat['moneyF']=$dat['money']*100;
        //1、获取openid
         
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();
       
        //2、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("定金");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis")); 
       // $input->SetTotal_fee(1);
        $input->SetTotal_fee($dat['moneyF']);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://xwj.565tech.com/Ucar/wxback.php");   //支付回调地址，这里改成你自己的回调地址。
        $input->Settrade_type("JSAPI");
        $input->SetOpenid($openId); 
        $order = WxPayApi::unifiedOrder($input); 
        $jsApiParameters = $tools->GetJsApiParameters($order);
        $db=M('yanzhengzhifu');
        $data['openid']=$openId;
        $data['name']=$_GET['id1'];
        $data['flag']='0';
        $data['phone']=$_GET['id2'];
        $data['good']=$shopinfo[0]['logo'];
        $data['place']=$shopinfo[0]['comefrom'];
        $data['dingjin']=$shopinfo[0]['dingjin'];
        $data['trade_type'] = $input->Gettrade_type();
        $data['time_start'] = date("YmdHis");
        $data['out_trade_no'] =$input->GetOut_trade_no();
        $data['time_expire']=$input->Gettime_expire();
        $db->add($data);
        $this->jsApiParameters=$jsApiParameters;
        $this->assign('data',$dat); 
        $this->display('index');
    
    }
     public function actPay(){ //支付活动定金的

    
        $actinfo = M('activityinfo');
        $actinfo = $actinfo->order('id DESC')->limit(1)->select(); //找出最近的活动 
        $dat['money']=$actinfo[0]['dingjin'];
        $dat['moneyF']=$dat['money']*100;
        $dat['imageurl']=$actinfo[0]['imageurl'];
       // $dat['tranMoney']=$dat['money']*'0.01';
        //1、获取openid
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();
       
        //2、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("定金");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis")); 
       // $input->SetTotal_fee(1);
        $input->SetTotal_fee($dat['moneyF']);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://xwj.565tech.com/Ucar/wxback.php");   //支付回调地址，这里改成你自己的回调地址。
        $input->Settrade_type("JSAPI");
        $input->SetOpenid($openId); 
        $order = WxPayApi::unifiedOrder($input); 
        $jsApiParameters = $tools->GetJsApiParameters($order);
        $db=M('yanzhengzhifu');
        $data['openid']=$openId;
        $data['name']=$_GET['id1'];
        $data['flag']='0';
        $data['phone']=$_GET['id2']; 
        $data['actName']=$actinfo[0]['theme'];
        $data['dingjin']=$actinfo[0]['dingjin'];
        $data['trade_type'] = $input->Gettrade_type();
        $data['time_start'] = date("YmdHis");
        $data['out_trade_no'] =$input->GetOut_trade_no();
        $data['time_expire']=$input->Gettime_expire();
        $db->add($data);
        $this->jsApiParameters=$jsApiParameters;
        $this->assign('data',$dat); 
        $this->display('index');
   

    }
     public function userinfo(){

       $this->display();
    }
    public function actpayinfo(){
       $this->display();
    }
    public function  asd(){
     $db=M('yanzhengzhifu');
     $data['name']=$_POST['name'];
     //echo $data['name'];
     $db->add($data);

    }
    public function test2(){
     $shopinfo=M('shopinfo');
     $shopinfo= $shopinfo->select();
     $this->assign('shopinfo',$shopinfo);
     $this->display();
    }
    public function carpayuserinfo(){
    $this->display();
    }
 
   public function test3(){
       $shopinfo = M('shopinfo');
       $shopdata['id']=$_GET['id3'];
       $shopinfo = $shopinfo->where($shopdata)->select();
       $a = $shopinfo[0]['id'];
       echo $a;
       //$a = json_encode($shopinfo);
       
        

   }
   public function testActPay(){

      $act = M('activityinfo');
      $a = $act->order('id DESC')->limit(1)->select(); //找出最近的活动
      $this->assign('data',$a[0]['id']);
      $this->display();
   }
    public function index(){
        //$this->erweima();//二维码支付
       // $this->jsapiPay(); //微信公众号支付 
        $this->display();
    }
   public function test (){
    $da  = M('activityinfo');
     $da =  $da->group('address')->order('time desc')->select();
    dump($da);
    // echo $da->getSql();
   }
   
}
    
