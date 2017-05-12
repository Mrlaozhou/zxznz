<?php 
namespace Home\Controller;
use Think\Controller;

class DataController extends Controller
{
	private static $_memcache = null;
	protected $memcache = null;
	public function __construct()
	{
		parent::__construct();

		$this->memcache = new \Memcache();
		$this->memcache->connect('localhost','11211');
		$this->index();
	}
	public function index()
	{
		self::$_memcache->flush();
		// exit;
		if ( ! $this->memcache->get('hospital') )
		{
			/**///获取所有省份医院信息
			$hosModel = M('Hospiatl');
			$sql = "SELECT id,name,logo,(SUBSTRING_INDEX(`address`,'-',1)) city FROM zxznz_hospital WHERE `is_show`='1'";
			$hospital = $hosModel -> query($sql);
			//处理数据，按照省份分类
			foreach( $hospital as $k => $v )
			{
				$result[$v['city']][] = $v;
				unset($hospital[$k]);
			}
			
			//储存hospiatl信息到memcache
			$this->memcache->set('hospital',$result);
			$hospital = $result;

			/**///获取所有省份的医生信息
			$docModel = M('Doctor');
			$sql = "select d.id,d.name,d.picture,d.hos_id,d.is_show,(h.name) hos_name,
(SUBSTRING_INDEX(`address`,'-',1)) city FROM zxznz_doctor as d left join zxznz_hospital as h on h.id = d.hos_id WHERE d.is_show='是' AND h.is_show='1'";

			$doctor = $docModel->query($sql);
			//处理数据
			foreach( $doctor as $k => $v )
			{
				$result2[$v['city']][] = $v;
				unset($doctor[$k]);
			}
			$this->memcache->set('doctor',$result2);

			$doctor = $result2;
		}
	}

	public function getProvince()
	{
		// $ip = $_SERVER['REMOTE_ADDR'];
		$ip = '180.173.164.27';
		$api = 'http://ip.taobao.com/service/getIpInfo.php';
	    $file = file_get_contents($api."?ip=".$ip);
	    $arr = json_decode($file,true);
	    
	   	if ( $arr['code'] != 0 )
	   	{
	    	return FALSE;
	   	}
		$province=substr($arr['data']['region'],0,-3);

		session('province',$province);

		echo json_encode(array('status'=>TRUE,'ip'=>$ip,'s'=>session('province')));
		exit;
	}
}