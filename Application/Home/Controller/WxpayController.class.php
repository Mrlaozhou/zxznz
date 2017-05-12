<?php 
namespace Home\Controller;
use Think\Controller;
class WxpayController extends BaseController
{

	public function init()
	{
		require_once(WX.'WxPay.NativePay.php');
		$notify = new \NativePay();
		//配置参数
		$input = new \WxPayUnifiedOrder();
		$input->SetBody($_POST['WIDsubject']);
		$input->SetAttach($_POST['order_id']);
		$input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
		$input->SetTotal_fee($_POST['WIDtotal_fee']*100);
		$input->SetTime_start(date("YmdHis"));
		$input->SetTime_expire(date("YmdHis", time() + 600));
		$input->SetGoods_tag("test");
		$input->SetNotify_url("http://www.zxznz.cn/index.php/Home/Wxpay/notify");
		//$input->SetNotify_url("http://www.zxznz.cn/Wx/wx.php");
		$input->SetTrade_type("NATIVE");
		$input->SetProduct_id($_POST['order_id']);
		$result = $notify->GetPayUrl($input);
		
		$url = urlencode($result["code_url"]);
		
		
		$this->assign(array(
			'page_title'	=>	'微信支付_智慧医美_整形指南针',
			'page_desc'		=>	PAGE_DESC,
			'id'			=>	$_POST['order_id'],
			
			'url'			=>	$url,
		));
		$this->display('Wxpay/init');
	}
	public function notify()
	{
		$xml = $GLOBALS['HTTP_RAW_POST_DATA']; //返回的xml
		//无数据，退出
		//$filename = './Wx/'.date('Y-m-d').'.txt';
		//file_put_contents($filename,'haha',FILE_APPEND);
		if( !$xml )
			exit('FAIL');
			
		$filename = './Wx/'.date('Y-m-d').'.txt';
		$str = "【".date('Y-m-d H:i:s')."】".$xml;
		//记录日志 支付成功后查看xml.txt文件是否有内容 如果有xml格式文件说明回调成功
		file_put_contents($filename,$str,FILE_APPEND); 

		$xmlArr=json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
		
		$out_trade_no	= $xmlArr['out_trade_no']; //订单号
		$total_fee		= $xmlArr['total_fee']/100; //回调回来的xml文件中金额是以分为单位的
		$result_code	= $xmlArr['result_code']; //状态
		$id				= $xmlArr['attach']; //id
		$transaction_id = $xmlArr['transaction_id'];//ali_no
		
		if( $result_code != 'SUCCESS' )
			exit('FAIL');
		$orderModel = D('Order');
		$orderModel->true_pay = $total_fee;
		$orderModel->ali_no = $transaction_id;
		$orderModel->pay_time = time(); 
		$orderModel->status = '2';
		$orderModel->pay_type = '2';
		$orderModel->where("id={$id}")->save();		
		echo 'SUCCESS';
		exit;
	}
}