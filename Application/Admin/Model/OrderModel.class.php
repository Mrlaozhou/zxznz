<?php  
namespace Admin\Model;
use Think\Model;

class OrderModel extends Model
{
	public $insertFields = array();
	public $updateFields = array('id','code','from','status');

	public function search()
	{
		//接受页数
		$page = I('get.p') ? I('get.p') : 1;
		$pagesize = 50;
		$start = ($page-1)*$pagesize;

		//接受条件参数
		$where = array();
		$config = I('post.');
		$config = array_filter($config);

		//dump($config);


		if( $config )
		{
			//用户名搜索
			if( isset($config['username']) )
			{
				
				$where['u.username'] = array('eq',$config['username']);
				unset($config['username']);
			}
			//活动搜索
			if( isset($config['active']) )
			{
				$where['o.active_id'] = array('eq',$config['active']);
				unset($config['active']);
			}

			foreach( $config as $k => $v )
			{
				$where['o.'.$k] = array('eq',$v);
			}

			// dump($where);
			// exit;
		}
		else
		{
			$where = array('o.id'=>array('gt',0));
		}

		$data = $this->alias('o')
					 ->field('o.id,o.code,o.from,o.status,o.user_id,o.active_id,o.create_time,o.cancel_time,o.pay_time,o.need_pay,o.true_pay,o.pay_type,o.count,o.price,o.ali_no,(u.username)username,(a.title)active_name')
					 ->join('LEFT JOIN zxznz_user u ON u.id = o.user_id')
					 ->join('LEFT JOIN zxznz_active a ON a.id = o.active_id')
					 ->where($where)
					 ->order('o.id desc')
					 ->select();

		$activeModel = D('Active');
		$active = $activeModel->field('id,title')
							  ->select();
		return array(
			'data'		=>	$data,
			'active'	=>	$active
			);
	}
}