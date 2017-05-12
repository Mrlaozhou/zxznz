<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<script src="/Public/jquery-1.11.3.min.js"></script>
</head>
<style type="text/css" media="screen">
	html,body
	{
		margin: 0;
		font-family: "Microsoft Yahei", 'Arial', Helvetica, STHeiTi, sans-serif;
	}
	p
	{
		margin: 0;
	}
	/****** header ******/
	.dashboard .header
	{
		width: 100%;
		height: 40px;
		background: #2b2a2f;
	}
	.dashboard .header-container
	{
		width: 1000px;
		height: 100%;
		box-sizing: border-box;
		margin: 0 auto;
	}
	.dashboard .icon-user
	{
		display: inline-block;
		width: 20px;
		height: 20px;
		background: url(dashboard/dashboard-icon-user.png);
		background-size: 100% 100%;
		margin: 10px 0;
	}
	.dashboard .user-nick
	{
		display: inline-block;
		font-size: 12px;
		color: #fff;
		line-height: 40px;
		vertical-align: top;
		margin-left: 10px;
	}

	/****** sub header *******/
	.dashboard .subheader
	{
		width: 100%;
		height: 120px;
		background: #f8f8f8;
	}
	.dashboard .subheader-container
	{
		width: 1000px;
		height: 100%;
		box-sizing: border-box;
		margin: 0 auto;
		font-size: 0;
	}
	.dashboard .subheader .logo
	{
		display: inline-block;
		width: 134px;
		height: 100%;
		box-sizing: border-box;
	}
	.dashboard .logo img
	{
		width: 100%;
		margin-top: 18px;
	}
	.dashboard .tab
	{
		display: inline-block;
		width: 268px;
		font-size: 14px;
		text-align: center;
		height: 100%;
		vertical-align: top;
		line-height: 120px;
	}
	.dashboard .tab-key
	{
		color: #333;
		text-decoration: none;
		margin: 0 16px;		
	}
	.dashboard .search
	{
		display: inline-block;
		width: 450px;
		height: 40px;
		border: 2px solid #d11337;
		float: right;
		margin-top: 40px;
		overflow: hidden;
		font-size: 0;
	}
	.dashboard .search input[type='text']
	{
		width: 340px;
		height: 40px;
		border: none;
		outline: none;
		background: none;
		padding-left: 10px;
		box-sizing: border-box;
		font-size: 16px;
	}
	.dashboard .search input[type='submit']
	{
		width: 110px;
		height: 40px;
		border: none;
		outline: none;
		background: #d11337;
		text-align: center;
		padding: 0;
		font-size: 16px;
		color: #fff;
		cursor: pointer;
	}

	/***** tab info *******/
	.dashboard .tab-info
	{
		width: 1000px;
		height: 540px;
		margin: 65px auto 0;
		border: 1px solid #ddd;
		box-sizing: border-box;
		margin-bottom: 176px;
	}
	.dashboard .tab-info .title
	{
		width: 100%;
		height: 60px;
		border-bottom: 1px solid #ddd;
		font-size: 14px;
		color: #333;
		box-sizing: border-box;
		line-height: 60px;
		padding-left: 36px;
	}
	.dashboard .info-title
	{
		display: inline-block;
		width: 130px;
		box-sizing: border-box;
		font-size: 12px;
		color: #333;
		text-align: right;
	}
	.dashboard .info-msg
	{
		display: inline-block;
		width: 420px;
		box-sizing: border-box;
		margin-left: 16px;
	}
	.dashboard .info-avatar
	{
		margin-top: 40px;
	}
	.dashboard .info-avatar .info-title
	{
		vertical-align: top;
		padding-top: 15px;
	}
	.dashboard .info-avatar img
	{
		width: 100px;
		height: 100px;
		border-radius: 50px;
	}
	.dashboard .info-nick
	{
		margin-top: 40px;
	}
	.dashboard .info-nick input
	{
		width: 300px;
		height: 30px;
		border: 1px solid #999;
		box-sizing: border-box;
		outline: none;
		padding-left: 8px;
	}
	.dashboard .info-tel
	{
		margin-top: 40px;
	}
	.dashboard .info-tel .info-msg
	{
		font-size: 14px;
		color: #d11337;
	}
	.dashboard .info-latest
	{
		margin-top: 40px;
	}
	.dashboard .info-latest .info-msg
	{
		font-size: 14px;
		color: #666;
	}
	.dashboard .save-btn a
	{
		display: inline-block;
		margin: 60px 0 0 146px;
		width: 110px;
		height: 38px;
		text-align: center;
		color: #fff;
		background: #d11337;
		line-height: 38px;
		text-decoration: none;
	}

	/***** tab order *****/
	.dashboard .tab-order
	{
		width: 1000px;
		margin: 65px auto 0;
		box-sizing: border-box;
		margin-bottom: 176px;
		display: none;
	}
	.dashboard .tab-order .title
	{
		width: 100%;
		height: 60px;
		border-bottom: 1px solid #ddd;
		font-size: 16px;
		color: #333;
		box-sizing: border-box;
		line-height: 58px;
		font-weight: bold;
	}
	.dashboard .tab-order .order-sub-tab
	{
		text-decoration: none;
		color: #000;
		display: inline-block;
		width: 120px;
		text-align: center;
		box-sizing: border-box;
	}
	.dashboard .tab-order .order-sub-tab.active
	{
		color: #d11337;
		border-bottom: 2px solid #d11337;
	}
	.dashboard .order
	{
		width: 100%;
		height: 160px;
		box-sizing: border-box;
		border: 1px solid #ddd;
		margin-top: 22px;
		font-size: 0;
	}
	.dashboard .order-title
	{
		width: 100%;
		height: 38px;
		background: #f7f7f7;
		box-sizing: border-box;
		border-bottom: 1px solid #ddd;
		line-height: 38px;
	}
	.dashboard .order-date
	{
		display: inline-block;
		margin: 0 20px;
		color: #333;
		font-size: 14px;
		font-weight: bold;
	}
	.dashboard .order-num
	{
		font-size: 14px;
		color: #666;
	}
	.dashboard .product-img
	{
		width: 140px;
		height: 78px;
		display: inline-block;
		margin: 22px 10px 0 22px;
	}
	.dashboard .product-img img
	{
		width: 100%;
	}
	.dashboard .product-desc
	{
		display: inline-block;
		width: 550px;
		vertical-align: top;
		font-size: 14px;
		color: #333;
		padding-top: 22px;
	}
	.dashboard .product-desc a
	{
		text-decoration: none;
		color: #d11337;
		font-size: 12px;
		margin-top: 10px;
		display: inline-block;
	}
	.dashboard .product-price
	{
		width: 140px;
		display: inline-block;
		height: 100%;
		text-align: center;
		color: #333;
		font-size: 14px;
		font-weight: bold;
		line-height: 120px;
		vertical-align: top;
		box-sizing: border-box;
		border-left: 1px solid #ddd;
		border-right: 1px solid #ddd;
	}
	.dashboard .product-state
	{
		display: inline-block;
		width: 136px;
		line-height: 120px;
		vertical-align: top;
		color: #666;
		font-size: 14px;
		text-align: center;
	}
	.dashboard .pages
	{
		font-size: 0;
		margin-top: 20px;
		text-align: right;
	}
	.dashboard .page
	{
		display: inline-block;
		width: 34px;
		height: 34px;
		border: 1px solid #ddd;
		box-sizing: border-box;
		text-align: center;
		line-height: 34px;
		font-size: 14px;
		color: #666;
		margin: 0 2px;
		cursor: pointer;
	}
	.dashboard .page.active
	{
		background: #ff4401;
		color: #fff;
		border: 1px solid #ff4401;
	}
	.dashboard .jump-set
	{
		display: inline-block;
		font-size: 14px;
		color: #333;
		padding-left: 30px;
	}
	.dashboard .jump-set input
	{
		width: 50px;
		height: 34px;
		border: 1px solid #ddd;
		color: #666;
		box-sizing: border-box;
		margin: 0 6px;
		font-size: 14px;
		padding-left: 10px;
		outline: none;
	}
	.dashboard .jump-set-btn
	{
		text-decoration: none;
		display: inline-block;
		width: 56px;
		height: 34px;
		box-sizing: border-box;
		color: #666;
		font-size: 14px;
		border: 1px solid #ddd;
		border-radius: 4px;
		text-align: center;
		line-height: 34px;
		margin-left: 10px;
	}
	.dashboard .order-unpaid
	{
		display: none;
	}
	.dashboard .order-unpaid .pay-btn
	{
		display: inline-block;
		text-decoration: none;
		width: 80px;
		height: 30px;
		color: #fff;
		font-size: 14px;
		background: #d11337;
		text-align: center;
		line-height: 30px;
	}
