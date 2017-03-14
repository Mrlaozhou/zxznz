<?php 
namespace Admin\Model;
use Think\Model;

class NavModel extends Model 
{
	protected $insertFields = array('name','controller','action','is_show','is_top');
	protected $updateFields = array('id','name','controller','action','is_show','is_top');
	protected $_validate = array(
		array('name','require','导航栏名称不能为空！',1),
		array('controller','require','控制器不能为空！',1),
		array('action','require','方法不能为空！',1),
		);

	protected function _before_insert(&$data,$options)
	{

	}
	protected function _after_insert($data,$options)
	{

	}

	protected function _before_delete($options)
	{
		
	}
	protected function _after_delete($data,$options)
	{
	}
}