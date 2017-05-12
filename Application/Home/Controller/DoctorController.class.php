<?php
namespace Home\Controller;
use Home\Controller\DataController;

class DoctorController extends DataController
{

	public function index()
	{
		// dump(session('province'));
		// exit;
	
		$model = D('Home/Doctor');

		$data = $model->search();	

		
		$this->assign(array(
			'page_title'	=>	'专家库_智慧医美_整形指南针',
			'page_desc'		=>	PAGE_DESC,

			'data'			=>	$data['data'],
			'page'			=>	$data['page'],
			));
		$this->display();
	}

	public function detial()
	{
		$id = I('get.id');

		if( $id )
		{
			$model = D('Admin/Doctor');
			$info = $model->alias('d')
						  ->join('LEFT JOIN zxznz_hospital AS h ON d.hos_id=h.id')
						  ->field('d.id,d.hos_id,d.sex,d.name,d.title,d.duty,d.start,d.edu,d.good,d.pass,d.picture,d.is_show,d.intro,(h.name)hos_name,(h.intro)hos_intro')
						  ->where(array(
						  	'd.id'	=>array('eq',$id),
						  	))
						  ->find();
		}
		else
		{	
			// $this->error('有Bug。。。 联系老周！');
			// exit;
		}

		$this->assign(array(
			'page_title'	=>	$info['name'].'_专家详情页_智慧医美_整形指南针',
			'page_desc'		=>	PAGE_DESC,
			'page_key'		=>	$info['name'],
			
			'info'			=>	$info,
			));
		$this->display();
	}
}