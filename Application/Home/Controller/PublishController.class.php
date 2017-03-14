<?php 
namespace Home\Controller;
use Think\Controller;

class PublishController extends Controller
{
	public function index()
	{
		$model = M('Publish');

		$data = $model->field('id,title,intro,begin,action,bg,bg_type')
					  ->where(array(
					  	'is_show'	=>	array('eq','1'),
					  	))
					  ->order('begin desc')
					  ->select();
		$data = array_chunk($data,2);
		// dump($data);
		// exit;
		$this->assign(array(
			'page_title'	=>	'前沿发布_智慧医美_整形指南针',
			'page_desc'		=>	'e折整形 全国抢购',

			'data'			=>	$data,
			));
		$this->display();
	}


}