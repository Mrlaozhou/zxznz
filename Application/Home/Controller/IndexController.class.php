<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{

    public function index()
    {
        /*******数据提取*******/
        $model = D('Home/Index');

        //doctor
        $Dinfo = $model->getDoc();

        
        //hospital
        $Hinfo = $model->getHos();


    	$this->assign(array(
    		'page_title' => '智慧医美_整形指南针',
    		'page_desc'	 => 'e折整形 全国抢购',

            'Dinfo'      => $Dinfo,
            'Hinfo'      => $Hinfo,
    		));
        $this->display();
    }

    public function ours()
    {
		$this->assign(array(
    		'page_title' => '关于我们_智慧医美_整形指南针',
    		'page_desc'	 => 'e折整形 全国抢购',
    		));
        $this->display();
    }

    public function login()
    {
        if ( IS_POST )
        {
            // dump( I('post.') );
            // exit;

            $model = new \Home\Model\UserModel();
            $status = $model->checkLogin( I('post.') );

            //根据model 返回的值  执行结果
            switch ($status)
            {
                case 0:
                    $this->error('您输入的用户名有误，请核对后再次输入');
                    break;
                case -7:
                    $this->error('您输入的密码有误，请核对后再次输入');
                    break;
                default:
                    // 更新  最新操作时间
                    $model->last_time = time();
                    //登录成功  跳转
                    $this->success('登录成功！', U('index') );
            }
        }
        else
        {
            $this->display();
        }
    }

    public function register()
    {
        header("Access-Control-Allow-Origin:*");
        if( 1 )
        {
            $model = new \Home\Model\UserModel();
            if ( $model->create( I('post.') , 1 ) )
            {
                if ( $model->add() )
                {
                    echo json_encode(array(
                        'status'    =>  TRUE,
                        ));
                }
                else
                {
                    echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '001',
                        ));
                }
            }
            else
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '002',
                    ));
            }
        }
        else
        {
            echo 'hahaha';
        }
    }

    public function outLogin()
    {

        // 清空 session 重定向
        session(null);
        redirect('/');
    }

    public function checkExists()
    {
        header("Access-Control-Allow-Origin:*");
        //接受参数
        $config = I('post.');

        if( !empty( $config ) )
        {
            //验证格式
            $phone = trim($config['phone']);

            $model = D('Index');
            $result = $model->rExists($phone); 

            if( $result === 1 )
            {
                echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '002',      //参数可能出错！
                            ));
            }
            elseif( $result === 2 )
            {
                echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '003',      //此手机已注册
                            ));
            }
            elseif( $result === 3 )
            {
                echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '004',      //恶意攻击
                            ));
            }
            elseif( $result === TRUE )
            {
                echo json_encode(array(
                            'status'    =>  TRUE,
                            'info'      =>  null,
                            ));
            }
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',      //传参、接参出错！
                ));
        }
    }

    public function sendMsg()
    {
        header("Access-Control-Allow-Origin:*");
        //参数
        $mobile = trim(I('post.mobile'));

        if( $mobile )
        {
            //验证是否注册
            $model = D('Index');
            $result = $model->rExists($mobile); 
            if( $result === TRUE )
            {
                //url
                $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit';
                //账户、密码
                $account = 'C22986809';
                $password = '37454a5b2e36e986562439659c74c928';

                //生成随机验证码
                $rand = getRandStr(4,2);

                //拼接信息
                //$content = "您的验证码是：{$rand}。请不要把验证码泄露给其他人。【整形指南整】"; 
                // $post_data = "account={$account}&password={$password}&mobile={$mobile}&content=".rawurlencode($content)."format=json";
                
                $post_data = "account={$account}&password={$password}&mobile={$mobile}&content=".rawurlencode("您的验证码是：{$rand}。请不要把验证码泄露给其他人。");

                $code_name = $mobile;
                //实例化验证码类
                $Code = M('Code');
                //判断是否发送过验证码
                $oldInfo = $Code->field('mobile,code,time')->find($mobile);
                if( !$oldInfo )
                {
                    //未发送验证码  发送
                    $data = array('mobile'=>$mobile,'code'=>$rand,'time'=>time());
                    if( $Code->add($data) !== FALSE )
                    {
                        $result = POST($post_data,$url);

                        //处理xml字符串
                        $result = simplexml_load_string($result);
                        if( $result->code == 2 )
                        {
                            //发送成功
                            echo json_encode(array(
                                'status'    =>  TRUE,
                                )); 
                        }
                        else
                        {
                            //未成功发送
                            echo json_encode(array(
                                'status'    =>  FALSE,
                                'info'      =>  '444',
                                )); 
                        }
                    }
                    else
                    {
                        echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '44',
                            ));
                    }
                }
                else
                {
                    //已发送验证
                    
                    $offset = time()-$oldInfo['time'];
                    if( $offset > 1800 )
                    {
                        $Code->delete($mobile);
                        //过期 重新发送
                        $data = array('mobile'=>$mobile,'code'=>$rand,'time'=>time());
                        if( $Code->add($data) !== FALSE )
                        {
                            $result = POST($post_data,$url);

                            //处理xml字符串
                            $result = simplexml_load_string($result);
                            if( $result->code == 2 )
                            {
                                //发送成功
                                echo json_encode(array(
                                    'status'    =>  TRUE,
                                    )); 
                            }
                            else
                            {
                                //未成功发送
                                echo json_encode(array(
                                    'status'    =>  FALSE,
                                    'info'      =>  '444',
                                    )); 
                            }
                        }
                        else
                        {
                            echo json_encode(array(
                                'status'    =>  FALSE,
                                'info'      =>  '444',
                                ));
                        }
                    }
                    else
                    {
                        //不过期
                        echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '003&!007',
                            'remark'    =>  $offset,
                            ));
                    }    
                }
            }
            else 
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '003',
                    )); 
            }     
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',
                ));
        }
    }

    public function checkAlias()
    {
        header("Access-Control-Allow-Origin:*");
        $config = I('post.');
        if( $config )
        {
            $alias = trim($config['alias']);

            $model = D('Index');
            $result = $model->rAlias($alias);
            if( $result === TRUE )
            {
                echo json_encode(array(
                        'status'    =>  TRUE,
                        ));
            }
            elseif( $result === 1 )
            {
                echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '002',
                        ));
            }
            elseif( $result === 2 )
            {
                echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '005',
                        ));
            }
        }
        else 
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',          //传参 出错      
                ));
        }    
    }

    public function checkPwd()
    {
        header("Access-Control-Allow-Origin:*");
        $config = I('post.');
        if( $config )
        {
            $pwd = trim($config['pwd']);

            $model = D('Index');
            $result = $model->rPwd($pwd);
            if( $result === TRUE )
            {
                echo json_encode(array(
                        'status'    =>  TRUE,
                        ));
            }
            elseif( $result === 1 )
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '002',          //参数出错
                    ));
            }
            elseif( $result === 2 )
            {
                echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '005'       //长度不允许
                        ));
            }
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',          //传参 出错
                ));
        }
    }

    public function confirmPwd()
    {
        header("Access-Control-Allow-Origin:*");
        $config = I('post.');
        if( count($config) == 2 )
        {
            $config = array_map('trim',$config);

            $model = D('Index');
            $result = $model->rPwd2($config);

            if( $result === TRUE )
            {
                echo json_encode(array(
                    'status'    =>  TRUE,
                    ));
            }
            else
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '!003',
                    ));  
            }
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',
                ));
        }
    }

    public function checkCode()
    {
        header("Access-Control-Allow-Origin:*");
        $config = I('post.');
        if( count($config) === 2)
        {
            //去除两端空格
            $config = array_map('trim',$config);
            //服务器储存的验证码
            $Code = M('Code');
            $info = $Code->field('mobile,code,time')
                         ->find($config['mobile']);
            if( $info )
            {
                $s_code = $info['code'];
                //客户端传递的验证码
                $u_code = $config['code'];

                //时间偏移量
                $offset = time()-$info['time'];
                if( $offset < 1800 )
                {
                    if( $s_code == $u_code )
                    {
                        //验证成功,删除此条验证数据
                        $Code->delete($mobile);
                        echo json_encode(array(
                            'status'    =>  TRUE,
                            ));
                    }
                    else
                    {
                        echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '002',
                            's_code'    =>  $s_code,
                            'u_code'    =>  $u_code,
                            ));
                    }
                }
                else
                {
                    //如果过期 删除此条数据
                    $Code->delete($mobile);
                    echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '007',
                        'offset'    =>  $offset,
                        ));
                } 
            }
            else
            {
                echo json_encode(array(
                    'status'        =>  FALSE,
                    'info'          =>  '002&006',
                    'remark'        =>  '请先获取验证码',
                    ));
            }           
        }
        else
        {
           echo json_encode(array(
            'status'    =>  FALSE,
            'info'      =>  '001',
           )); 
        }
    }

    public function register_user()
    {
        header("Access-Control-Allow-Origin:*");
        $config = I('post.');
        if( count($config) === 4 )
        {
            //处理数据空格
            $config = array_map('trim',$config);

            $model = D('Index');
            //验证手机号
            $result1 = $model->rExists($config['phone']);
            if( $result1 === TRUE )
            {
                //验证别名
                $result2 = $model->rAlias($config['alias']);
                if( $result2 === TRUE )
                {
                    //验证密码
                    $result3 = $model->rPwd($config['old']);
                    if( $result3 === TRUE )
                    {
                        //确认密码
                        $result4 = $model->rPwd2(array(
                                'new'   => $config['new'],
                                'old'   => $config['old'],
                            ));

                        if( $result4 === TRUE )
                        {
                            //迭代验证全为true
                            //实例化user模型
                            $User = M('User');
                            $data = array(
                                'username'      =>  preventTags($config['phone']),
                                'password'      =>  md5($config['new']),
                                'alias'         =>  $config['alias'],
                                'create_time'   =>  time(),
                                );
                            if( $User->add($data) !== FALSE )
                            {
                                echo json_encode(array(
                                    'status'    =>  TRUE,
                                    ));
                            }
                            else
                            {
                                echo json_encode(array(
                                    'status'    =>  FALSE,
                                    'info'      =>  '444',
                                    ));
                            }
                        }
                        else
                        {
                            echo json_encode(array(
                                'status'    =>  FALSE,
                                'remark'    =>  '4',
                                ));
                        }
                    }
                    else
                    {
                        echo json_encode(array(
                            'status'    =>  FALSE,
                            'remark'    =>  '3',
                            ));
                    }
                }
                else
                {
                    echo json_encode(array(
                        'status'    =>  FALSE,
                        'remark'    =>  '2',
                        ));
                }
            }
            else
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'remark'    =>  '1',
                    'data'      =>  $config,
                    ));
            }
        }
        else
        {
            echo json_encode(array(
            'status'    =>  FALSE,
            'info'      =>  '001',
           )); 
        }
    }

    public function checkUser()
    {
        header("Access-Control-Allow-Origin:*");
        $config = trim(I('post.username'));

        if( $config )
        {
            //实例化模型
            $model = D('Index');
            $result = $model->rExists($config);

            if( $result === 2 )
            {
                echo json_encode(array(
                    'status'    =>  TRUE,
                    ));
            }
            else
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '!003',
                    ));
            }
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',
                ));
        }
    }

    public function user_login()
    {
        header("Access-Control-Allow-Origin:*");
        //接受参数
        $config = I('post.');

        if( count($config) === 2 )
        {
            //处理参数
            $config = array_map('trim',$config);
            if( !empty($config['username']) && !empty($config['password']) )
            {
                //验证用户是否注册
                $model = D('Index');
                $result = $model->rExists($config['username']);
                if( $result === 2 )
                {
                    //实例化user 模型
                    $user = M('User');
                    $info = $user->field('id,username,password,alias')
                                 ->where(array(
                                    'username'  =>  array('eq',$config['username']),
                                    ))
                                 ->find();
                    $info = array_map('trim',$info);

                    if( $info )
                    {
                        if( $info['username'] === $config['username'] )
                        {
                            if( $info['password'] === md5($config['password']) )
                            {
                                echo json_encode(array(
                                    'status'    =>  TRUE,
                                    'user'   =>  $info,
                                    ));
                            }
                            else
                            {
                                echo json_encode(array(
                                    'status'    =>  FALSE,
                                    'info'      =>  '0022',
                                    'remark'    =>  '密码错误',
                                    ));
                            }
                        }
                        else
                        {
                            //二级验证 出错 ===> xss攻击
                            echo json_encode(array(
                                'status'    =>  FALSE,
                                'info'      =>  '004',
                                ));
                        }
                    }
                    else
                    {
                        //存在用户  提取信息失败 
                        echo json_encode(array(
                            'status'    =>  FALSE,
                            'info'      =>  '444',
                            ));
                    }
                }
                else
                {
                    echo json_encode(array(
                        'status'    =>  FALSE,
                        'info'      =>  '!003',
                        ));
                }
            }
            else
            {
                echo json_encode(array(
                    'status'    =>  FALSE,
                    'info'      =>  '0011',
                    ));
            }
        }
        else
        {
            echo json_encode(array(
                'status'    =>  FALSE,
                'info'      =>  '001',
                ));
        }
    }
}
