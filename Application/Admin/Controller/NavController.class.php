<?php 
namespace Admin\Controller;
use Think\Controller;
class NavController extends BaseController
{
	public function lst()
	{
		$model = D('Nav');
		$data = $model->field("id,name,controller,action")->select();

		$this->assign(array(
			'_page_title'		=>	'导航栏管理',
			'_page_btn_link'	=>	U('add'),
			'_page_btn_name'	=>	'添加导航栏',

			'data'				=>	$data,
			));

		$this->display();
	}
	public function add()
	{
		//实例化模型类
		$model = D('Nav');

		if( IS_POST )
		{
			if ( $model->create( I('post.'),1) ) 
			{	
				if( $model->add() !== FALSE )
				{
					$this->success('添加导航栏成功！' , U('lst') );
					exit;
				}
				else
				{
					$this->error($model->getError());
				}
			}
			else
			{
				$this->error('导航栏添加失败！！！');
			}

		}
		else
		{
			$this->assign(array(
				'_page_title'		=>	'添加导航栏',
				'_page_btn_link'	=>	U('lst'),
				'_page_btn_name'	=>	'导航栏列表',

				'ups'				=>	$ups,
				));

			$this->display();
		}
	}
	public function edit()
	{
		//实例化模型类
		$model = D('Nav');

		if( IS_POST )
		{
			if( $model->create( I('post.'),2 ) )
			{
				if( $model->save() !== False )
				{
					$this->success('修改导航栏成功！',U('lst'));
					exit;
				}
				else
				{
					$this->error($model->getError());
				}
			}
			else
			{
				$this->error($model->getError());
			}
		}
		else
		{
			$info = $model->field('id,name,controller,action,is_show')->find(I('get.id'));
			$this->assign(array(
				'_page_title'		=>	'修改导航栏',
				'_page_btn_link'	=>	U('lst'),
				'_page_btn_name'	=>	'导航栏列表',

				'info'				=>	$info,
				));
			$this->display();
		}
	}
	public function del()
	{
		//接收ID
		$id = I('get.id');

		//实例化模型类
		$model = D('Nav');

		if( $model->delete($id) !== FALSE )
		{

			echo json_encode(array('result'=>1));
		}
		else
		{
			echo json_encode(array('result'=>'删除失败！'));
		}
	}
	public function ajaxRefreshNavTop()
	{
		if( IS_AJAX )
		{
			$id = I('get.id');
			if( $id )
			{
				//实例化hospital model 
				$model = D('Nav');

				$now = time();
				
				//采用执行sql语句 非 save方法的原因的 避免调用_before_update() 之类方法
				$sql = "UPDATE zxznz_nav SET is_top={$now} WHERE id={$id}";

				if( $model->execute($sql) !== FALSE )
				{
					echo json_encode(array(
						'result'	=>	TRUE,
						));
				}
				else
				{
					echo json_decode(array(
						'result'	=>	FALSE,
						));
				}
			}			
		}
		else
		{
			echo json_encode(array(
						'result'	=>	"您好 ！！请注意素质。",
						));
		}
	}
}




