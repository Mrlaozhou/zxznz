<?php 
namespace Home\Model;

class DoctorModel
{
	public function search()
	{
		$model = D('Admin/Doctor');
		/************分页*********/
		//每页显现数
		$pagesize = 6;

		//总数
		if( $pro = session('province') )
		{
			$memcache = new \Memcache();
			$memcache->connect('127.0.0.1','11211');
			$dataAll = $memcache->get('doctor');
			$count = count($dataAll[$pro]);
			$page = new \Think\Page($count,$pagesize);

			$page -> setConfig('prev','< PREV');
			$page -> setConfig('next','NEXT >');
			
			$data['page'] = $page->show();
			$data['data'] =	array_slice($dataAll[$pro],$page->firstRow,$page->listRows);
			
		}
		else
		{
			$count = $model->alias('d')
					   ->join('LEFT JOIN zxznz_hospital AS h ON d.hos_id=h.id')
					   ->where(array(
					  	'd.is_show'	=>	array('eq','是'),
					  	'h.is_show'	=>	array('eq','1'),
					  	))
					   ->count();
		
			$page = new \Think\Page($count,$pagesize);

			$page -> setConfig('prev','< PREV');
			$page -> setConfig('next','NEXT >');

			$data['page'] = $page->show();

			$data['data'] = $model->alias('d')
								  ->join('LEFT JOIN zxznz_hospital AS h ON d.hos_id=h.id')
								  ->field('d.id,d.name,d.hos_id,d.name,d.picture,d.is_show,d.intro,h.name as hos_name')
								  ->where(array(
								  	'd.is_show'	=>	array('eq','是'),
									'h.is_show'	=>	array('eq','1'),
								  	))
								  ->limit($page->firstRow.','.$page->listRows)
								  ->order('id desc')
								  ->select();
		}

		return array(
			'page'	=>	$data['page'],
			'data'	=>	$data['data'],			/*array_chunk($data['data'],3)*/
			);
	}
}