</style>
<body class="dashboard">

	<!-- header -->
	<header id="header" class="header">
		<div class="header-container">
			<i class="icon-user"></i>
			<span class="user-nick">
				<?php echo $data['person']['alias'];?>
			</span>
		</div>
	</header>

	<!-- sub header -->
	<section id="subheader" class="subheader">
		<div class="subheader-container">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo U('/');?>" title=""><img src="/Public/Home/images/dashboard-logo.png" alt=""></a>
			</div>
			<!-- tab -->
			<div class="tab">
				<a href="javascript:void(0)" class="tab-key tab-info-key">个人信息</a>
				<a href="javascript:void(0)" class="tab-key tab-order-key">订单查看</a>
			</div>
			<!-- search -->
			<div class="search">
				<input type="text" name="">
				<input type="submit" name="" value="搜索">		
			</div>
		</div>
	</section>

	<!-- tab-container -->
	<div class="tab-container">
		<!-- tab-info -->
		<section id="tab-info" class="tab-item tab-info">
			<!-- tab user info title -->
			<div class="title">个人信息</div>
			<!-- user avatar -->
			<div class="info-avatar">
				<div class="info-title">当前头像:</div>
				<div class="info-msg">
					<img src="/Public/Home/images/dashboard-avatar-default.png" alt="" id="user-avatar">
				</div>
			</div>
			<!-- user nick -->
			<div class="info-nick">
				<div class="info-title">昵称:</div>
				<div class="info-msg">
					<input type="text" name="" value="<?php echo $data['person']['alias'];?>">
				</div>
			</div>
			<!-- user tel -->
			<div class="info-tel">
				<div class="info-title">手机号:</div>
				<div class="info-msg">
					<?php echo substr(session('user_name'),0,3).'****'.substr(session('user_name'),7);?>
				</div>
			</div>
			<!-- user login latest -->
			<div class="info-latest">
				<div class="info-title">上次登录时间:</div>
				<div class="info-msg">
				<?php echo date('Y/m/d H:i:s',$data['person']['last_time']);?>
				</div>
			</div>
			<!-- save button -->
			<div class="save-btn">
				<a href="javascript:void(0)" title="">保存</a>
			</div>
		</section>

		<!-- tab-order -->
		<section id="tab-order" class="tab-item tab-order">
			<div class="title">
				<a href="javascript:void(0)" class="order-sub-tab tab-finished active">已完成订单</a>
				<a href="javascript:void(0)" class="order-sub-tab tab-unpaid">待支付订单</a>
			</div>
			<div class="order-finished">
				<!-- order -->
				<?php foreach($data['yes'] as $k=>$v):?>
				<div class="order">
					<div class="order-title">
						<span class="order-date">
							<?php echo date('Y-m-d H:i:s',$v['create_time']);?>
						</span>
						<span class="order-num">
							订单编号: <?php echo $v['code'];?>
						</span>
					</div>
					<div class="product-info">
						<div class="product-img">
							<img src="http://www.zxznz.cn/Public/Uploads/<?php echo $v['pic'];?>" alt="">
						</div>
						<div class="product-desc">
							<p>
								<?php echo $v['title'];?>
								<br>
								<?php echo $v['intro'];?>
							</p>
							<p>
								<a href="javascript:void(0)" title="">
									<?php echo $v['hospital'];?>	
								</a>
							</p>
						</div>
						<div class="product-price">
							￥<?php echo $v['true_pay'];?>
						</div>
						<div class="product-state">
							已支付
						</div>
					</div>
				</div>
				<?php endforeach;?>

