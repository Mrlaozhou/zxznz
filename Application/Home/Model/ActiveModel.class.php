<?php 
namespace Home\Model;

class ActiveModel
{
	public function getAct()
	{
		$model = M('Active');

		$now = $model->field('id,title,pic,intro,object,start_time,end_time,location,price,join_num')
					 ->where(array(
					 	'is_show'		=>	array('eq','1'),
					 	'start_time'	=>	array('lt',time()),
					 	'end_time'	=>	array('gt',time()),
					 	))
					 ->order('start_time')
					 ->select();
		$will = $model->field('id,title,pic,intro,object,start_time,end_time,location,price,join_num')
					  ->where(array(
					 	'is_show'		=>	array('eq','1'),
					 	'start_time'	=>	array('gt',time()),
					 	))
					  ->order('start_time')
					  ->select();
		return array(
			'now'	=>	$now,
			'will'	=>	$will,
			);
	}
}