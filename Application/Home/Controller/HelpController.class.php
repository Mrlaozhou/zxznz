<?php 
namespace Home\Controller;
use Think\Controller;

class HelpController extends Controller
{
	public function index()
	{
		$this->assign(array(
			'page_title'	=>	'整形助手_智慧医美_整形指南针',
			'page_desc'	=>	PAGE_DESC,
			));
		$this->display();
	}
}