<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登陆</title>
	<!-- <link rel="stylesheet" href="../css/global.css"> -->
	<link rel="stylesheet" href="/Public/Home/css/login.css">
	<script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
</head>
<body>

	<div class="wrap">
		<!-- logo -->

		<div class="margin-center logo">
			<a href='/'><img src="/Public/Home/images/logo.png" alt=""></a>
		</div>

		<!-- Intermediate content area -->
		<div class="main clearfix">
			<div class="margin-center">
				<!-- login banner -->
				<div class="login-banner">
					<img src="/Public/Home/images/login-banner.jpg" alt="">
				</div>
				
				<!-- login well -->
				<div class="login-well">
					<h3>用户登陆</h3>
				<form action="/index.php/Home/Index/login.html" method="post">
					<div>
						<input id="username" name="username" type="text" class="username" placeholder="会员名/手机号">
					</div>
					<div>
						<input type="password" name="password" class="password">
					</div>
					<div>
						<input type="submit" style="color:white;" class="btn-login" value="登陆">
						<input type="hidden" name='loginKey' value="<?php echo $loginKey;?>">
					</div>
					<div class="extra-link">
						<a href="<?php echo U('Index/forget')?>">忘记密码</a>
						<a href="<?php echo U('Index/register');?>">免费注册</a>
					</div>
				</form>
					
				</div>
			</div>
		</div>

		
		<!-- bottom copyright information -->
		<div class="footer">
			<div class="margin-center copyright">
				版权所有 纽珀（中国）有限公司 沪ICP备15040369号 Copyright 2009-2017 eheteam.com All Right Reserved
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
$("#username").blur(function(){
	var phone = $(this).val();
		$.ajax({
				url:"http://www.zxznz.cn/index.php/Home/Index/checkLoginUser",
				type:'POST',
				data:{'phone':phone},
				dataType:'json',
				success:function(res){
					
				}
			})
})

</script>