<?php
 
        $input=file_get_contents("php://input"); //解析回调数据  
         $xmlObj = simplexml_load_string($input); //提取POST数据为simplexml对象 
        // $xmlObj=simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA']);
          //$data['appid']=$xmlObj->appid;
          $transaction_id='bb'.date('YmdHis').rand(10, 99);
          $time_end=$xmlObj->time_end;
          $is_subscribe=$xmlObj->is_subscribe;
          $total_fee=$xmlObj->total_fee;
          $fee_type=$xmlObj->fee_type;
          $out_trade_no=$xmlObj->out_trade_no;//商户订单号
          $openid=$xmlObj->openid;
          $appid=$xmlObj->appid;
          $mch_id=$xmlObj->mch_id;
          $sign=$xmlObj->sign;
          $result_code=$xmlObj->result_code;
          $trade_type=$xmlObj->trade_type;
          $attach=$xmlObj->attach;

         if($result_code==SUCCESS)
         {
          $con = mysql_connect("127.0.0.1","root","Xwj78951753");
         if (!$con)
            {
            //die('Could not connect: ' . mysql_error());
            echo '连接失败';

              }
           //$a = '139988450220161118144156';
            mysql_select_db("Ucar", $con);
    
           mysql_query(" UPDATE yanzhengzhifu SET flag = '1' , is_subscribe = '$is_subscribe'
           ,  total_fee = '$total_fee' , fee_type = '$fee_type' 
           , time_end = '$time_end' , transaction_id = '$transaction_id' , appid = '$appid',
           mch_id ='$mch_id' , sign = '$sign', result_code = '$result_code', 
           attach = '$attach'  WHERE out_trade_no = '$out_trade_no'");           
              
          //mysql_query("UPDATE yanzhengzhifu SET flag ='1' WHERE out_trade_no = '$a' ");
 
                       mysql_close($con);
                       }else{

                       echo 'error';
                       }
          //             echo 'ok';

        //file_put_contents("deta.txt",$out_trade_no);
        /*  $url = "http://xwj.565tech.com/Ucar/index.php?m=Wxpay&a=notify";  
        echo "<script language='javascript' type='text/javascript'>";  
        echo "window.location.href='$url'";  
        echo "</script>";  */
