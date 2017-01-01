<?php
class WapAction extends Action{
	// public function suggest(){
	// 	// $code=I('code');
	// 	// $url='https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx5016b96d756975f3&secret=e9bda3e8af214c104a6c69986543a8f3&code='.$code.'&grant_type=authorization_code';
	// 	// $data=file_get_contents($url);
	// 	// var_dump($data);
	// 	$openid=I('openid');
	// 	$this->assign('openid',$openid);
	// 	$where['openid']=$openid;
	// 	$res=M('userwechatinfo')->where($where)->select();

		
	// 	if(count($res)==0)
	// 	{
	// 		echo 3333;
	// 		$accesstoken=$this->access_token();
	// 		$url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN';
	// 		$data1=file_get_contents($url);
	// 		$data=json_decode($data1,true);
	// 		M('userwechatinfo')->add($data);
			

	// 	}
		
	// 	 $this->display('suggest');
	// }
	// public function sub_suggest(){
	// 	$data=array(
	// 		'suggest_name'=>I('openid'),
	// 		'user_name'=>I('name'),
	// 		'phone'=>I('phone'),
	// 		'want'=>I('want')
	// 		);
	// 	$res=M('suggest')->where($data)->select();

	// 	if($data['user_name']==Null)
	// 	{
	// 		$this->error('name 不能为空');
	// 	}elseif (!preg_match('/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|5|6|7|8|9]\d{8}/', $data['phone'])) {
 //            $this->error('输入电话格式错误');
 //            # code...
 //        }elseif($data['want']==null)
 //        {
 //        	$this->error('want不能为空');
 //        }

	// 	elseif (count($res)==0) {
	// 		if(M('suggest')->add($data))
	// 		$this->success('success','http://xwj.565tech.com/Ucar/index.php?m=Wap&a=suggest');


	// 	}
		

	// 		// $this->success('success','http://xwj.565tech.com/Ucar/index.php?m=Wap&a=suggest');
	// 		// Header('Location:http://xwj.565tech.com/Ucar/index.php?m=Wap&a=suggest');
	//  }
	// public function carhave(){
		
	// 	$openid=I('openid');
	// 	$this->assign('openid',$openid);
	// 	$where['openid']=$openid;
	// 	$res=M('userwechatinfo')->where($where)->select();
		
	// 	if(count($res)==0)
	// 	{
	// 		echo 3333;
	// 		$accesstoken=$this->access_token();
	// 		$url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$accesstoken.'&openid='.$openid.'&lang=zh_CN';
	// 		$data1=file_get_contents($url);
	// 		$data=json_decode($data1,true);
	// 		M('userwechatinfo')->add($data);
			

	// 	}
	// 	$this->display('carhave');
	// }
	// public function sub_carhave(){
	// 	$data=array(
	// 		'carhave_name'=>I('openid'),
	// 		'name'=>I('name'),
	// 		'phone'=>I('phone'),
	// 		'price'=>I('price'),
	// 		'carinfo'=>I('carinfo')
	// 		);
	// 	$res=M('carhave')->where($data)->select();
	// 	if($data['name']==Null)
	// 	{
	// 		$this->error('name 不能为空');
	// 	}elseif (!preg_match('/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|5|6|7|8|9]\d{8}/', $data['phone'])) {
 //            $this->error('输入电话格式错误');
 //            # code...
 //        }elseif($data['carinfo']==null)
 //        {
 //        	$this->error('carinfo不能为空');
 //        }elseif($data['price']==null)
 //        {
 //        	$this->error('price不能为空');
 //        }elseif(count($res)==0){
	// 	    if(M('carhave')->add($data))
	// 		$this->success('success');
	// 	}
	// }
	// public function userjudge(){
	// 	$where['openid']='1';
	// 	$data1=M('userinfo')->field('tel')->where($where)->select();
	// 	$where1['phone']=$data1['0']['tel'];
	// 	$where1['flag']='1';
	// 	import('ORG.Util.Page');
	// 	$count=M('suggest')->where($where1)->count();
	// 	$page=new page($count,3);
	// 	$limit=$page->firstRow. ',' . $page->listRows;		
	// 	$data=M("suggest")->limit($limit)->where($where1)->select();
	// 	// var_dump($data);
	// 	// die;
	// 	$this->data=$data;
	// 	$this->page=$page->show();
	// 	$this->display('userjudge');
	
