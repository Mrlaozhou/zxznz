<?php 
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller
{
	public function __construct()
	{
		parent::__construct();

		/******安全判断******/
		//1.是否是本域名下访问
		$KEY = substr($_SERVER['HTTP_REFERER'],0,16);
		if( $KEY !== 'http://www.z.com')
		{
			$this->error('请求不允许！');
			// echo $KEY;
			// exit;
		}
		//2.判断是否是用户
		$user_id = session('user_id');

		if( !$user_id )
		{
			//未登录
			$this->success('您好，请先登录！',U('Index/login'));
			exit;	
		}
		else
		{
			//已登录 验证信息
			$username = session('user_name');
			$user = D('User');
			$info = $user->field('id,username')
						 ->find($user_id);
			if( $info['username'] != $username )
			{
				$this->error('请求不允许！');
			}
		}
	}
}