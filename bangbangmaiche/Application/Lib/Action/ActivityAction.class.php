<?php
class ActivityAction extends Action{
	public function index()
	{
		$this->display('activity');
	}
	public function sub_activity()
	{
        $url=null;
         if($_FILES ['pic'] ['name'] !== '')
        {
            $url=$this->upload();
            
        
        }
		
		$data=array(
            'name'=>I('name'),
            'theme'=>I('theme'),
            'address'=>I('address'),
            'activitytime'=>I('activitytime'),
            'descripe'=>I('content'),
            'dingjin'=>I('dingjin'),
            'imageurl'=>$url,
            'time'=>date('Y-m-d h:i:s')
            );
        if(M('activityinfo')->add($data))
        {
            $this->success('发布成功');
        }
        

	}

     public function showactivity(){
        import('ORG.Util.Page');
        $where['flag']=1;
        $count=M('activityinfo')->where($where)->count();
        $page=new page($count,10);
        $limit=$page->firstRow. ',' . $page->listRows;
        $data=M("activityinfo")->limit($limit)->where($where)->select();
        // var_dump($data);
        $this->assign('data',$data);
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Activity&a=showactivity&p=">Go</a>
                </span>
            </div>
            </div>'); 

        $this->page=$page->show();
        $this->display('ac-two');
    }

	public function upload() {
        import ( 'ORG.Net.UploadFile' );
        $upload = new UploadFile (); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->saveRule='time';
        $upload->allowExts = array (
                'jpg',
                'gif',
                'png',
                'jpeg' 
        ); // 设置附件上传类型
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
        if (! $upload->upload ()) { // 上传错误提示错误信息
            $this->error ( $upload->getErrorMsg () );
        } else { // 上传成功 获取上传文件信息
            $info = $upload->getUploadFileInfo ();
        }
       
        $data=array(
        	'imageurl'=>$info['0']['savepath'].$info['0']['savename'],
        	'time'=>date('Y-m-d h:i:s'),
        	'imagename'=>$info['0']['name'],
        	'imagesavename'=>$info['0']['savename']
        	);
      // if(M('imageinfo')->add($data))
      // {
      // 	$this->success('upload success');
      // }
        return $data['imageurl'];
        
        }

    public function deleteactivity()
    {
        $where['id']=I('id');
        $data['flag']=0;
        M('activityinfo')->where($where)->save($data);
        $this->showactivity();

    }
    public function saveactivityinfo()
    {

        $where['id']=I('id');
        $data=M('activityinfo')->where($where)->find();
        
        $this->assign('data',$data);
        $this->display('activity_edit');
    }


    public function savedb()
    {
        
        if($_FILES['image']['name']!=null)
        {
            $url=$this->upload();
        
       $data=array(
            'id'=>I('id'),
            'name'=>I('name'),
            'theme'=>I('theme'),
            'address'=>I('address'),
            'descripe'=>I('content'),
            'imageurl'=>$url,
            'dingjin'=>I('dingjin'),
            'activitytime'=>I('activitytime'),
            );
        
    }
        else
        {
            $data=array(
            'id'=>I('id'),
            'name'=>I('name'),
            'theme'=>I('theme'),
            'address'=>I('address'),
            'descripe'=>I('content'),
            'dingjin'=>I('dingjin'),
            'imageurl'=>$url,
            'activitytime'=>I('activitytime'),
            );
            

        }
        
         M('activityinfo')->where(array('id'=>$data['id']))->save($data);
        $this->showactivity();
     

        //  $data=array(
        //     'id'=>I('id'),
        //     'name'=>I('name'),
        //     'theme'=>I('theme'),
        //     'address'=>I('address'),
        //     'descripe'=>I('content'),
        //     'dingjin'=>I('dingjin'),
        //     'activitytime'=>I('activitytime'),
        //     );

        // M('activityinfo')->where(array('id'=>$data['id']))->save($data);
        // $this->showactivity();

    }
    




}