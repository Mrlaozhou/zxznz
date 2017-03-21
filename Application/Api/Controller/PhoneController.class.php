<?php 
namespace Api\Controller;
class PhoneController
{
	public function __construct()
	{
		header("Access-Control-Allow-Origin:*");
	}
	public function index()
	{
		echo 'haha';
	}
}