	// }
	// public function judgescount(){
	// 	$data=array(
	// 		'id'=>I('id'),
	// 		'usersay'=>I('content'),
	// 		'flag'=>'0'
	// 		);
	// 	if(M('suggest')->where(array('id'=>$data['id']))->save($data))
	// 	{
	// 		$this->success('谢谢你的评价',U('Wap/userjudge'));
	// 	}

	// }
	// public function adminjudge()
	// {
	// 	import('ORG.Util.Page');
	// 	$where['flag1']='1';
	// 	$count=M('suggest')->where($where)->count();
	// 	$page=new page($count,3);
	// 	$limit=$page->firstRow. ',' . $page->listRows;
		
	// 	$data=M("suggest")->limit($limit)->where($where)->select();
	// 	$this->data=$data;
	// 	$this->page=$page->show();
	// 	$this->display('adminjudge');
	// }
	// public function adminjudgescount(){
			
	// 	$data=array(
	// 		'id'=>I('id'),
	// 		'adminsay'=>I('content'),
	// 		'flag1'=>'0'
	// 		);
	// 	if(M('suggest')->where(array('id'=>$data['id']))->save($data))
	// 	{
	// 		$this->success('谢谢你的评价',U('Wap/adminjudge'));
	// 	}	
	// }


	// public function admincarhavejudge()
	// {
	// 	import('ORG.Util.Page');
	// 	$where['flag']='1';
	// 	$count=M('carhave')->where($where)->count();
	// 	$page=new page($count,3);
	// 	$limit=$page->firstRow. ',' . $page->listRows;
		
	// 	$data=M("carhave")->limit($limit)->where($where)->select();
	// 	$this->data=$data;
	// 	$this->page=$page->show();
	// 	$this->display('admincarhavejudge');
	// }
	// public function admincarhavejudgescount(){
			
	// 	$data=array(
	// 		'id'=>I('id'),
	// 		'adminsay'=>I('content'),
	// 		'flag'=>'0'
	// 		);
	// 	if(M('carhave')->where(array('id'=>$data['id']))->save($data))
	// 	{
	// 		$this->success('谢谢你的评价',U('Wap/admincarhavejudge'));
	// 	}	
	// }


	// public function access_token(){
	// $appid = 'wx5016b96d756975f3';
	// $appsecret = 'e9bda3e8af214c104a6c69986543a8f3';

 //    $tokenFile ="./Application/Tpl/Json/Accesstoken.json";//缓存文件名
 //    $result =file_get_contents($tokenFile);
 //    $result1=json_decode($result);
    
 //    if ($result1->expires_in < time() or !$result1->expires_in) {    
 //      $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx5016b96d756975f3&secret=e9bda3e8af214c104a6c69986543a8f3';
 //      $res = file_get_contents($url);
 //      $RES=json_decode($res,true);
 //      $access_token = $RES['access_token'];

 //      if($access_token) {
 //        $RES['expires_in'] = time() + 7000;
 //        $RES['access_token'] = $access_token;
 //        $fp = fopen('./Application/Tpl/Json/Accesstoken.json', "w");
 //        fwrite($fp, json_encode($RES));
 //        fclose($fp);
 //      }
 //    } else {

 //      $access_token = $result1->access_token;
 //    }
  
     
 //     return $access_token;
 //  }

