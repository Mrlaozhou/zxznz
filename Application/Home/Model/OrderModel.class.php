<?php 
namespace Home\Model;
use Think\Model;
class OrderModel extends Model
{
	public $insertFields = array('code','from','status','user_id','active_id','create_time','need_pay','count','price');
	public $UploadFields = array('id','from','status','user_id','active_id','create_time','need_pay','count','cancel_time','pay_time','true_pay','pay_time','ali_no');
	//定义生成订单是的验证
	public $order_validate = array(
		//array('code','require','没有生成订单编号'),
		array('active_id','require','没有活动ID'),
		array('count','require','无数量信息'),
		);

	// 插入数据前的回调方法
    protected function _before_insert(&$data,$options) 
    {
    	//获取单价
    	$actModel = M('Active');
    	$actInfo = $actModel->field('price')->find($data['active_id']);
    	if( !$actInfo )
    	{
    		$this->error('订单信息有误！00001');
    		return FALSE;
    	}
    	$singlePrice = $actInfo['price'];

    	//生成需付
    	$data['need_pay'] 		= (int)$data['count']*$singlePrice;
    	if( $data['need_pay'] <= 0 )
    	{
    		$this->error('订单信息有误！00002');
    		return FALSE;
    	}
    	//生成来源
    	$data['from'] 	  		= '1';					//1.PC端 2.手机端3.其他'
    	//生成状态
    	$data['status']	  		= '1';					//0.无状态1.未付款挂起2.已付款7.取消
    	//生成时间
    	$data['create_time']	= time();
    	//生成订单                         //订单编码规则：base64_encode(user_id+active_id+time+count+need_pay+from);
    	$data['code'] 	   		= base64_encode(trim(session('user_id')).'-'.
                                                trim($data['active_id']).'-'.
                                                trim($data['create_time']).'-'.
                                                trim($data['count']).'-'.
                                                trim($data['need_pay']).'-'.
                                                trim($data['from']));						

    	//生成user_id
    	$data['user_id']		=	(int)session('user_id');
    	//储存单价
    	$data['price']			= $singlePrice;
    }

    // 插入成功后的回调方法
    protected function _after_insert($data,$options) 
    {

    }

}