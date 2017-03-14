<?php 
namespace Admin\Controller;
class MburlController extends BaseController
{
	public function make()
	{
		$this->display();
	}

	public function encode()
	{
		$config = I('post.');

		$url = "m=".trim($config['mm'])."&a=".trim($config['aa']);

		$result = urlencode(base64_encode(str_rot13(strrev(str_replace('=','^',trim($url))))));

		echo json_encode(array(
			'result'	=>	trim($result),
			));
	}

	public function decode()
	{
		$config = trim(I('post.michi'));
		parse_str(str_replace('^','=',strrev(str_rot13(base64_decode(urldecode(trim($config)))))),$result);

		echo json_encode(array(
			'result'	=>	$result,
			));
	}
}