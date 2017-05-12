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
		
		//处理参数
		foreach( $config as $k => $v )
		{
			if( trim($v) == FALSE )
				unset($config[$k]);
			else
				$config[$k] = trim($v);
		}


		if( $config )
		{
			/*订单编号搜索*/
			if( isset($config['code']) )
			{
				//订单编码规则：base64_encode(user_id+active_id+time+count+need_pay+from);
				$code = trim($config['code']);
				$where['o.code'] = array('eq',$code);
				unset($config);
			}
			/*用户名搜索*/
			if( isset($config['username']) )
			{
				$where['u.username'] = array('eq',$config['username']);
				unset($config['username']);
			}
			/*活动搜索*/
			if( isset($config['active']) )
			{
				$where['o.active_id'] = array('eq',$config['active']);
				unset($config['active']);
			}
			/*时间搜索*/
			if( isset($config['start']) || isset($config['end']) )
			{
				//不存在开始值
				if( !isset($config['start']) )
				{
					$where['o.create_time'] = array('elt',strtotime($config['end'])+60*60*24);
					unset($config['end']);	
				}
				//不存在结束值
				elseif( !isset($config['end']) )
				{
					$where['o.create_time'] = array('egt',strtotime($config['start']));
					unset($config['start']);	
				}
				else
				{
					if( strtotime($config['end']) > strtotime($config['start']) )
					{
						$where['o.create_time'] = array('BETWEEN',array(strtotime($config['start']),strtotime($config['end'])+60*60*24));	
					}
					elseif( strtotime($config['end']) == strtotime($config['start']) )
					{
						$where['o.create_time'] = array('BETWEEN',array(strtotime($config['start']),strtotime($config['start'])+60*60*24));
					}
					else
					{
						$where['o.create_time'] = array('eq','-1');
					}
					unset($config['start']);
					unset($config['end']);
				}
			}

			if( $config )
			{
				foreach( $config as $k => $v )
				{
					$where['o.'.$k] = array('eq',$v);
				}	
			}
		}
		else
		{
			$where = array('o.id'=>array('gt',0));
		}

		$data = $this->alias('o')
					 ->field("o.id,o.code,o.from,o.status,o.user_id,o.active_id,FROM_UNIXTIME(o.create_time,'%Y%m%d %H%i%s') as create_time,FROM_UNIXTIME(o.cancel_time,'%Y%m%d %H%i%s') as cancel_time,FROM_UNIXTIME(o.pay_time,'%Y%m%d %H%i%s') as pay_time,o.need_pay,o.true_pay,o.pay_type,o.count,o.price,o.ali_no,(u.username)username,(a.title)active_name")
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