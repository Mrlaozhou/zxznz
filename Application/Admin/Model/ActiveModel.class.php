<?php 
namespace Admin\Model;
use Think\Model;
class ActiveModel extends Model
{
	public $insertFields = array('title','pic','intro','hospital','start_time','end_time','location','price','join_num','create_time','is_show','status','detial','action');
    public $updateFields = array('id','title','pic','intro','hospital','start_time','end_time','location','price','join_num','create_time','is_show','status','detial','action');

	public $_validate = array(
		array('title','require','活动标题不能为空',1),
		array('location','require','地址不能为空',1),
		array('start_time','require','未设置开始时间',1),
		array('end_time','require','未设置结束时间',1),
		array('intro','require','活动介绍不能为空',1),
		);
	public $_auto = array(
		array('start_time','strtotime',3,'function'),
		array('end_time','strtotime',3,'function'),
		array('create_time','time',1,'function'),
		);

    // 插入数据前的回调方法
    protected function _before_insert(&$data,$options) 
    {
    	//数据处理
    	$data['intro'] = preventTags(trim($data['intro']));
		//$data['intro'] = trim($data['intro']);
        /**********上传页面***********/
        if( isset( $_FILES['html'] ) && $_FILES['html']['error'] === 0 )
        {       
            //实例化上传类
            $upload = new \Think\Upload();

            //配置
            $upload->maxSize = 8*1024*1024;
            $upload->exts = array('html');
            $upload->rootPath = APP_PATH.'Home/View/';
            $upload->savePath = 'Active/';
            $upload->autoSub  = FALSE;
            $upload->saveName = $data['action'];
            $upload->replace = TRUE;

            //上传
            $info = $upload->uploadOne( $_FILES['html'] );

            //判断
            if( !$info )
            {
                $this->error = $upload->getError();
                return FALSE;           
            }
        }
        //上传图片压缩包
        if( isset( $_FILES['imgRar'] ) && $_FILES['imgRar']['error'] === 0 )
        {
            //实例化上传类
            $upload = new \Think\Upload();
            //配置
            $upload->maxSize = 8*1024*1024;
            $upload->exts = array('rar');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = 'Active_img/';
            $upload->autoSub  = FALSE;
            $upload->saveName = $data['action'];
            $upload->replace = TRUE;
            //上传
            $info = $upload->uploadOne( $_FILES['imgRar'] );

            //判断--如果上传成功
            if( !$info )
            {
                $this->error = $upload->getError();
                return FALSE;
            }
            //上传成功、解压压缩包
            UnRar(__UPLOADS__.'Active_img/'.$data['action'].'.rar',__UPLOADS__.'Active_img/',TRUE);
        }
    	/**********上传图片***********/
    	if( isset( $_FILES['pic'] ) && $_FILES['pic']['error'] === 0 )
    	{
    		//实例化上传类
    		$upload = new \Think\Upload();
    		//配置
    		$upload->maxSize = 8*1024*1024;
    		$upload->exts = array('jpg','png','gif','jpeg');
    		$upload->rootPath = './Public/Uploads/';
    		$upload->savePath = 'Active/';
    		//上传
    		$info = $upload->uploadOne( $_FILES['pic'] );

    		//判断
    		if( $info )
    		{
    			//路径
    			$data['pic'] = $info['savepath'].$info['savename'];

    		}else
    		{
    			$this->error = $upload->getError();
    			return FALSE;
    		}
    	}
    }
    // 插入成功后的回调方法
    protected function _after_insert($data,$options) {}


