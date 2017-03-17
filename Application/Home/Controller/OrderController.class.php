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
			$info = $act->field('id,title,pic,intro,start_time,end_time,location,price,hospital')
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
	public function createOrder()
	{
		//实例化模型
		$model = D('Order');
		if( IS_POST )
		{
			if( $model->validate($model->order_validate)->create(I('post.')) )
			{
				if( ($orderId = $model->add()) !== FALSE )
				{
					// $this->redirect(U('checkPay','',FALSE), array('orderId' => $orderId), 3, '请核对之后支付...');
					$this->success('请核对之后支付...', U('checkPay?navNum=6&orderId='.$orderId),3);
				}
				else
				{
					$this->error('生成订单失败！请联系客服');
				}
			}
			else
			{
				$this->error($model->getError());
			}
		}
		else
		{
			$this->error('请求不允许！');
		}
	}
	public function checkPay()
	{
		if( $orderId = I('get.orderId') )
		{
			$model = D('Order');
			$info = $model->alias('o')
						  ->field('o.id,o.need_pay,o.count,o.price,o.user_id,o.code,a.title,a.pic,a.intro,a.hospital')
						  ->join('LEFT JOIN zxznz_active as a ON o.active_id = a.id')
						  ->where(array(
						  	'o.id'	=>	array('eq',$orderId),
						  	))
						  ->find();
			if( $info['user_id'] == session('user_id') )
			{
				$this->assign(array(
					'info'	=>	$info,
					'page_title'	=>	'核对、支付_智慧医美_整形指南针',
					'page_desc'		=>	PAGE_DESC,
					));
				$this->display();					
			}
			else
			{
				$this->error('请求不允许！C00002');
			}
		}
		else
		{
			$this->error('请求不允许！C00001');
		}
	}
	public function pay()
	{
		if( IS_POST )
		{
			$config = I('post.');
			if( $config['key'] == session('loginKey') )
			{
				//开启支付
				echo makeAlipayBtn();
				//支付判断
				//重定向
			}
			else
			{
				$this->error('请求不允许！C00012');
			}
		}
		else
		{
			$this->error('请求不允许！C00011');
		}
	}
}