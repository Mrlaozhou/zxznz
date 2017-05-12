<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>找回密码</title>
	<link rel="stylesheet" href="/Public/Home/css/global.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/forget.css">
	<script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class="top-nav">
		<!-- logo -->
		<div class="logo margin-center">
			<img src="/Public/Home/images/logo.png" alt="">
			<span>找回密码</span>
		</div>
	</div>

	<!-- Intermediate content area -->
	<div class="main">

		<!-- first step -->
		<div class="first-step">
			<div class="tips">请输入你需要找回登录密码的账户名</div>
			<div class="operate-item">
				<label>手机号</label>
				<input type="text" placeholder="请输入您的手机号" class="tel">
			</div>
			<div class="operate-item">
				<label>验证码</label>
				<input type="text" class="captcha" id="captcha">
				<a href="javscript:void(0)" class="get-captcha">获取验证码</a>
			</div>
			<div><a href="javscript:void(0)" class="next one-step">下一步</a></div>
		</div>

		<!-- next step -->
		<div class="next-step">
			<div class="operate-item">
				<label>新密码</label>
				<input type="text" id="pwd_1">
			</div>
			<div class="operate-item">
				<label>密码确认</label>
				<input type="text" id="pwd_2">
			</div>
			<div><a href="javscript:void(0)" class="next second-step">下一步</a></div>
		</div>

		<!-- last step -->
		<div class="last-step">
			<div>
				<span class="icon-success"></span>
				<span class="success-msg">
					<div class="success-prompt">新密码设置成功！</div>
					<div class="success-warn">请牢记您设置的新密码。<a href="index.html">返回首页</a></div>
				</span>
			</div>
		</div>
	</div>

	<!-- bottom copyright information -->
	<div class="footer">
		<div class="margin-center copyright">
			版权所有 纽珀（中国）有限公司 沪ICP备15040369号 Copyright 2009-2017 eheteam.com All Right Reserved
		</div>
	</div>

	<!-- dialog -->
	<div class="dialog">
		
	</div>
</body>
</html>
<script>
	// 获取验证码
	$('.get-captcha').click(function(){
		var tel=$('.tel').val();
		$.ajax({
			url:"<?php echo U('Index/sendResetMsg');?>",
			type:'POST',
			dataType:'json',
			data:{'mobile':tel},
			success:function(res)
			{
				if ( res.status )
				{
					// 验证码发送成功
					$('.dialog').html('验证码发送成功').fadeIn(500);
					setTimeout(function(){$('.dialog').fadeOut(500)},2000)	
				}
				else
				{
					//	验证码发送失败
					$('.dialog').html(res.info).fadeIn(500);
					setTimeout(function(){$('.dialog').fadeOut(500)},2000)				
				}
				

			}
		})
	})

	// 验证是否通过&&跳转到第二步
	$('.one-step').click(function(){
		var tel=$('.tel').val();
		var captcha=$('#captcha').val();
		$.ajax({
			url:"<?php echo U('Index/checkResetMsg');?>",
			type:'POST',
			dataType:'json',
			data:{'mobile':tel,'code':captcha},
			success:function(res)
			{
				if( res.status )
				{
					// 验证童工并跳转
					$('.first-step').hide();
					$('.next-step').show();	
				}
				else
				{
					// 验证失败提示错误信息
					$('.dialog').html(res.info).fadeIn(500);
					setTimeout(function(){$('.dialog').fadeOut(500)},2000)	
				}	
			}
		})
	})

	// 密码修改&&跳转
	$('.second-step').click(function(){
		var pwd_1=$('#pwd_1').val();
		var pwd_2=$('#pwd_2').val();
		var tel=$('.tel').val();
		var captcha=$('#captcha').val();
		$.ajax({
			url:"<?php echo U('Index/reset');?>",
			type:'POST',
			dataType:'json',
			data:{'mobile':tel,'pwd_1':pwd_1,"pwd_2":pwd_2},
			success:function(res)
			{
				if ( res.status )
				{
					// 密码修改成功&&跳转
					$('.next-step').hide();
					$('.last-step').show();
				}
				else
				{
					// 修改失败提示信息
					$('.dialog').html(res.info).fadeIn(500);
					setTimeout(function(){$('.dialog').fadeOut(500)},2000)
				}
			}
		})
	})
</script>