<!-- 				<div class="pages">
					<span class="page"><</span>
					<span class="page">1</span>
					<span class="page active">2</span>
					<span class="page">3</span>
					<span class="page">4</span>
					<span class="page">5</span>
					<span class="page">6</span>
					<span class="page">7</span>
					<span class="page">23</span>
					<span class="page">></span>
					<div class="jump-set">
						跳至<input type="text" name="" value="1">页
					</div>	
					<a href="javascript:void(0)" title="" class="jump-set-btn">跳转</a>
				</div> -->

			</div>
			<div class="order-unpaid">
				<!-- order -->
			<?php foreach( $data['no'] as $k=>$v ):?>
				<div class="order">
					<div class="order-title">
						<span class="order-date">
							<?php echo date('Y-m-d H:i:s',$v['create_time']);?>
						</span>
						<span class="order-num">
							订单编号: <?php echo $v['code'];?>
						</span>
					</div>
					<div class="product-info">
						<div class="product-img">
							<img src="http://www.zxznz.cn/Public/Uploads/<?php echo $v['pic'];?>" alt="">
						</div>
						<div class="product-desc">
							<p>
								<?php echo $v['title'];?>
								<br>
								<?php echo $v['intro'];?>
							</p>
							<p>
								<a href="javascript:void(0)" title="">
									<?php echo $v['hospital'];?>	
								</a>
							</p>
						</div>
						<div class="product-price">
							￥<?php echo $v['need_pay'];?>
						</div>
						<div class="product-state">
							<a href="<?php echo U('Order/checkPay?orderId='.$v['id']);?>" title="" class="pay-btn">			立即支付
							</a>
						</div>
					</div>
				</div>
			<?php endforeach;?>

