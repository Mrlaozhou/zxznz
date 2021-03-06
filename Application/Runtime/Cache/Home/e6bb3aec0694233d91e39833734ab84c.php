<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>四月华美活动</title>
</head>
<style>
	@font-face{
		font-family: 'FZLTH';
		src: url('/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/fzlth.TTF') format('truetype');
	}
	html,body
	{
		width: 100%;
		height: 100%;
		margin: 0;
		font-family: '微软雅黑';
	}
	header img
	{
		width: 100%;
	}
	.activity-april-desc
	{
		width: 100%;
		height: 480px;
		font-size: 0;
		margin-top: 10px;
		min-width: 1000px;
	}
	.activity-april-desc-text
	{
		display: inline-block;
		width: 50%;
		background: #f85a5b;
		height: 100%;
		box-sizing: border-box;
		vertical-align: top;
		padding-top: 86px;
	}
	.activity-april-desc-text p
	{
		width: 500px;
		float: right;
		font-size: 16px;
		color: #fff;
		margin: 0;
		box-sizing:border-box;
		margin-bottom: 24px;
	}
	.activity-april-desc-img
	{
		display: inline-block;
		width: 50%;
		box-sizing: border-box;
		height: 100%;
		vertical-align: top;
		background: #f5f5f5;
		overflow: hidden;
	}
	.activity-april-desc-img img
	{
		height: 100%;
	}
	.icon-01
	{
		display: inline-block;
		width: 30px;
		height: 24px;
		background: url(/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/icon-01.png);
		background-repeat: no-repeat;
		background-size: 20px auto;
		background-position: 0 5px;
		vertical-align: top;
	}
	.icon-02
	{
		display: inline-block;
		width: 30px;
		height: 24px;
		background: url(/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/icon-02.png);
		background-size: 24px auto;
		background-repeat: no-repeat;
		background-position: 0 5px;
		vertical-align: top;
	}
	.icon-03
	{
		display: inline-block;
		width: 30px;
		height: 24px;
		background: url(/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/icon-03.png);
		background-repeat: no-repeat;
		vertical-align: top;
		background-size: 26px auto;
		background-position: 0 5px;
	}
	.icon-04
	{
		display: inline-block;
		width: 30px;
		height: 24px;
		background: url(/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/icon-04.png);
		background-repeat: no-repeat;
		vertical-align: top;
		background-size: 26px auto;
		background-position: 0 5px;
	}
	.icon-05
	{
		display: inline-block;
		width: 30px;
		height: 24px;
		background: url(/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/icon-05.png);
		background-repeat: no-repeat;
		vertical-align: top;
		background-size: 26px auto;
		background-position: 0 5px;
	}
	.text-content
	{
		display: inline-block;
		vertical-align: top;
		width: 450px;
		line-height: 24px;
		margin-left: 6px;
	}
	.activity-april-info
	{
		width: 100%;
		height: 600px;
		box-sizing: border-box;
	}
	.activity-april-info-center
	{
		width: 1000px;
		height: 100%;
		box-sizing: border-box;
		margin: 0 auto;
	}
	.activity-april-info-title
	{
		text-align: center;
	}
	.activity-april-info-title img
	{
		width: 255px;
		margin-top: 80px;
	}
	.activity-april-info-desc
	{
		font-size: 0;
		margin-top: 70px;
	}
	.info-desc-item
	{
		display: inline-block;
		width: 200px;
		vertical-align: top;
		margin-right: 66.66px;
	}
	.info-desc-item:nth-child(4)
	{
		margin-right: 0;
	}
	.activity-april-arrangement
	{
		width: 100%;
		height: 480px;
		font-size: 0;
		min-width: 1000px;
	}
	.activity-april-arrangement-img
	{
		display: inline-block;
		width: 50%;
		height: 100%;
		box-sizing: border-box;
		overflow: hidden;
		text-align: right;
		background: #e5e8eb;
		vertical-align: top;
	}
	.activity-april-arrangement-img img{
		height: 100%;
	}
	.activity-april-arrangement-text
	{
		display: inline-block;
		width: 50%;
		height: 100%;
		box-sizing: border-box;
		background: #f83e6d;
		vertical-align: top;
		padding: 100px 0 0 60px;
	}
	.activity-arrange-info
	{
		font-size: 14px;
		color: #fff;
		margin-top: 30px;
		line-height: 26px;
		font-family: 'FZLTH';
	}
	.arrange-date
	{
		font-size: 20px;
		color: #fff;
		width: 240px;
		height: 60px;
		text-align: center;
		line-height: 60px;
		border: 1px solid #fff;
		border-radius: 30px;
		margin-top: 30px;
		font-family: 'FZLTH';
	}
</style>
<body>
	<!-- header -->
	<header>
		<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/header-bg.jpg" alt="">
	</header>

	<!-- activity-april desc -->
	<section class="activity-april-desc">
		<div class="activity-april-desc-text">
			<p><span class="icon-01"></span><span class="text-content">E合联盟 & 整形指南针联合打造全国“100家互联网+智慧医美”机构</span></p>
			<p><span class="icon-02"></span><span class="text-content">100+整形项目，100+全球供应商，100+医美机构，100+全球名医</span></p>
			<p><span class="icon-03"></span><span class="text-content">E合联盟携手沪上第一医美品牌「 华美 」与保养品巨头「 海蓝之谜 」强强联手，深度合作，高贵与奢华的碰撞，至高无上的身份象征让你无法错过！</span></p>
			<p><span class="icon-04"></span><span class="text-content">通过“互联网+智慧医美”全新的营销理念展示医美项目的惊人科技成就，为女性带去美、美的生活态度及品味。</span></p>
			<p><span class="icon-05"></span><span class="text-content">充值送海蓝之谜，共同打造跨界品质医美限时超值特购会。</span></p>
		</div>	
		<div class="activity-april-desc-img">
			<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-desc-img.jpg" alt="">
		</div>
	</section>

	<!-- activity-april date && place -->
	<section class="activity-april-info">
		<div class="activity-april-info-center">
			<div class="activity-april-info-title">
				<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-info-title.png" alt="">
			</div>
			<div class="activity-april-info-desc">
				<div class="info-desc-item">
					<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-info-1.png" alt="">
				</div>
				<div class="info-desc-item">
					<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-info-2.png" alt="">
				</div>
				<div class="info-desc-item">
					<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-info-3.png" alt="">
				</div>
				<div class="info-desc-item">
					<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-info-4.png" alt="">
				</div>
			</div>
		</div>	
	</section>

	<!-- activity-april arrangements -->
	<section class="activity-april-arrangement">
		<div class="activity-april-arrangement-img">
			<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-april-arrangement-img.png" alt="">
		</div>
		<div class="activity-april-arrangement-text">
			<div class="activity-arrange-title">
				<img src="/Public/Uploads/Active_img/<?php echo ACTION_NAME;?>/activity-arrange-title.png" alt="">
			</div>
			<div class="activity-arrange-info">
				由E合联盟&整形指南针联合打造『 品质医美限时特购会 』在上海首站华美开展，<br>活动以“品质医美 限时特购”为理念，倡导理性消费，智慧医美。<br>业界权威形象设计师贴身引导，专业服务
			</div>
			<div class="arrange-date">
				4月21日-23日活动3天
			</div>
		</div>
	</section>
</body>
</html>