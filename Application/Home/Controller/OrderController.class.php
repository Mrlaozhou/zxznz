<?php 
namespace Home\Controller;
use Home\Controller\BaseController;

class OrderController extends BaseController
{
	public function despeak()
	{
		if( $id = I('get.id') )
		{
			//取出信息
			$act = M('active');
			$info = $act->field('id,title,pic,intro,object,start_time,end_time,location,price')
						->find($id);
			//dump($info);
			$this->assign(array(
			'page_title'	=>	'预约详情页_智慧医美_整形指南针',
			'page_desc'		=>	PAGE_DESC,

			'info'			=>	$info,
			));

			$this->display();		
		}
		else
		{
			$this->error('系统维护,请谅解！');
		}
	}
	public function goPay()
	{
		if( IS_POST )
		{
			$config = I('post.');
		}
		else
		{
			$this->error('请求不允许！');
		}
	}
}