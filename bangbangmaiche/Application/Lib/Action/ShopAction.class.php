<?php
class ShopAction extends Action{
	public function index(){
                $this->assign('admin',$_COOKIE['admin']);

		$this->display('shop');
	}
	public function sub_shop()
	{
                $this->assign('admin',$_COOKIE['admin']);

		
		import ( 'ORG.Net.UploadFile' );
        $upload = new UploadFile (); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->saveRule=uniqid;
        $upload->allowExts = array (
                'jpg',
                'gif',
                'png',
                'jpeg' 
        ); // 设置附件上传类型
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
        if (! $upload->upload ()) { 
        // 上传错误提示错误信息
            $this->error ( $upload->getErrorMsg () );
        } else { // 上传成功 获取上传文件信息
            $info = $upload->getUploadFileInfo ();
            
        }
        for($i=0;$i<count($info);$i++)
        {
            $url[$i]=$info[$i]['savepath'].$info[$i]['savename'];
        }

        return $url;
        // var_dump($info);
   //      $data=array(
			// 'theme'=>I('theme'),
			// 'address'=>I('address'),
			// 'activitytime'=>I('activitytime'),
			// 'descripe'=>I('descripe'),
			// 'time'=>date('Y-m-d H:i:s',time()),
			// );
		//if(M('activityinfo')->add($data))
		// {
		// 	$this->success('fabu success');
		// }
       
   //      $data=array(
   //      	'imageurl'=>$info['0']['savepath'].$info['0']['savename'],
   //      	'imagename'=>$info['0']['name'],
   //      	'imagesavename'=>$info['0']['savename'],
   //      	'title'=>I('title'),
			// 'price'=>I('price'),
			// 'descripe'=>I('descripe'),
			// 'time'=>date('Y-m-d H:i:s',time()),
   //      	);
   //      // $response=$data['imageurl'];
   //      // echo json_encode($response);

   //      return $data['imageurl'];
      // if(M('imageinfo')->add($data))
      // {
      // 	$this->success('upload success');
      // }        
    }
    public function sub_shopinfo()
    {
        // $a=$this->sub_shop();
        // var_dump($a);
        
                $this->assign('admin',$_COOKIE['admin']);

        $url=null;
         if($_FILES)
        {
            $url=$this->sub_shop();
            
        
        }
          
        
           
            $data=array(
            'goodid'=>I('shopid'),
            'comefrom'=>I('comefrom'),
            'logo'=>I('logo'),
            'size'=>I('size'),
            'color'=>I('color'),
            //'price'=>I('price'),
            'time'=>date("Y-m-d H:i:s"),
            'combine'=>I('comefrom').I('logo').I('size').I('color').I('price'),
            'imageurl'=>$url['0'],
             'dingjin'=>I('orderpay')
            );
            $data1['goodid']=I('shopid');
            foreach ($url as $key => $value) {
                $data1['imageurl']=$value;
                M('picture')->add($data1);


                # code...
            }

       
            
            
        if(M('shopinfo')->add($data))
        {        
         $this->success('插入成功');
        }
       
    
    }

    public function uppicture()
    {
        if($_FILES ['pic'] ['name'] !== '')
        {
            $url=$this->sub_shop();
        }else
        {
            $url=0;
        }
        return $url;

    }

    public function showshopinfo(){
                $this->assign('admin',$_COOKIE['admin']);

        import('ORG.Util.Page');
        $where['flag']=1;
        $count=M('shopinfo')->where($where)->count();
        $page=new page($count,5);
        $limit=$page->firstRow. ',' . $page->listRows;
        
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo&p=">Go</a>
                </span>
            </div>
            </div>');

        $data=M("shopinfo")->limit($limit)->order('time desc')->where($where)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('shop-show');
    }
    public function deleteshopinfo()
    {
        $where['id']=I('id');
        $data['flag']=0;
        M('shopinfo')->where($where)->save($data);
        $this->showshopinfo();

    }

    public function saveshopinfo()
    {
                $this->assign('admin',$_COOKIE['admin']);


        $where['id']=I('id');
        $data=M('shopinfo')->where($where)->find();
        $this->admin=$adminroot;

        $this->assign('data',$data);
        $this->display('edit');

    }
    public function savedb()
    {
                $this->assign('admin',$_COOKIE['admin']);

         $data=array(
            'id'=>I('id'),
            'comefrom'=>I('comefrom'),
            'logo'=>I('logo'),
            'size'=>I('size'),
            'color'=>I('color'),
            'price'=>I('price'),
            // 'imageurl'=>$url,
            );
         M('shopinfo')->where(array('id'=>$data['id']))->save($data);
         $this->showshopinfo();


    }

    public function pic()
    {
         $url=null;
         if($_FILES)
        {
            $url=$this->sub_shop();
        
        }

        $data=array(
            'goodid'=>I('goodid'),
            'imageurl'=>$url
            );
        M('picture')->add($data);
        $response=$url;
     echo json_encode($response);
    }

