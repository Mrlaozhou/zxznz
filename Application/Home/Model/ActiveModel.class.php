<?php 
namespace Home\Model;

class ActiveModel
{
	public function getAct()
	{
		$model = M('Active');

		$data = $model->field('id,title,pic,intro,action,start_time,end_time,location,price,join_num')
					  ->where(array(
					 	'is_show'		=>	array('eq','1'),
					 	))
					  ->order('start_time DESC')
					  ->select();
		return $data;
	}
}