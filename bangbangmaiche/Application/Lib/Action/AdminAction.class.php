
<?php
class AdminAction extends Action
{

	public function index(){
		//if($_SESSION['flag']==1){
		$id=rand(1000,9999).time();
		$this->assign('id',$id);
		

		$this->assign('admin',$_COOKIE['admin']);

		$this->display('index');
	//}

	


	}
	public function admin(){
			if($_POST){
			session_start();
			
			$_COOKIE['flag']=1;
			$data=array(
			'username'=>I('username'),
			'pwd'=>md5(I('pwd')),
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
		if($data['pwd']==$res['pwd'])
		{
			setcookie('admin',$data['username']);
			$this->admin=$data['username'];

			// $this->success('欢迎登陆',U('Admin/index'));
			 $this->display('index');
		}
		else
		{
			$this->error('用户名或密码错误');
		}
		
	}
		else
		{
			
			header("location:http://xwj.565tech.com/Ucar/index.php?m=Login");
		}

	}


	public function showeditor()
	{
				$this->assign('admin',$_COOKIE['admin']);

		$this->display('editor');
	}
}