<?php 
namespace Admin\Controller;
class OrderController extends BaseController
{
	public function lst()
	{
		
		$this->display();
	}

	public function big()
	{
		$activeModel = D('Active');
		$active = $activeModel->field('id,title')
							  ->select();

		$this->assign(array(
			'_page_title'		=>	'订单列表',
			'_page_btn_link'	=>	U('big'),
			'_page_btn_name'	=>	'订单列表',
			'active'			=>	$active,
			));
		$this->display();
	}

	public function search()
	{
		$model = D('Order');
		$result = $model->search();

		if( $result['data'] )
		{
			echo json_encode(array(
				'data'		=>	$result['data'],
				'where'		=>	array_filter(I('post.')),
				'status'	=>	TRUE,
				'sql'		=>	$model->getlastsql(),
				));
		}
		else
		{
			echo json_encode(array(
				'status'	=>	FALSE,
				'sql'		=>	$model->getlastsql(),
				'where'		=>	array_filter(I('post.')),
				));
		}
		
		//echo json_encode(array(strtotime(I('post.start')),strtotime(I('post.end'))));
	}
}