    // 更新数据前的回调方法
    protected function _before_update(&$data,$options) 
    {
        $data['intro'] = preventTags(trim($data['intro']));
		//$data['intro'] = trim($data['intro']);
        /************处理页面************/
        //判断行为是否该变
        $info = $this->field('action')
                       ->find($options['where']['id']);
        $action = $info['action'];
        if( $data['action'] == $action )
        {
            //没有改变 判断是否有上传文件
            if( isset( $_FILES['html'] ) && $_FILES['html']['error'] === 0 )
            {       
                //实例化上传类
                $upload = new \Think\Upload();

                //配置
                $upload->maxSize = 8*1024*1024;
                $upload->exts = array('html');
                $upload->rootPath = APP_PATH.'Home/View/';
                $upload->savePath = 'Active/';
                $upload->autoSub  = FALSE;
                $upload->saveName = $data['action'];
                $upload->replace = TRUE;

                //上传
                $info = $upload->uploadOne( $_FILES['html'] );

                //判断
                if( !$info )
                {
                    $this->error = $upload->getError();
                    return FALSE;           
                }
            }
        }
        else
        {
            //行为改变  有文件上传
            if( isset( $_FILES['html'] ) && $_FILES['html']['error'] === 0 )
            {
                //实例化上传类
                $upload = new \Think\Upload();

                //配置
                $upload->maxSize = 8*1024*1024;
                $upload->exts = array('html');
                $upload->rootPath = APP_PATH.'Home/View/';
                $upload->savePath = 'Active/';
                $upload->autoSub  = FALSE;
                $upload->saveName = $data['action'];
                $upload->replace = TRUE;

                //上传
                $info = $upload->uploadOne( $_FILES['html'] );

                //判断
                if( !$info )
                {
                    $this->error = $upload->getError();
                    return FALSE;           
                }
                else
                {
                    @unlink("./Application/Home/View/Active/{$action}.html");
                }
            }
            else
            {
                //没有文件上传 ===> 修改原始文件名
                @rename("./Application/Home/View/Active/{$action}.html","./Application/Home/View/Active/{$data['action']}.html");
            }

            //行为改变  没有.rar
            if( !isset( $_FILES['imgRar'] ) || $_FILES['imgRar']['error'] != 0)
            {
                @rename(__UPLOADS__.'Active_img/'.$action,__UPLOADS__.'Active_img/'.$data['action']);
            }
        }
       /************处理图片文件夹************/
       if( isset( $_FILES['imgRar'] ) && $_FILES['imgRar']['error'] === 0 )
        {
            //删除之前解压的文件夹
            remove_dir(__UPLOADS__.'Active_img/'.$action);

            //实例化上传类
            $upload = new \Think\Upload();
            //配置
            $upload->maxSize = 8*1024*1024;
            $upload->exts = array('rar');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = 'Active_img/';
            $upload->autoSub  = FALSE;
            $upload->saveName = $data['action'];
            //上传
            $info = $upload->uploadOne( $_FILES['imgRar'] );

            //判断--如果上传成功
            if( !$info )
            {
                $this->error = $upload->getError();
                return FALSE;
            }
            //上传成功、解压压缩包
            UnRar(__UPLOADS__.'Active_img/'.$data['action'].'.rar',__UPLOADS__.'Active_img/',TRUE);
        }
        /**********上传图片***********/
        if( isset( $_FILES['pic'] ) && $_FILES['pic']['error'] === 0 )
        {
            //删除磁盘上的旧照片
            $info = $this->field('pic')->find($options['where']['id']);
            @unlink(__UPLOADS__.$info['pic']);

            //实例化上传类
            $upload = new \Think\Upload();
            //配置
            $upload->maxSize = 8*1024*1024;
            $upload->exts = array('jpg','png','gif','jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = 'Active/';
            //上传
            $info = $upload->uploadOne( $_FILES['pic'] );

            //判断--如果上传成功
            if( $info )
            {
                //路径
                $data['pic'] = $info['savepath'].$info['savename'];

                //修改图片尺寸
                //changeImage($img,$path,$width,$height,$saveName,$type = 6)
                // $oldPic = $data['pic'];
                // $data['pic'] = changeImage(__UPLOADS__.$oldPic,__UPLOADS__,550,300,$oldPic);
            }else
            {
                $this->error = $upload->getError();
                return FALSE;
            }
        }
    }
    // 更新成功后的回调方法
    protected function _after_update($data,$options) {} 

    // 删除数据前的回调方法
    protected function _before_delete($options) 
    {
        //获取磁盘图片路径
        $info = $this->field('pic,action')->find($options['where']['id']);

        //删除活动图片
        @unlink(__UPLOADS__.$info['pic']);
        //删除html文件
        @unlink("./Application/Home/View/Active/{$info['action']}.html");
        //删除图片文件夹
        remove_dir(__UPLOADS__.'Active_img/'.$info['action']);
    }    
    // 删除成功后的回调方法
    protected function _after_delete($data,$options) {}

    public function search()
    {
    	//接受参数
		//参数格式为 index.php/w/id-ep-X/desc/id-des
		//where 条件
    	$w = I('get.w') ? explode( '-', I('get.w')) : null;
    	if( !empty($w) )
    	{
    		$where[$w[0]] = array("{$w[1]}",$w[2]);
    	}
    	else
    	{
    		$where = '1';
    	}
    	//desc 条件
    	$desc = I('get.desc') ? explode(' ',I('get.desc')) : 'id desc';

    	//分页
    	$count = $this->count();

    	$pagesize = 8;

    	$page = new \Think\Page($count,$pagesize);
    	$pageString = $page->show();

    	$data = $this->field('id,title,pic,start_time,end_time,location,join_num,hospital,action,is_show,status,create_time,price,detial')
    				 ->where($where)
    				 ->limit($page->firstRow.','.$page->listRows)
    				 ->order($desc)
    				 ->select();

    	return $data = array(
    		'page'		=>	$pageString,
    		'data'		=>	$data,
    		);
    }
}