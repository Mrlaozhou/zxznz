<?php 
namespace Admin\Controller;
class SponsorController extends BaseController
{
	public function lst()
	{
		$this->assign(array(
			'_page_title'		=>	'权限管理',
				'_page_btn_link'	=>	U('add'),
				'_page_btn_name'	=>	'添加权限',
			));

		$this->display();
	}
	
}