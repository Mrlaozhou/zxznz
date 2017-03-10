<?php
namespace Api\Controller;
use Api\Controller\PhoneController;
// +----------------------------------------------------------------------
// | �ƶ�����ҳ���ݽӿ�
// +----------------------------------------------------------------------
// | detial:	doctor hospital active 
// +----------------------------------------------------------------------
class IndexController extends PhoneController
{
	public function index()
	{
		if( 1 )
		{
			/*********ʵ����ģ��********/
			
			//ʵ����ҽ����Ϣ
			$Dmodel = M('Doctor');
			//ʵ����ҽԺ��Ϣ
			$Hmodel = M('Hospital');
			
			/*******ҽ������*******/// 12����Ϣ
			$Ddata =  $Dmodel->alias('d')
        					 ->join("LEFT JOIN zxznz_hospital AS h ON d.hos_id=h.id")
        				     ->field('d.id,d.name,d.picture,(h.name)hos_name')
                             ->where(array(
                            	 
                            	'h.is_show'   =>  array('eq','1'),    //����ҽԺ�Ƿ���ʾ
                           		
                            		))
                        	->limit(12)
							->order('d.id desc')
                        	->select();
			/*******ҽԺ����*******/// 9 ����Ϣ
			$Hdata = $Hmodel->field('id,name,logo')
							->where(array(
								'is_show'	=>	array('eq','1'),
								'is_index'	=>	array('eq','1'),
							))
							->limit(9)
							->order('is_top desc')
							->select();
			/******��������*****/
			$doctor = array_chunk($Ddata,4);
			$hospital = array_chunk($Hdata,3);
			
			if( $Ddata && $Hdata )
			{
				echo json_encode(array(
							'status'	=>	TRUE,
							'doctor'	=>	$doctor,
							'hospital'	=>	$hospital,
							));
			}
			else
			{
				echo json_encode(array(
							'status'	=>	FALSE,
							'info'		=>	'002',
							));
			}		
		}
		else
		{
			echo json_encode(array(
							'status'	=>	FALSE,
							'info'		=>	'001',
							));
		}
	}
}