    // 添加 lin
    public function showmap(){
                $this->assign('admin',$_COOKIE['admin']);
    import('ORG.Util.Page');
        $where['flag']=1;
        $count=M('baidulogo')->where($where)->count();
        $page=new page($count,5);
        $limit=$page->firstRow. ',' . $page->listRows;
        
        // $module_name ='http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showshopinfo';
        $page->setConfig('theme','<div class="pagination">
            <span style="float:left">共<span class="totaljilu" style="color:#353E43;font-weight:bold;"> %totalRow%</span> %header%  </span>
            <span class="nowpage"> 当前%nowPage%/%totalPage% 页 </span>     
            <div style=" float:right"> 
                <span class="prenext"> %upPage%  </span>
                <span class="prenext">%downPage% </span>
                <span class="info">跳转到<input name="page" style="border:1px solid #ccc;width:30px;" type="text" id="z">页
                    <a class="tiaozhuan" href="http://xwj.565tech.com/Ucar/index.php?m=Shop&a=showmap&p=">Go</a>
                </span>
            </div>
            </div>');


        $data=M("baidulogo")->limit($limit)->order('time desc')->where($where)->select();
        $this->assign('data',$data);
        $this->page=$page->show();
        $this->display('map');
    }
    //后台支付订单
    public function showpayorder(){
                $this->assign('admin',$_COOKIE['admin']);
                $datapay = M('paydingjin');
                $datashow=$datapay->select();
                $this->assign('data',$datashow);
                $this->display('payorder');
                
               
    }
    
    public function payorder(){
                $datapay = M('paydingjin');
                $data['dingjin']=I('post.paymoney');
                $data['time']=I('post.paytime');
                $data['image']='./Public/Uploads/'.I('post.payimg');
                $datapay->add($data); 
                //$this->showpayorder();
                //$this->assign('data',$datashow);
                // $this->redirect("Shop/showpayorder");
               // $this->display('Shop/showpayorder');
                  $this->success("添加成功");
    }
       public function delpaydingjininfo()
    {
        $where['id']=I('id');
        //$data['flag']=0;
        M('paydingjin')->where($where)->delete();
        $this->showpayorder();

    }
//
    public function showlunbo(){
                $this->assign('admin',$_COOKIE['admin']);

         $this->display('addlunbopic');
    }

    public function lunbopic()
    {
        $this->assign('admin',$_COOKIE['admin']);

        $url=null;
         if($_FILES)
        {
            $url=$this->sub_shop();
            
        
        }
          
    
            $data1['time']=date("Y-m-d H:i:s");

            foreach ($url as $key => $value) {
                $data1['imageurl']=$value;
                M('lunbo')->add($data1);
                $flag=1;


               
            }
            if($flag)
            {
                $this->success('上传成功');
            }
           

            

       
            
            
        

    }
    public function map(){
        //$url=null;
         if($_FILES)
        {
            $url=$this->sub_shop();
        }
        $data=array(
            'city'=>I('city'),
            'carsource'=>I('carsource'),
            'imageurl'=>$url['0'],
            'pingpai'=>I('pingpai'),
            'point'=>I('zuobiao'),
            'time'=>time(),
            );
         // var_dump($data);
        if(M('baidulogo')->add($data))
        {
            $this->success('提交成功',U('Shop/showmap'));
        }

    }
    public function mapshow(){
       $data= M('baidu')->order('time desc')->select();
       $this->data=$data;
       $this->display('map');
    }
    public function update(){
        $id=I('id');
        $response=M('baidulogo')->where(array('id'=>$id))->find();
        $this->data=$response;
        $this->display('mapedit');
    }
    public function saveupdate(){
        // var_dump($_FILES);
        // die();
         if($_FILES['image']['name']!=null)
        {
            $url=$this->sub_shop();
        
        $data=array(
            'id'=>I('id'),
            'city'=>I('city'),
            'carsource'=>I('carsource'),
            'imageurl'=>$url['0'],
            'pingpai'=>I('pingpai'),
            'point'=>I('zuobiao'),
            'time'=>time(),
            );
        
    }
        else
        {
             $data=array(
            
            'city'=>I('city'),
            'carsource'=>I('carsource'),
            //'imageurl'=>$url['0'],
            'pingpai'=>I('pingpai'),
            'point'=>I('zuobiao'),
            'time'=>time(),
            );
            

        }
        $id=I('id');
     
        
         
        $where['id']=$id;
        
        if(M('baidulogo')->where($where)->save($data))
        {
            $this->success('提交成功',U('Shop/showmap'));
        }

    }

    public function deletemap(){
        $data['flag']=0;
        $data['id']=I('id');
        if(M('baidulogo')->where(array('id'=>$data['id']))->save($data))
        {
            $this->success('删除成功',U('Shop/showmap'));
        }
    }

    
}