  public function showuserjudge(){
  			$this->assign('admin',$_COOKIE['admin']);

  	import('ORG.Util.Page');
        $count=M('userjudge')->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge';
       $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showuserjudge&p=">Go</a>
                </span>
            </div>
            </div>'); 

        $data=M("userjudge")->limit($limit)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('cm-carsource');
}
public function showsuggest()
{
			$this->assign('admin',$_COOKIE['admin']);

	import('ORG.Util.Page');
	$where['flag1']=1;
	$where['flag2']=1;
        $count=M('usersuggest')->where($where)->count();
        $page=new page($count,10);

       // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest';
       $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsuggest&p=">Go</a>
                </span>
            </div>
            </div>');
        $data=M("usersuggest")->join('userwechatinfo On usersuggest.openid=userwechatinfo.openid')->limit($limit)->where($where)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('cm-recommd');

}

public function deletesuggest(){
	    $where['id']=I('id');
        $data['flag1']=0;

        M('usersuggest')->where($where)->save($data);
        $this->showsuggest();
}

public function savesuggestedit()
    {
    			$this->assign('admin',$_COOKIE['admin']);


        $where['id']=I('id');
        $data=M('usersuggest')->join('userwechatinfo On usersuggest.openid=userwechatinfo.openid')->where($where)->find();
        
        $this->assign('data',$data);
        $this->display('recomend_edit');
    }


    public function savesuggestdb()
    {
         $data=array(
            'id'=>I('id'),
            'scount'=>I('scount'),
            'adminjudge'=>I('adminjudge'),
            'flag2'=>0
            );
        M('usersuggest')->where(array('id'=>$data['id']))->save($data);
        $this->showsuggest();

    }





public function showsource(){
			$this->assign('admin',$_COOKIE['admin']);

	import('ORG.Util.Page');
	$where['flag1']=1;
	$where['flag2']=1;
        $count=M('carsource')->where($where)->count();
        $page=new page($count,10);
         $limit=$page->firstRow. ',' . $page->listRows;
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=showsource&p=">Go</a>
                </span>
            </div>
            </div>');
        

        $data=M("carsource")->join('userwechatinfo On carsource.openid=userwechatinfo.openid')->limit($limit)->where($where)->select();
       
        $this->assign('data',$data);

        $this->page=$page->show();
        $this->display('cm-car');

}
public function deletesource(){
	    $where['id']=I('id');
        $data['flag1']=0;
        M('carsource')->where($where)->save($data);
        
        $this->showsource();
}

public function savesourceedit()
    {
    			$this->assign('admin',$_COOKIE['admin']);


        $where['id']=I('id');
        $data=M('carsource')->join('userwechatinfo On carsource.openid=userwechatinfo.openid')->where($where)->find();
        
        $this->assign('data',$data);
        $this->display('carsource_edit');
    }


    public function savesourcedb()
    {
         $data=array(
            'id'=>I('id'),
            'scount'=>I('scount'),
            'adminsuggest'=>I('adminjudge'),
            'flag2'=>0
            );
         var_dump($data);
        M('carsource')->where(array('id'=>$data['id']))->save($data);
        $this->showsuggest();

    }

public function searchcar()
{
			$this->assign('admin',$_COOKIE['admin']);

	import('ORG.Util.Page');
        $count=M('carsource')->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
        // $module_name =' http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchucar';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchcar&p=">Go</a>
                </span>
            </div>
            </div>');
 
        $data=M("carsource")->join('userwechatinfo On carsource.openid=userwechatinfo.openid')->limit($limit)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('search-car');

}

public function searchuser(){
			$this->assign('admin',$_COOKIE['admin']);

	import('ORG.Util.Page');
        $count=M('usersuggest')->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
       
      	// $module_name =' http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser';
       $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser&p=">Go</a>
                </span>
            </div>
            </div>');


        $data=M("usersuggest")->join('userwechatinfo On usersuggest.openid=userwechatinfo.openid')->limit($limit)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('search-user');

}

//cql 添加
public function orderrecord(){
	import('ORG.Util.Page');
	 $data['flag']=1;
        $count=M('yanzhengzhifu')->where($data)->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
       
      	// $module_name =' http://xwj.565tech.com/Ucar/index.php?m=Wap&a=searchuser';
       $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Wap&a=orderrecord&p=">Go</a>
                </span>
            </div>
            </div>');
    $this->assign('admin',$_COOKIE['admin']);
    $payinfo =M('yanzhengzhifu');
   
    $payinfo = $payinfo->where($data)->limit($limit)->select();
    $this->page=$page->show();
    $this->assign('data',$payinfo);
	$this->display(); 
}

}

