<?php
class PhoneshopAction extends WechatAction {
	public function index()
	{
		$where['flag']=1;
		$where['comefrom']=I('carsource');
		$data=M('shopinfo')->order('time desc')->where($where)->select();
		$data1=M('shopinfo')->order('price desc')->where($where)->select();
		$data3=M('lunbo')->order('time desc')->select();
		$this->assign('data',$data);
		$this->assign('data1',$data1 );
		$this->assign('data3',$data3 );
		$this->display('two-shopmall');
	}

	public function showdetail(){
		$where['id']=I('id');
		$data=M('shopinfo')->where($where)->find();
		$data2=M('picture')->where(array('goodid'=>$data['goodid']))->select();
		// var_dump($imageurl);
		$this->data=$data;
		$this->data2=$data2;
		$this->display('two-shopmall-detail');
	}

	public function showsearch()
	{
		$where['flag']=1;
		$where['combine']=array('like','%'.I('combine').'%');
		$data=M('shopinfo')->where($where)->select();
		// var_dump($data);
		$this->assign('data2',$data);
		$this->display('two-shopmall1');
	}

	// lin添加
	public function showphonemap(){
		$where['flag']=1;
		$data=M('baidulogo')->where($where)->select();
		$data1=json_encode($data);

		 $this->assign('data',$data1);
		$this->display('two-map');
	}
	public function showpay(){
		$this->display('two-pay');
	}
}