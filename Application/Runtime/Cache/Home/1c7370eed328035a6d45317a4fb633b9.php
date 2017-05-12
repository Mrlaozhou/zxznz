<?php if (!defined('THINK_PATH')) exit(); require_once('/Public/Home/header.html');?>
<style type="text/css" media="screen">
html,body
	{
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
	}
	p{margin: 0;padding: 0;}
	.pay-container
	{
		width: 100%;
		background: #fff5f7;
		padding: 90px 0 72px;
	}
	/*****  pay-step-guide ****/
	.pay-step-guide
	{
		width: 900px;
		margin: 0 auto;
		font-size: 0;
	}
	.step-guide-item
	{
		display: inline-block;
		width: 300px;
		box-sizing: border-box;
		font-size: 22px;
		text-align: center;
		color: #999;
	}
	.step-guide-item .guide-icon
	{
		width: 100%;
		height: 10px;
		background: #ddd;
		margin-top: 38px;
	}
	.step-guide-item .guide-icon-1
	{
		border-radius: 4px 0 0 4px;
	}
	.step-guide-item .guide-icon-3
	{
		border-radius: 0 4px 4px 0;
	}
	.step-guide-item .guide-icon span
	{
		display: inline-block;
		width: 40px;
		height: 40px;
		border-radius: 20px;
		text-align: center;
		line-height: 40px;
		background: #ddd;
		position: relative;
		top: -15px;
	}
	.step-guide-item.active
	{
		color: #d11337;
	}
	.step-guide-item.active .guide-icon
	{
		background: #d11337;
	}
	.step-guide-item.active .guide-icon span
	{
		background: #d11337;
		color: #fff;
	}

	/**** pay content container*/
	.pay-content-container
	{
		width: 1000px;
		background: #fff;
		border-radius: 8px;
		padding: 90px 50px 0; 
		margin: 20px auto 0;
		box-sizing: border-box;
	}
	.pay-content-container .content-item-title
	{
		font-size: 22px;
		line-height: 30px;
		border-left: 2px solid #999;
		color: #444;
		padding-left: 10px;
		margin-bottom: 20px;
	}
	.pay-content-container .product-title
	{
		width: 100%;
		height: 40px;
		box-sizing: border-box;
		background: #fff5f7;
		text-align: center;
		font-size: 0;
	}
	/****** pay step 3 *****/
	.pay-step-3
	{
		padding-bottom: 230px;
	}
	.pay-suceess-icon
	{
		text-align: center;
	}
	.pay-success-msg
	{
		font-size: 24px;
		color: #666;
		text-align: center;
	}
	.pay-step-3 .back-btn
	{
		text-align: center;
	}
	.pay-step-3 .back-btn a
	{
		display: inline-block;
		width: 210px;
		height: 50px;
		text-align: center;
		line-height: 50px;
		border-radius: 25px;
		background: #333;
		color: #fff;
		font-size: 20px;
		text-decoration: none;
		margin: 20px 0 60px;
	}
	.pay-info-desc
	{
		width: 450px;
		margin: 0 auto;
		line-height: 40px;
	}
	.pay-info-desc .info-title
	{
		display: inline-block;
		width: 100px;
		color: #666;
		font-size: 20px;
	}
	.pay-info-desc .info-detail
	{
		display: inline-block;
		color: #000;
		font-size: 16px;
	}
	.pay-step-item
	{
		display: none;
	}
	.pay-step-item:nth-child(1)
	{
		display: block;
	}
</style>
<body>
	<div class="pay-container">
		<div class="pay-step-guide">
			<div class="step-guide-item">
				<div class="guide-msg">
					提交预约
				</div>
				<div class="guide-icon guide-icon-1">
					<span>1</span>
				</div>
			</div>
			<div class="step-guide-item">
				<div class="guide-msg">
					核对并支付
				</div>
				<div class="guide-icon guide-icon-2">
					<span>2</span>
				</div>
			</div>
			<div class="step-guide-item active">
				<div class="guide-msg">
					完成订单
				</div>
				<div class="guide-icon guide-icon-3">
					<span>3</span>
				</div>
			</div>
		</div>

		<div class="pay-content-container">
			<!-- step 3 -->
			<div class="pay-step-3 pay-step-item">
				<div class="pay-suceess-icon">
					<img src="/Public/Home/images/pay-success-icon.png" alt="">
				</div>
				<div class="pay-success-msg">
					订单支付成功
				</div>
				<div class="back-btn">
					<a href="<?php echo U('/');?>" title="">返回首页</a>
				</div>
				<div class="pay-info-desc">
					<p>
						<span class="info-title">订单编号:</span>
						<span class="info-detail"><?php echo $info['code'];?></span>
					</p>
					<p>
						<span class="info-title">交易编号:</span>
						<span class="info-detail"><?php echo $info['ali_no'];?></span>
					</p>
					<p><span class="info-title">
						交易方式:
					   </span>
					   <span class="info-detail">
					   <?php  switch ( $info['pay_type'] ) { case 1: echo '支付宝支付'; break; case 2: echo '微信支付'; break; case 3: echo '现金支付'; break; defualt: echo '其他'; break; } ?>
					   </span>
					 </p>
					<p>
						<span class="info-title">下单时间:</span>
						<span class="info-detail"><?php echo date('Y-m-d H:i:s',$info['create_time']);?></span>
					</p>
				</div>
			</div>
			<!-- step 3 -->
		</div>
	</div>
<?php require_once('/Public/Home/footer.html');?>