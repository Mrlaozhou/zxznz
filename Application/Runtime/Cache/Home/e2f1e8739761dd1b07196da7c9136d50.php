<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册</title>
	<link rel="stylesheet" href="/Public/Home/css/global.css">
	<link rel="stylesheet" href="/Public/Home/css/register.css">
	<script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
</head>
<body>

	<div class="page-wrap">		
		<!-- Top black navigation -->
		<div class="top-nav">
			<div class="margin-center">
			
<!-- 				<div class="fl">
					上海
				</div>

				<div class="fr">
					<a href="javascript:void(0)">请登陆</a>
					/
					<a href="javascript:void(0)">注册</a>
				</div>
 -->
			</div>
		</div>

		<!-- Intermediate content area -->
		<div class="content margin-center">
			
			<!-- logo -->
			<div class="logo">
				<img src="/Public/Home/images/logo.png" alt="">
				<span>用户注册</span>
			</div>

			<!-- operate -->
			<div class="operate">

				<!-- operate-title -->
				<div class="operate-title">
					<ul>
						<li class="active fished"><span>1</span>设置用户名</li>
						<li><span>2</span>填写账户信息</li>
						<li><span>3</span>注册成功</li>
					</ul>
				</div>

				<!-- operate content set username -->
				<div class="set-username jvc-operate">
					<div class="operate-item">
						<label>手机号</label>
						<input type="text" placeholder="请输入您的手机号" id="user-tel">
						<span class="user-tel-msg"></span>
					</div>
					<div class="operate-item">
						<label>验证码</label>
						<input type="text" class="captcha" id="captcha">
						<a href="javascript:void(0)" class="get-captcha" id="get-captcha">获取验证码</a>
						<div>
							<span class="user-captcha-msg"></span>
						</div>
					</div>
					<div class="operate-item"><a href="javascript:void(0)" class="next" id="one-step-next">下一步</a></div>
				</div>


				<!-- operate content fill out account information -->
				<div class="set-account-info jvc-operate">
					<div class="operate-item">
						<label>会员名称</label>
						<input type="text" placeholder="使用中英文" id="nick">
						<span class="user-nick"></span>
					</div>
					<div class="operate-item">
						<label>登陆密码</label>
						<input type="password" placeholder="6~12位字母（区分大小写）或数字" id="pwd">
						<span class="user-password"></span>
					</div>
					<div class="operate-item">
						<label>密码确认</label>
						<input type="password" placeholder="请再输入一次密码" id="pwd_re">
						<span class="user-password-re"></span>
					</div>
					<div class="operate-item confirm">
						<a href="javascript:void(0)" class="btn-register" id="register">注册</a>
						<input type="checkbox" id="agree">
						<span>我已经阅读并同意</span><a href="javascript:void(0)">《用户协议》</a>
					</div>
				</div>

				<!-- operate content register successful -->
				<div class="register-successful jvc-operate">
					<div class="successful-img">
						<img src="/Public/Home/images/register-successful.png" alt="">
					</div>
					<div class="successful-msg">恭喜您注册成功</div>
					<div><span class="line-t"></span></div>
					<div><a href="javascript:void(0)" class="login-btn">立即登陆</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- bottom copyright information -->
	<div class="footer">
		<div class="margin-center copyright">
			版权所有 纽珀（中国）有限公司 沪ICP备15040369号 Copyright 2009-2017 eheteam.com All Right Reserved
		</div>
	</div>

	<div class="dialog">
		验证码发送成功
	</div>
