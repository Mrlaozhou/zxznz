<?php 
namespace Home\Controller;
use Think\Controller;

class TestController extends Controller{
	public function index()
	{
		//echo PHP_EOL;
		// $this->display();
	}
	public function setSession()
	{
        header("Access-Control-Allow-Origin:*");
		$_SESSION['user_name'] = time();
	}
	public function getSession()
	{
        header("Access-Control-Allow-Origin:*");
        if( $_SESSION['user_name'] )
			exit(json_encode(array('result'=>$_SESSION['user_name'],'now'=>time())));
		else
			$_SESSION['user_name'] = time();
		exit(json_encode(array('result'=>$_SESSION['user_name'],'now'=>time())));
	}
}


