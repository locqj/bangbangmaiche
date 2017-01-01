<?php
class PhoneAction extends WechatAction{
	public function carhave(){
		
		$openid=I('openid');
		$this->assign('openid',$openid);
		$where['openid']=$openid;
		$res=M('userwechatinfo')->where($where)->select();
		if(count($res)==0)
		{
			$accesstoken=$this->access_token();
			$url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN';
			$data1=file_get_contents($url);
			$data=json_decode($data1,true);
			M('userwechatinfo')->add($data);
		}
		$this->display('one-recommdcar');
	}
	public function sub_carhave(){
		$data=array(
			'openid'=>I('openid'),
			'source'=>I('source'),
			'phone'=>I('phone'),
			'normalprice'=>I('normalprice'),
			'lowprice'=>I('lowprice'),
			// 'price'=>I('price'),
			'main'=>I('main')
			);
		$res=M('carsource')->where($data)->select();
		if($data['source']==Null)
		{
			$this->error('名称不能为空');
		}elseif (!preg_match('/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|5|6|7|8|9]\d{8}/', $data['phone'])) {
            $this->error('输入电话格式错误');
            # code...
        }
       
        elseif(count($res)==0){
		    if(M('carsource')->add($data))
			$this->success('success');
		}
		else
		{
			$this->error('信息已存在');
		}
	}

	public function suggest(){
		// $code=I('code');
		// $url='https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx5016b96d756975f3&secret=e9bda3e8af214c104a6c69986543a8f3&code='.$code.'&grant_type=authorization_code';
		// $data=file_get_contents($url);
		// var_dump($data);
		$openid=I('openid');
		$this->assign('openid',$openid);
		$where['openid']=$openid;
		$res=M('usersuggest')->where($where)->select();
		if(count($res)==0)
		{
			
			$accesstoken=$this->access_token();
			$url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN';
			$data1=file_get_contents($url);
			$data=json_decode($data1,true);
			M('usersuggest')->add($data);
			

		}
		
		 $this->display('one-recommdbuyer');
	}

	public function sub_suggest(){
		$data=array(
			'openid'=>I('openid'),
			'username'=>I('username'),
			'userphone'=>I('userphone'),
			// 'price'=>I('price'),
			'userwant'=>I('userwant')
			);
		$res=M('usersuggest')->where($data)->select();
		if($data['username']==Null)
		{
			$this->error('名称不能为空');
		}elseif (!preg_match('/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|5|6|7|8|9]\d{8}/', $data['userphone'])) 
		{
			$this->error('输入电话格式错误');
        }
        elseif($data['userwant']==null)
        {
        	$this->error('客户需求不能为空');
        }
        elseif(count($res)==0){
		    if(M('usersuggest')->add($data)){
				$this->success('success',U("Phone/suggest"));
			}
		}
		else
		{
			$this->error('信息已存在');

		}
	}


	public function showactivity(){
		$where['flag']=1;
        $a['address']='上海';
        $b['address']='苏州';
        $c['address']='合肥';
        $d['address']='杭州';
        $e['address']='南京';
        $dat=array();
        $da =array();
        $dat["1"]=M('activityinfo')->order('time desc')->where($where)->where($a)->find();
        $dat['2']=M('activityinfo')->order('time desc')->where($where)->where($b)->find();
        $dat['5']=M('activityinfo')->order('time desc')->where($where)->where($e)->find();
        $dat['3']=M('activityinfo')->order('time desc')->where($where)->where($c)->find();
        $dat['4']=M('activityinfo')->order('time desc')->where($where)->where($d)->find();
	 
        for($i=1; $i<=count($dat); $i++)
         {
           if($dat[$i])
           {
              $da[$i] = $dat[$i];
           }else{
             
           }

         }
         
          
		$data1=M('activityinfo')->order('time desc')->where($where)->select();

		$this->assign('data',$da);
		$this->assign('data1',$data1);  
		

 		$this->display('three-active');
	}
	public function showlatest()
	{
		$where['id']=I('id');
		$data=M('activityinfo')->order('time desc')->where($where)->find();
		$this->assign('data',$data);
		$this->display('three-active-latest');

	}
	public function showbefore(){
		$where['id']=I('id');
		$data=M('activityinfo')->order('time desc')->where($where)->find();
		$this->assign('data',$data);
		$this->display('three-active-before');

	}


	public function recordquery(){
		$where['openid']=I('openid');
		$where['flag3']=1;
		$data=M('usersuggest')->where($where)->order('openid desc')->select();
		$data1=M('carsource')->where($where)->order('openid desc')->select();
		$this->assign('data',$data);
		$this->assign('data1',$data1);

		$this->display('three-recordquery');
	}
	public function userdetail()
	{
		$where['id']=I('id');
		//$where['flag3']=1;
		$data=M('usersuggest')->where($where)->find();
		
		$this->assign('data',$data);
		$this->display('three-recordquery-userdetail');

	}
	public function cardetail()
	{
		$where['id']=I('id');
		$where['flag3']=1;
		$data=M('carsource')->order('time desc')->where($where)->find();
		$this->assign('data',$data);
		$this->display('three-recordquery-cardetail');

	}

		// lin添加
	public function showpay(){
		$this->display('two-pay');
	}
	public function testcqj(){
	  $where['flag']= '1';
      $da  = M('activityinfo')->order('time desc')->group('address')->where($where)->select();
      dump($da);

	}

}