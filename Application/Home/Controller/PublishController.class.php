<?php 
namespace Home\Controller;
use Think\Controller;

class PublishController extends Controller
{
	public function index()
	{
		/**///获取发布信息
		$model = M('Publish');
		$data = $model->field('id,title,intro,begin,action,bg,bg_type')
					  ->where(array(
					  	'is_show'	=>	array('eq','1'),
					  	))
					  ->order('begin desc')
					  ->select();

		/**///获取活动信息

		$actModel = D('Active');
		$actData = $actModel->getAct();
		// dump($actData);
		// exit;
		$data = array_merge( $actData, $data );

		/**///按照时间信息排序
		$data = $this->_index_data_sort_by_time( $data );


		$data = array_chunk($data,2);
		// dump($data);
		// exit;
		$this->assign(array(
			'page_title'	=>	'前沿发布_智慧医美_整形指南针',
			'page_desc'		=>	PAGE_DESC,

			'data'			=>	$data,
			));
		$this->display();
	}

	/**
	 * [_index_data_sort_by_time description]
	 * @param  [type]  $data [description]
	 * @param  boolean $desc [description]
	 * @return [type]        [description]
	 */
	private function _index_data_sort_by_time( $data = null, $desc = TRUE ) 
	{
		/**///接受数据
		if ( $data === null )
			return FALSE;
		//同步字段begin
		$change = array();
		foreach( $data as $k => $v )
		{
			if( isset( $v['price'] ) )
			{
				$v['begin'] = $v['start_time'];
				$change[] = $v;
			}
			else
			{
				$change[] = $v;
			}
		}

		//简化字段
		$eazy = array();
		foreach( $change as $k => $v )
		{
			$eazy[$k] = $v['begin'];
		}

		//排序
		if ( $desc === FALSE )
			asort($eazy);
		arsort($eazy);
		
		//声明变量， 储存数据
		$result = array();

		foreach( $eazy as $k => $v )
		{
			$result[] = $data[$k];
			unset($eazy[$k]);
		}

		return $result;
	}

}