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
	.pay-content-container .product-name
	{
		display: inline-block;
		width: 580px;
		box-sizing: border-box;
		border: 1px solid #ddd;
		font-size: 14px;
		color: #666;
		line-height: 40px;
	}
	.pay-content-container .product-price
	{
		display: inline-block;
		width: 320px;
		box-sizing: border-box;
		font-size: 14px;
		color: #666;
		line-height: 40px;
		border: 1px solid #ddd;
		border-left: none;
	}
	.product-info
	{
		font-size: 0;
		padding-bottom: 40px;
	}
	.product-desc
	{
		display: inline-block;
		width: 580px;
		height: 120px;
		overflow: hidden;
		box-sizing: border-box;
		border: 1px solid #ddd;
		font-size: 14px;
		color: #666;
		border-top: none;
		padding: 22px;
	}
	.product-img
	{
		width: 140px;
		height: 75px;
		display: inline-block;
	}
	.product-img img
	{
		width: 100%;
		height: 100%;
		vertical-align: top;
	}
	.product-detail-desc
	{
		display: inline-block;
		width: 380px;
		height: 75px;
		vertical-align: top;
		box-sizing: border-box;
		padding-left: 10px;
		line-height: 20px;
	}
	.product-detail-desc a
	{
		color: #d11337;
		text-decoration: none;
	}
	.product-price-desc
	{
		display: inline-block;
		width: 320px;
		box-sizing: border-box;
		font-size: 14px;
		color: #666;
		border: 1px solid #ddd;
		border-left: none;
		border-top: none;
		height: 120px;
		vertical-align: top;
		padding: 22px;
		text-align: center;
	}
	.price-now
	{
		font-size: 30px;
		color: #d11337;
	}
	.price-old
	{
		font-size: 20px;
		color: #bbb;
	}
	/****** pay step 2 *****/
	.pay-mode
	{
		width: 100%;
		height: 160px;
		border: 1px solid #ddd;
		box-sizing: border-box;
		padding: 24px;
	}
	.pay-mode-title
	{
		font-size: 18px;
		color: #999;
	}
	.pay-mode-wechat,.pay-mode-alipay
	{
		display: inline-block;
		width: 180px;
		margin: 18px 0 0 10px;
	}
	.pay-mode-wechat input,.pay-mode-alipay input
	{
		width: 14px;
		height: 14px;
		vertical-align: top;
		margin-top: 19px;
	}
	.pay-mode-img
	{
		display: inline-block;
		width: 144px;
		height: 42px;
		border: 1px solid #ddd;
	}
	.pay-mode-img img
	{
		height: 100%;
		width: 100%;
	}
	.pay-detail-msg
	{
		padding: 44px 0 28px;
		border-bottom: 1px solid #d11337;
		text-align: right;
	}
	.pay-detail-wrap
	{
		display: inline-block;
		width: 312px;
	}
	.pay-detail-title
	{
		font-size: 14px;
		color: #333;
		float: left;
		line-height: 30px;
	}
	.pay-detail-price
	{
		font-size: 30px;
		color: #d11337;
		line-height: 30px;
	}
	.pay-step-2 .pay-btn
	{
		text-align: right;
	}
	.pay-step-2 .pay-btn input
	{
		display: inline-block;
		width: 220px;
		height: 50px;
		text-align: center;
		line-height: 50px;
		color: #fff;
		background: #d11337;
		font-size: 20px;
		margin: 18px 0 42px;
		text-decoration: none;
		border:none;
		cursor:pointer;
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
			<div class="step-guide-item active">
				<div class="guide-msg">
					核对并支付
				</div>
				<div class="guide-icon guide-icon-2">
					<span>2</span>
				</div>
			</div>
			<div class="step-guide-item">
				<div class="guide-msg">
					完成订单
				</div>
				<div class="guide-icon guide-icon-3">
					<span>3</span>
				</div>
			</div>
		</div>

		<div class="pay-content-container">
			<form action="<?php echo U('pay');?>" method="post">
			
			<!-- step 2 -->
			<div class="pay-step-2 pay-step-item">
				<div class="content-item-title">
					确认预约产品
				</div>
				<div class="product-title">
					<span class="product-name">产品名称</span>
					<span class="product-price">特购价</span>
				</div>
				<div class="product-info">
					<div class="product-desc">
						<div class="product-img">
							<img src="/Public/Uploads/<?php echo $info['pic'];?>" alt="产品图片">
						</div>
						<div class="product-detail-desc">
							<p>
								<?php echo $info['title'];?>
								<br>
								<?php echo htmlspecialchars_decode($info['intro']);?>
							</p>
							<p>
								<a href="javascript:void(0)" title="">
									<?php echo $info['hospital'];?>
								</a>
							</p>
						</div>
					</div>
					<div class="product-price-desc">
						<p class="price-now">¥<?php echo $info['price'];?></p>
						<p class="price-old">数量 <?php echo $info['count'];?></p>
					</div>
				</div>
				<div class="content-item-title">
					选择支付方式
				</div>
				<div class="pay-mode">
					<div class="pay-mode-title">
						微信支付／支付宝
					</div>
					<div class="pay-mode-content">
						<div class="pay-mode-alipay">
							<input type="radio" name="pay_type" value='1' checked='checked'>
							<input type="hidden" name="">
							<span class="pay-mode-img"><img src="/Public/Home/images/pay-mode-alipay.jpg" alt=""></span>
						</div>
						<div class="pay-mode-wechat">
							<input type="radio" name="pay_type" value='2'>
							<input type="hidden" >
							<span class="pay-mode-img"><img src="/Public/Home/images/pay-mode-wechat.jpg" alt=""></span>
						</div>
					</div>
				</div>

				<div class="pay-detail-msg">
					<div class="pay-detail-wrap">
						<div class="pay-detail-title">
							需支付
						</div>
						<div class="pay-detail-price">
							¥<?php echo $info['need_pay'];?>
						</div>
					</div>	
				</div>
				<div class="pay-btn">
					<input id="payment-2" type="submit" value="支付">
					<input type="hidden" name="key" value="<?php echo session('loginKey');?>">
					<input type="hidden" name="order_id" value="<?php echo $info['id'];?>">
					<input type="hidden" name="WIDtotal_fee" value="<?php echo $info['need_pay'];?>">
					<input type="hidden" name="WIDout_trade_no" value="<?php echo $info['id'];?>">
					<input type="hidden" name="WIDsubject" value="<?php echo $info['title'];?>">
				</div>
			</div>
			<!-- step 2 -->
			</form>
		</div>
	</div>
<?php require_once('/Public/Home/footer.html');?>