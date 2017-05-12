<?php if (!defined('THINK_PATH')) exit(); require_once('/Public/Home/header.html');?>
<style type="text/css" media="screen">
	html,body
	{
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
	}
	.activity-container
	{
		width: 100%;
		padding-bottom: 50px;
	}
	.activity-container img
	{
		width: 100%;
	}
	.activity-item-container
	{
		width: 1000px;
		margin: 0 auto;
	}
	.activity-item
	{
		width: 100%;
		height: 500px;
		background: #f1f1f1;
		margin-top: 52px;
		font-size: 0;
	}
	.activity-item-msg
	{
		width: 400px;
		display: inline-block;
		height: 100%;
		box-sizing: border-box;
		vertical-align: top;
	}
	.activity-item-img
	{
		display: inline-block;
		width: 600px;
		height: 100%;
	}
	.activity-item-img img
	{
		width: 100%;
		height: 100%;
	}
	.date-wrap
	{
		display: inline-block;
		width: 320px;
		height: 120px;
		background: #f55758;
		vertical-align: top;
		margin-top: 40px;
		padding: 16px 0 0 42px;
		box-sizing: border-box;
		color: #fff;
	}
	.date-desc
	{
		display: inline-block;
		width: 100px;
		text-align: center;
	}
	.date-desc .month
	{
		font-size: 56px;
		border-bottom: 1px solid #fff;
		line-height: 60px;
	}
	.date-desc .year
	{
		font-size: 14px;
		line-height: 30px;
	}
	.date-title
	{
		display: inline-block;
		width: 140px;
		height:90px;
		border-left: 1px solid #d74344;
		font-size: 32px;
		text-align: center;
		margin-left: 38px;
		box-sizing: border-box;
		vertical-align: top;
		line-height: 45px;
	}
	.activity-desc
	{
		width: 320px;
		box-sizing: border-box;
		font-size: 16px;
		color: #666;
		padding: 40px 0 0 82px;
		line-height: 30px;
	}
	.activity-item-msg .line-h
	{
		width: 42px;
		height: 2px;
		background: #f55758;
		margin: 38px 0 34px 82px;
	}
	.activity-btn a
	{
		display: inline-block;
		width: 150px;
		height: 50px;
		border: 1px solid #666;
		font-size: 20px;
		color: #666;
		text-align: center;
		line-height: 50px;
		text-decoration: none;
		margin-left: 82px;
	}
</style>
<body>

	<!-- header 部分 -->


	<div class="activity-container">
		<div class="activity-banner">
			<img src="/Public/Home/images/activity-banner.jpg" alt="">
		</div>
		<div class="activity-item-container">
		<?php foreach($data as $k => $v):?>
			<!-- activity item -->
			<div class="activity-item">
				<div class="activity-item-msg">
					<div class="date-wrap">
						<div class="date-desc">
							<div class="month"><?php echo date('m',$v['start_time']);?></div>
							<div class="year"><?php echo date('Y',$v['start_time']);?> years</div>
						</div>
						<div class="date-title">
							 活动<br>日期
						</div>
					</div>
					<div class="activity-desc">
						<?php echo htmlspecialchars_decode($v['intro']);?>
					</div>
					<div class="line-h"></div>
					<div class="activity-btn">
						<a href="<?php echo U('Order/despeak?navNum=6&id='.$v['id']);?>" title="">点击预约</a>
					</div>
				</div>
				<div class="activity-item-img">
					<a href="<?php echo U($v['action'].'?navNum=6');?>"><img src="/Public/Uploads/<?php echo $v['pic'];?>" alt=""></a>
				</div>
			</div>
		<?php endforeach;?>
		</div>
	</div>


	<!-- footer部分 -->


<?php require_once('/Public/Home/footer.html');?>