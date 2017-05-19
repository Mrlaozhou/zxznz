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
	.submit-product-info
	{
		text-align: right;
		border-bottom: 1px solid #d11337;
	}
	.submit-product-info .info-container
	{
		display: inline-block;
		width: 310px;
		box-sizing: border-box;
		font-size: 0;
	}
	.submit-product-info .info-title
	{
		display: inline-block;
		width: 80px;
		font-size: 14px;
		color: #333;
		float: left;
		text-align: left;
		line-height: 30px;
	}
	.submit-product-info .product-num
	{
		padding-bottom: 15px;
		border-bottom: 1px solid #ddd;
	}
	.submit-product-info .product-num span
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		text-align: center;
		line-height: 30px;
		font-size: 14px;
		color: #666;
		border: 1px solid #ddd;
		box-sizing: border-box;
		vertical-align: top;
		cursor: pointer;
	}
	.submit-product-info .product-num input
	{
		width: 60px;
		height: 30px;
		box-sizing: border-box;
		outline: none;
		vertical-align: top;
		margin: 0;
		border: 1px solid #ddd;
		border-left: none;
		border-right: none;
		font-size: 14px;
		text-align: center;
		color: #666;
	}
	.submit-product-info .product-price-unit
	{
		padding: 15px 0;
		border-bottom: 1px solid #ddd;
	}
	.submit-product-info .product-price-unit .product-price-unit-desc
	{
		font-size: 16px;
		color: #999;
		line-height: 30px;
	}
	.submit-product-info .product-price-total
	{
		padding: 15px 0 30px;
	}
	.submit-product-info .product-price-total .product-price-total-desc
	{
		font-size: 30px;
		color: #d11337;
		line-height: 30px;
	}
	.pay-step-1 .pay-btn
	{
		text-align: right;
	}
	.pay-step-1 .pay-btn input
	{
		display: inline-block;
		width: 220px;
		height: 50px;
		text-align: center;
		line-height: 50px;
		background: #d11337;
		color: #fff;
		font-size: 20px;
		text-decoration: none;
		margin: 20px 0 50px;
		border:none;
		cursor: pointer;
	}
</style>
<body>
	<div class="pay-container">
		<div class="pay-step-guide">
			<div class="step-guide-item active">
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
		<form action="<?php echo U('Order/createOrder');?>" method="post" accept-charset="utf-8">	
			<div class="pay-step-1 pay-step-item">
				<div class="content-item-title">
					确认购买产品
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
						<p class="price-now">
							¥<?php echo $info['price'];?>
						</p>
						<!-- <p class="price-old">¥3900</p> -->
					</div>
				</div>
				<div class="submit-product-info">
					<div class="info-container">
						<div class="product-num">
							<div class="info-title">
								个数
							</div>
							<div class="info-desc">
								<span id="down" onselectstart="return false;" style="-moz-user-select: none;">-</span>
								<input type="text" name="count" value="1" id="product-num">
								<input type="hidden" name="">
								<span id="add" onselectstart="return false;" style="-moz-user-select: none;">+</span>
							</div>
						</div>
						<div class="product-price-unit">
							<div class="info-title">
								商品金额
							</div>
							<div class="product-price-unit-desc">
								¥<span id="unit"><?php echo $info['price'];?></span>
							</div>
						</div>
						<div class="product-price-total">
							<div class="info-title">
								需支付
							</div>
							<div class="product-price-total-desc">
								 ¥<span id="total"><?php echo $info['price'];?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="pay-btn">
					<input type="submit" id='payment' value="创建订单">
					<input type="hidden" name="active_id" value="<?php echo $info['id'];?>">
				</div>
			</div>
		</form>
		</div>
	</div>


<script>
	$(function(){

		// 去付款按钮
		$('#payment').click(function(){
			$('.pay-step-item').eq(1).show().siblings().hide();
			$('.step-guide-item').eq(1).addClass('active').siblings().removeClass('active');
		});

		// 支付按钮
		$('#payment-2').click(function(){
			$('.pay-step-item').eq(2).show().siblings().hide();
			$('.step-guide-item').eq(2).addClass('active').siblings().removeClass('active');
		})

		// 添加数量按钮
		$('#add').click(function(){
			var num=$('#product-num').val();
			num++;
			$('#product-num').val(num);
			updateTotal();
		})
		// 减少数量按钮
		$('#down').click(function(){
			var num=$('#product-num').val();
			if(num>1)
			{
				num--;
				$('#product-num').val(num);
			}else{
				return false;
			}
			updateTotal();
		})
		// 手动修改数量
		$('#product-num').blur(function(){
			updateTotal();
		})

		// 更新总额函数 
		function updateTotal(){
			var total=$("#unit").html()*$("#product-num").val();
			$('#total').html(total);
		}
	})

</script>
<?php require_once('/Public/Home/footer.html');?>