</body>
</html>
<script>
	$(function(){

		/*
		*	one step
		*	Check the phone number is legal
		*/

		// addEventListener for user telephone input and captcha input
		$('#user-tel').blur(function(){
			var phone=$('#user-tel').val();
			checkExists(phone);	
		})

		$('#get-captcha').click(function(){
			var phone=$('#user-tel').val();
			getCaptcha(phone);
		});

		// check user telephone exists
		function checkExists(phone){
			if(!isNaN(phone)&&phone.length==11)
			{
				$.ajax({
					url:"http://www.zxznz.cn/index.php/Home/Index/checkExists",
					type:"POST",
					data:{'phone':phone},
					success:function(res){
						var result=JSON.parse(res);
						if(result.status==true)
						{
							$('.user-tel-msg').removeClass('error').addClass('success').html('手机号可用');
							$('#user-tel').removeClass('error').addClass('success');
						}
						else if(result.info==003)
						{
							$('.user-tel-msg').removeClass('success').addClass('error').html('手机号已注册');
							$('#user-tel').removeClass('success').addClass('error');
						}
						else
						{
							$('.user-tel-msg').removeClass('success').addClass('error').html('手机号不合法');
							$('#user-tel').removeClass('success').addClass('error');
						}
					}
				})
			}
			else
			{
				$('.user-tel-msg').removeClass('success').addClass('error').html('手机号不合法');
				$('#user-tel').removeClass('success').addClass('error');
			}
		}

		// get telephone captcha ajax
		function getCaptcha(phone)
		{
			$.ajax({
				url:"http://www.zxznz.cn/index.php/Home/Index/sendMsg",
				type:'POST',
				data:{'mobile':phone},
				dataType:'json',
				success:function(res){
					console.log(res);
					if(res.status==true)
					{
						$('.dialog').html('验证码发送成功').fadeIn(500);
						setTimeout(function(){$('.dialog').fadeOut(500)},2000)
					}
					else if(res.info=='003&!007')
					{
						$('.dialog').html('验证码已发送').fadeIn(500);
						setTimeout(function(){$('.dialog').fadeOut(500)},2000)
					}
					else
					{
						$('.dialog').html('验证码发送失败').fadeIn(500);
						setTimeout(function(){$('.dialog').fadeOut(500)},2000)
					}
				}
			})
		}
		
		// check telephone captcha ajax
		$('#one-step-next').click(function()
		{
			var captcha=$('#captcha').val();
			var phone=$('#user-tel').val();
			checkCaptcha(captcha,phone);	
		})
		function checkCaptcha(captcha,phone)
		{
			$.ajax({
				url:'http://www.zxznz.cn/index.php/Home/Index/checkCode',
				type:'POST',
				data:{'code':captcha,'mobile':phone},
				dataType:'json',
				success:function(res){
					if(res.status==true)
					{ 
						$('.user-captcha-msg').removeClass('error').addClass('success').html('验证码正确');
						$('.set-username').css({'display':'none'});
						$('.set-account-info').css({'display':'block'});
						$('.operate-title li').eq(0).addClass('finshed').removeClass('active');
						$('.operate-title li').eq(1).addClass('active');
					}
					else if(res.info==007)
					{
						$('.user-captcha-msg').removeClass('success').addClass('error').html('验证码已过期');
					}
					else
					{
						$('.user-captcha-msg').removeClass('success').addClass('error').html('验证码错误');
					}
				}
			})
		}



		
		/*
		*	second step
		*	Check the nickname and password is legal
		*/

		// addEventListener for nick input and password input
		$("#nick").blur(function() {
			var nick=$('#nick').val();
			checkNick(nick);
		});
		$("#pwd").blur(function() {
			var pwd=$('#pwd').val();
			checkPwd(pwd);
		});
		$("#pwd_re").blur(function(){
			var pwd_new=$('#pwd_re').val();
			var pwd_old=$('#pwd').val();
			checkConsistency(pwd_new,pwd_old);
		})
		$('#register').click(function(){
			var phone=$('#user-tel').val();
			var pwd_new=$('#pwd_re').val();
			var pwd_old=$('#pwd').val();
			var nick=$('#nick').val();
			checkConsistency(pwd_new,pwd_old);
			if($("#agree").prop('checked')){
				register(phone,pwd_old,pwd_new,nick);
			}
			else
			{
				return false;
			}
		})
		// check user nick name is legal
		function checkNick(nick)
		{
			$.ajax({
				url:'http://www.zxznz.cn/index.php/Home/Index/checkAlias',
				type:'POST',
				data:{'alias':nick},
				success:function(res)
				{
					var result=JSON.parse(res);
					if(result.status==true)
					{
						$('.user-nick').removeClass('error').addClass('success').html('名称可用');
						$('#nick').removeClass('error').addClass('success')
					}
					else
					{
						$('.user-nick').removeClass('success').addClass('error').html('名称不合法');
						$('#nick').removeClass('success').addClass('error')
					}
				}
			})
		}

		// check password format is legal
		function checkPwd(pwd)
		{
			$.ajax({
				url:'http://www.zxznz.cn/index.php/Home/Index/checkPwd',
				type:'POST',
				jsonp:"callback",
				jsonpCallback:"flightHandler",
				data:{'pwd':pwd},
				success:function(res)
				{
					var result=JSON.parse(res);
					if(result.status==true)
					{
						$('.user-password').removeClass('error').addClass('success').html('密码可用');
						$('#pwd').removeClass('error').addClass('success')
					}
					else if(result.info==005)
					{
						$('.user-password').removeClass('success').addClass('error').html('密码长度不合法');
						$('#pwd').removeClass('success').addClass('error')
					}
					else
					{
						$('.user-password').removeClass('success').addClass('error').html('密码不合法');
						$('#pwd').removeClass('success').addClass('error')
					}
				}
			})
		}

		// check twice password consistency
		function checkConsistency(pwd_new,pwd_old)
		{
			$.ajax({
				url:'http://www.zxznz.cn/index.php/Home/Index/confirmPwd',
				type:'POST',
				data:{'new':pwd_new,'old':pwd_old},
				dataType:'json',
				success:function(res)
				{
					if(res.status==true)
					{
						$('.user-password-re').removeClass('error').addClass('success').html('两次输入密码一致');
						$('#pwd_re').removeClass('error').addClass('success');
					}
					else
					{
						$('.user-password-re').removeClass('success').addClass('error').html('两次输入密码不一致');
						$('#pwd_re').removeClass('success').addClass('error');
					}
				}
			})
		}

		// do register
		function register(phone,pwd_old,pwd_new,nick)
		{
			$.ajax({
				url:'http://www.zxznz.cn/index.php/home/index/register_user',
				type:'POST',
				data:{'phone':phone,'old':pwd_old,'new':pwd_new,'alias':nick},
				dataType:'json',
				success:function(res){
					if(res.status==true)
					{
						$('.set-account-info').css({'display':'none'});
						$('.register-successful').css({'display':'block'});
						$('.operate-title li').eq(1).addClass('finshed').removeClass('active')
						$('.operate-title li').eq(2).addClass('active');
					}
				}
			})
		}

	})
</script>