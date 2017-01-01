<?php
class LoginAction extends Action {
		public function index()
	{
		$this->display('login');
	}

	public function login(){
		$data=array(
			'username'=>I('username'),
			'pwd'=>I('pwd'),
			'remember'=>I('remember')
			);
		if($data['remember']==1)
		{
			setcookie('username',$data['username'],time()+3600);
			setcookie('pwd',$data['pwd'],time()+3600);
			setcookie('remember',$data['remember'],time()+3600);

		}
		else
		{
			setcookie('username',$data['username'],time()-3600);
			setcookie('pwd',$data['pwd'],time()-3600);
			setcookie('remember',$data['remember'],time()-3600);


		}
		$res=M('admin')->where(array('username'=>$data['username']))->find();
		if($data['pwd']=$res['pwd'])
		{
			$this->success('欢迎登陆',U('Admin/index'));
		}
		else
		{
			$this->error('用户名或密码错误');
		}
	}
	public function test()
	{
		$this->display('test');
	}
	public function showadmin(){
				$this->assign('admin',$_COOKIE['admin']);

		import('ORG.Util.Page');
		$where['flag']=1;
        $count=M('admin')->where($where)->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
        $data=M("admin")->limit($limit)->where($where)->select();
        // $page->setConfig('theme','<div class="pagination">
        //     <li><a>%upPage%</a></li>
        //     <li><a>%prePage%</a></li>
        //     <li><a>%linkPage%</a></li>
        //     <li><a>%nextPage%</a></li>
        //     <li><a>%downPage%</a></li>
        //     <li><a>%end%</a></li>
        //     </div>');
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Login&a=showadmin';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Login&a=showadmin&p=">Go</a>
                </span>
            </div>
            </div>'); 
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('power-manage');
	}
	public function deleteadmin(){
				$this->assign('admin',$_COOKIE['admin']);

		$where['id']=I('id');
		$data['flag']=0;
		M('admin')->where($where)->delete();
		$this->showadmin();
		
	}
	public function addadmin(){
				$this->assign('admin',$_COOKIE['admin']);

		$data=array(
			'username'=>I('username'),
			'pwd'=>md5(I('pwd')),

			);
		if(M('admin')->add($data))
		{
			$this->success('添加成功');
		}

	}

}