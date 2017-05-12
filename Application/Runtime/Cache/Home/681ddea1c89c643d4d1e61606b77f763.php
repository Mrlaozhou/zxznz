<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>永久消除眼泡</title>
</head>
<style>
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
	.treatment-container
	{
		width: 100%;
		height: 1050px;
	}
	.treatment
	{
		width: 1000px;
		height: 100%;
		margin: 0 auto;
		background: #fff;
	}
	.treatment-title
	{
		text-align: center;
		margin-top: 60px;
	}
	.treatment-title img
	{
		width: 305px;
	}
	.treatment-date
	{
		width: 582px;
		height: 134px;
		border-radius: 8px;
		box-sizing: border-box;
		border: 1px dashed #4b5ab6;
		margin: 46px auto 0;
		font-size: 30px;
		color: #4a5ab6;
		text-align: center;
		line-height: 134px;
	}
	.treatment-method-title
	{
		text-align: center;
		margin-top: 84px;
	}
	.treatment-method-title img
	{
		width: 396px;
	}
	.treatment-method-desc
	{
		width: 582px;
		height: 134px;
		border-radius: 8px;
		box-sizing: border-box;
		border: 1px dashed #4b5ab6;
		margin: 54px auto 0;
		font-size: 15px;
		color: #4a5ab6;
		padding: 30px 30px 0;
		line-height: 24px;
	}
	.treatment-method-img
	{
		text-align: center;
		margin-top: 54px;
	}
	.indications-container
	{
		width: 100%;
		height: 600px;
		background: #485ab4;
	}
	.indications
	{
		width: 1000px;
		margin: 0 auto;
	}
	.indications-title
	{
		text-align: center;
	}
	.indications-title img
	{
		margin-top: 60px;
		width: 220px;
	}
	.indications-info
	{
		margin-top: 66px;
		font-size: 0;
	}
	.indications-info-img
	{
		display: inline-block;
		margin: 0 34px 0 42px;
		vertical-align: top;
	}
	.indications-info-desc
	{
		display: inline-block;
		width: 516px;
		font-size: 16px;
		color: #fff;
		vertical-align: top;
		box-sizing: border-box;
		padding-top: 10px;
	}
	.indications-info-desc p
	{
		margin: 0;
		line-height: 26px;
	}
	.indications-info-desc h1
	{
		font-size: 26px;
		color: #fff;
		font-weight: bold;
		margin: 10px 0;
	}
	.indications-info-desc .icon-line-v
	{
		width: 20px;
		height: 1px;
		background: #fff;
		margin: 38px 0 38px 2px;
	}
	.problems-container
	{
		width: 100%;
		height: 800px;
	}
	.problems
	{
		width: 1000px;
		height: 100%;
		margin: 0 auto;
		box-sizing: border-box;
	}
	.problems-title
	{
		text-align: center;
	}
	.problems-title img
	{
		width: 659px;
		margin-top: 82px;
		margin-bottom: 90px;
	}
	.problem
	{
		margin-bottom: 60px;
	}
	.question
	{
		background: url(/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/icon-question.jpg);
		background-repeat: no-repeat;
		line-height: 30px;
		padding-left: 40px;
		font-size: 20px;
		color: #333;
		margin-bottom: 20px;
	}
	.anwser
	{
		
		line-height: 36px;
		color: #666;
		font-size: 16px;
	}
	.anwser-title
	{
		background: url(/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/icon-anwser.png);
		background-position: 0 10px;
		background-repeat: no-repeat;
		display: inline-block;
		box-sizing: border-box;
		width: 130px;
		vertical-align: top;
		padding-left: 40px;
		line-height: 36px;
	}
	.anwser-desc
	{
		display: inline-block;
		width: 790px;
		vertical-align: top;
		box-sizing: border-box;
		padding-left: 32px;
		text-indent:-32px;
	}
	.anwser-desc p
	{
		margin: 0;
	}
</style>
<body>
	<header>
		<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/header-bg.jpg" alt="">
	</header>

	<section class="treatment-container">
		<div class="treatment">
			<div class="treatment-title">
				<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/treatment-title.png" alt="">
			</div>
			<div class="treatment-date">
				当次见效，一周后可拆。
			</div>
			<div class="treatment-method-title">
				<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/treatment-method-title.png" alt="">
			</div>
			<div class="treatment-method-desc">
				局部麻醉，切开皮肤取部分眼轮匝肌，提到切口外剪除。然后寻找最佳处，用甲紫小标记，深入切口寻找眶隔脂肪，剪破眶隔膜，将脂肪剪除，完全止血，行三点或两点埋线。
			</div>
			<div class="treatment-method-img">
				<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/treatment-method-img.jpg" alt="">
			</div>
		</div>
	</section>

	<section class="indications-container">
		<div class="indications">
			<div class="indications-title">
				<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/indications-title.png" alt="">
			</div>
			<div class="indications-info">
				<div class="indications-info-img">
					<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/indications-info-img.png" alt="">
				</div>
				<div class="indications-info-desc">
					<p>
						埋线双眼皮不切开皮肤，对眼部改动的少，所以就没办法解决上睑皮肤厚、
						肿泡眼、上睑皮肤松弛等问题，只适合皮肤无松弛，弹性好，皮下脂肪充
						盈适度的正力型单睑。
					</p>
					<p class="icon-line-v"></p>
					<h1>优点</h1>
					<p>
						操作简单，易于掌握，创伤小，形成的重睑线皱襞固定，外形自然，术后
						水肿较轻，不影响读书或上班工作。一旦失败可改用切开法修整。
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="problems-container">
		<div class="problems">
			<div class="problems-title">
				<img src="/Public/Uploads/Publish_img/<?php echo ACTION_NAME;?>/problems-title.png" alt="">
			</div>
			<div class="problem">
				<div class="question">
					一、重睑线变浅:多见于埋线法微创的手术方法。
				</div>
				<div class="anwser">
					<div class="anwser-title">
						处理方法：
					</div>
					<div class="anwser-desc">
						<p>(1) 埋线法所致重睑线变浅，对于眼睑皮肤较薄，无明显松弛者，仍可选择埋线法。首先去除原先埋置缝线，然后重新埋置。对于上睑臃肿者应改为切开法。</p>
						<p>(2) 重睑线的长度不够，造成重睑线半截者，可以在消失部位重新埋置，可以采用单点法，也可以采用连续法。</p>	
						<p>(3) 切开法导致的重睑线变浅，需要再次行切开法，适量去除睑板前组织，重新缝合固定切口处皮肤。</p>	
					</div>
				</div>
			</div>
			<div class="problem">
				<div class="question">
					二、重睑过窄：指睁眼平视时，重睑线不能外露或宽度过窄，出现“隐双”。
				</div>
				<div class="anwser">
					<div class="anwser-title">
						处理方法：
					</div>
					<div class="anwser-desc">
						<p>(1) 对于埋线位置过低的重睑线过窄，可拆除原缝线，重新在较高位置设计重睑线并重新埋置缝线。</p>
						<p>(2) 对于皮肤过度松弛导致的重睑线过窄，无论埋线法还是切开法，都应再次采取切开法手术，去除松弛皮肤，重新形成重睑。</p>
						<p>(3) 还可结合眉提升术矫正上睑皮肤松弛问题。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>