<!-- 				<div class="pages">
					<span class="page"><</span>
					<span class="page">1</span>
					<span class="page active">2</span>
					<span class="page">3</span>
					<span class="page">4</span>
					<span class="page">5</span>
					<span class="page">6</span>
					<span class="page">7</span>
					<span class="page">23</span>
					<span class="page">></span>
					<div class="jump-set">
						跳至<input type="text" name="" value="1">页
					</div>	
					<a href="javascript:void(0)" title="" class="jump-set-btn">跳转</a>
				</div> -->

			</div>
		</section>
	</div>


	<!-- footer 放置区 -->
	 <?php require_once('/Public/Home/footer.html');?>




</body>
</html>
<script>
	$(function(){
		$('.tab-finished').click(function(){
			$('.order-finished').show();
			$('.order-unpaid').hide();
			$(this).addClass('active').siblings('.order-sub-tab').removeClass('active');
		});
		$('.tab-unpaid').click(function(){
			$('.order-finished').hide();
			$('.order-unpaid').show();
			$(this).addClass('active').siblings('.order-sub-tab').removeClass('active');
		});
		$('.tab-info-key').click(function(){
			$('#tab-info').show();
			$('#tab-order').hide();
		});
		$('.tab-order-key').click(function(){
			$('#tab-info').hide();
			$('#tab-order').show();
		});
	})
</script>