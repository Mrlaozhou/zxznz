<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>e-matrix</title>
	<style type="text/css" media="screen">
		html,body
		{
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			font-family: "Microsoft Yahei", 'Arial', Helvetica, STHeiTi, sans-serif;
		}
		p
		{
			margin: 0;
			padding: 0;
		}
		.matrix-header-bg img
		{
			width: 100%;
		}
		.content-item
		{
			width: 100%;
			box-sizing: border-box;
			border-bottom: 1px solid #eee;
		}

		/******* e-matrix define module style ******/
		.define-container
		{
			width: 1000px;
			margin: 0 auto;
			padding: 85px 0;
			font-size: 0;
		}
		.matrix-define-img
		{
			display: inline-block;
			width: 440px;
			vertical-align: top;
		}
		.matrix-define-img img
		{
			width: 100%;
		}
		.matrix-define-content
		{
			display: inline-block;
			width: 560px;
			font-size: 18px;
			vertical-align: top;
			box-sizing: border-box;
			padding-top: 80px;
			padding-left: 44px;
		}
		.matrix-define-content .define-title
		{
			font-size: 40px;
			color: #111;
		}
		.matrix-define-content  .define-msg
		{
			font-size: 20px;
			color: #111;
			margin: 36px 0 50px;
		}
		.matrix-define-content .define-line-h
		{
			box-sizing: border-box;
			width: 64px;
			height: 2px;
			background: #999;
		}
		.matrix-define-content .define-sub-msg
		{
			font-size: 16px;
			color: #666;
			margin: 42px 0;
		}
		.matrix-define-content .matrix-define-tag
		{
			width: 150px;
			height: 42px;
			background: #f0ddb3;
			font-size: 22px;
			line-height: 42px;
			text-align: center;
			border-radius: 21px;
			color: #fff;
			margin-top: 40px;
		}



		/******** e-matrix advantage module style ******/
		.advantage-container
		{
			width: 1000px;
			margin: 0 auto;
			padding-bottom: 80px;
		}
		.matrix-advantage-title
		{
			text-align: center;
			margin: 80px 0 60px;
		}
		.matrix-advantage-title img
		{
			width: 312px;
		}
		.matrix-advantage-msg
		{
			font-size: 0;
		}
		.matrix-advantage-msg .msg-item
		{
			display: inline-block;
			width: 240px;
			height: 474px;
			background: #f3f3f2;
			box-sizing: border-box;
			font-size: 18px;
			margin-right: 13.33px;
			text-align: center;
			padding-top: 44px;
			vertical-align: top;
		}
		.matrix-advantage-msg .msg-item:nth-child(4)
		{
			margin-right: 0;
		}
		.matrix-advantage-msg .advantage-msg-title
		{
			font-size: 20px;
			color-rendering: #000;
		}
		.matrix-advantage-msg .advantage-msg-img img
		{
			width: 200px;
			margin: 30px 0;
		}
		.matrix-advantage-msg .advantage-msg-text
		{
			font-size: 16px;
			color: #666;
			padding: 0 20px;
			line-height: 26px;
		}


		/******** e-matrix difference module style ******/
		.matrix-defference-container
		{
			width: 1000px;
			margin: 0 auto;
			font-size: 0;
			position: relative;
		}
		.matrix-difference-info
		{
			font-size: 16px;
			display: inline-block;
			width: 600px;
			box-sizing: border-box;
			padding: 206px 58px 0px 136px;
			vertical-align: top;
		}
		.matrix-difference-info .difference-info-title
		{
			color: #333;
			font-weight: bold;
			margin-bottom: 40px;
		}
		.matrix-difference-info .difference-info-1,.matrix-difference-info .difference-info-2
		{
			color: #666;
			line-height: 26px;
			margin-bottom: 42px;
		}
		.matrix-difference-img
		{
			display: inline-block;
			width: 400px;
		}
		.matrix-difference-img
		{
			padding: 80px 0 74px;
		}
		.matrix-difference-icon
		{
			position: absolute;
			top: 0;
			left: 0;
		}




		/******** e-matrix Suitable for the crowd module style ******/
		.matrix-crowd-container
		{
			width: 1000px;
			margin: 0 auto;
			font-size: 0;
		}
		.matrix-crowd-img
		{
			display: inline-block;
			width: 520px;
			padding-top: 204px;
		}
		.matrix-crowd-info
		{
			display: inline-block;
			width: 480px;
			font-size: 20px;
			vertical-align: top;
			padding: 82px 0 0 84px;
			box-sizing: border-box;
			color: #666;
		}
		.matrix-crowd-title img
		{
			width: 212px;
			margin-bottom: 40px;
		}
		.matrix-crowd-info p
		{
			margin: 12px 0;
		}



		/******** e-matrix program module style ******/
		.matrix-program-container
		{
			width: 1000px;
			margin: 0 auto;
			padding-bottom: 30px;
		}
		.matrix-program-title
		{
			text-align: center;
		}
		.matrix-program-title img
		{
			width: 240px;
			margin: 78px 0 46px;
		}
		.matrix-program-step
		{
			font-size: 0;
		}
		.step-item
		{
			display: inline-block;
			width: 210px;
			height: 260px;
			box-sizing: border-box;
			text-align: center;
			color: #333;
			vertical-align: top;
		}
		.step-desc
		{
			font-size: 20px;
			display: inline-block;
			width: 130px;
			height: 130px;
			box-sizing: border-box;
			text-align: center;
			line-height: 130px;
			border-radius: 65px;
			border: 1px solid #b5b5b5;
		}
		.step-info
		{
			font-size: 14px;
			box-sizing: border-box;
			padding: 20px 50px 0;
			text-align: left;
			line-height: 24px;
		}
		.step-arrow
		{
			display: inline-block;
			width: 53.33px;
			height: 260px;
			background: url(<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-program-arrow.png);
			background-size: 18px 64px;
			background-repeat: no-repeat;
			background-position: 10px 32px;
			vertical-align: top;
		}



		/******** e-matrix treatment module style ******/
		.matrix-treatment-container
		{
			width: 1000px;
			margin: 0 auto; 
			padding-bottom: 90px;
		}
		.matrix-treatment-title
		{
			text-align: center;
		}
		.matrix-treatment-title img
		{
			width: 240px;
			margin: 84px 0 52px;
		}
		.matrix-treatment-info
		{
			text-align: center;
			box-sizing: border-box;
			padding: 0 145px;
		}
		.main-desc
		{
			font-size: 20px;
			color: #333;
			font-weight: bold;
		}
		.desc-step-title
		{
			font-size: 20px;
			color: #333;
			font-weight: bold;
			margin: 30px 0;
		}
		.desc-step-info
		{
			font-size: 16px;
			color: #999;
		}

	</style>
</head>
<body>
	<!-- e-matrix header backgorund image -->
	<div class="matrix-header-bg">
		<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-header-bg.jpg" alt="">
	</div>

	<!-- e-matrix content container -->
	<div class="matrix-container">

		<!-- content item-1 e-matrix define -->
		<div class="content-item">
			<div class="define-container">
				<div class="matrix-define-img">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-define.jpg" alt="">
				</div>
				<div class="matrix-define-content">
					<div class="define-title">
						E-matrix定义
					</div>
					<div class="define-msg">
						E-matrix超级嫩肤技术是美国食品药品管理局认证的一种非侵入性通过去皱达到嫩肤紧肤目的的治疗。
					</div>
					<div class="define-line-h"></div>
					<div class="define-sub-msg">
						E-matrix是全球款RF像素射频设备，它是一种独有的创新型智能换肤平台，将强大的射频技术应用于皮肤脱剥和肌肤再生，控制皮肤剥脱深度和周围组织凝固范围，达到的肌肤生效果。
					</div>
					<div class="define-line-h"></div>
					<div class="matrix-define-tag">
						E-matrix
					</div>
				</div>
			</div>
		</div>

		<!-- content item-2 e-matrix advantage -->
		<div class="content-item">
			<div class="advantage-container">
				<div class="matrix-advantage-title">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-advantage-title.png" alt="">
				</div>
				<div class="matrix-advantage-msg">
					<div class="msg-item">
						<div class="advantage-msg-title">
							更广的适用范围
						</div>
						<div class="advantage-msg-img">
							<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-advantage-1.jpg" alt="">
						</div>
						<div class="advantage-msg-text">
							设有三种智能程序，可以解决皮肤皱纹、松弛、组织凹陷(例如痤疮疤痕)、毛孔粗大等问题;
						</div>
					</div>
					<div class="msg-item">
						<div class="advantage-msg-title">
							更高的安全性
						</div>
						<div class="advantage-msg-img">
							<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-advantage-2.jpg" alt="">
						</div>
						<div class="advantage-msg-text">
							E-matrix突破了传统激光"恢复期长"、"色素沉着"等风险，将热量最大程度地置于真皮层内，降低了表皮灼伤的几率
						</div>
					</div>
					<div class="msg-item">
						<div class="advantage-msg-title">
							更好的焕肤效果
						</div>
						<div class="advantage-msg-img">
							<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-advantage-3.jpg" alt="">
						</div>
						<div class="advantage-msg-text">
							由于结合了射频能量，可以获得比单独应用光子设备更好的治疗效果
						</div>
					</div>
					<div class="msg-item">
						<div class="advantage-msg-title">
							更舒适的治疗过程
						</div>
						<div class="advantage-msg-img">
							<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-advantage-4.jpg" alt="">
						</div>
						<div class="advantage-msg-text">
							E-matrix的能量穿透更柔和，能量更均匀、更稳定，所以治疗过程完全没有不适感
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- content item-3 e-matrix difference -->
		<div class="content-item">
			<div class="matrix-defference-container">
				<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-difference-icon.png" alt="" class="matrix-difference-icon">
				<div class="matrix-difference-info">
					<div class="difference-info-title">
						像素射频更优于像素激光。
					</div>
					<div class="difference-info-1">
						1、像素激光仅仅为单一波长，治疗的适应症相对比较单一，更要选择客人的皮肤类型，对于不同的色素部位累积的能量也不同。
					</div>
					<div class="difference-info-2">
						2、像素射频不受色素影响，可以治疗任何颜色的皮肤，每次治疗都可以看到综合性的效果改善。一台像素射频相当于数台像素激光。而且对于皮肤的治疗，保养更为，照射更加均匀，效果也更显著和稳定。
					</div>
				</div>
				<div class="matrix-difference-img">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-difference.png" alt="">
				</div>
			</div>
		</div>

		<!-- content item-4 e-matrix Suitable for the crowd -->
		<div class="content-item">
			<div class="matrix-crowd-container">
				<div class="matrix-crowd-img">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-crowd.png" alt="">
				</div>
				<div class="matrix-crowd-info">
					<div class="matrix-crowd-title">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-crowd-title.png" alt="">
					</div>
					<div class="matrix-crowd-text">
					    <p>1、面部深层皱纹明显的人群</p>
					    <p>2、面部有痤疮瘢痕的人群</p>
					    <p>3、毛孔粗大人群</p>
					    <p>4、面部皮肤松弛，呈现老化的人群</p>
					    <p>5、肤色不均的人群</p>
					    <p>6、妊娠纹、红血丝</p>
					</div>
				</div>
			</div>
		</div>

		<!-- content item-5 e-matrix program -->
		<div class="content-item">
			<div class="matrix-program-container">
				<div class="matrix-program-title">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-program-title.png" alt="">
				</div>
				<div class="matrix-program-step">
					<!-- step item 1 -->
					<div class="step-item">
						<div class="step-desc">
							术前沟通
						</div>
						<div class="step-info">
							建病历交代治疗过程，术前术后和术中的反应等
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 2 -->
					<div class="step-item">
						<div class="step-desc">
							皮肤检测
						</div>
						<div class="step-info">
							visa进行皮肤术前评估和留下首次皮肤纪录
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 3 -->
					<div class="step-item">
						<div class="step-desc">
							清洁肌肤
						</div>
						<div class="step-info">
							主要是清除化妆品
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 4 -->
					<div class="step-item">
						<div class="step-desc">
							敷表麻膏
						</div>
						<div class="step-info">
							一般情况下最好在20分钟左右
						</div>
					</div>

					<!-- step item 5 -->
					<div class="step-item">
						<div class="step-desc">
							消毒皮肤
						</div>
						<div class="step-info">
							去除麻药后，用洁尔灭或酒精简单消毒去油脂
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 6 -->
					<div class="step-item">
						<div class="step-desc">
							术前准备
						</div>
						<div class="step-info">
							开机后安装好治疗头，准备好酒精和纱布等备用
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 7 -->
					<div class="step-item">
						<div class="step-desc">
							精心治疗
						</div>
						<div class="step-info">
							划分好治疗区域按顺序治疗，不断给患者安慰
						</div>
					</div>
					<div class="step-arrow"></div>

					<!-- step item 8 -->
					<div class="step-item">
						<div class="step-desc">
							术后交代
						</div>
						<div class="step-info">
							防水防晒，必须结合药妆品的使用
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- content item-5 e-matrix treatment -->
		<div class="content-item">
			<div class="matrix-treatment-container">
				<div class="matrix-treatment-title">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>matrix-treatment-title.png" alt="">
				</div>
				<div class="matrix-treatment-info">
					<div class="main-desc">
						面部美容一般根据情况定为3-4次一疗程，治疗间隔也是根据情况而定，一般间隔时间在1个半月左右。
					</div>
					<p class="desc-step-title">- 即刻反应 -</p>
					<p class="desc-step-info">治疗后即刻至数小时出现治疗区域轻度红肿，微热感，表皮会有治疗头形状凸起。</p>
					<p class="desc-step-title">- 结痂期 -</p>
					<p class="desc-step-info">治疗后1-2天出现，皮肤伴随轻微刺痒感，略有紧致效果。</p>
					<p class="desc-step-title">- 结痂脱落期 -</p>
					<p class="desc-step-info">视部位以及皮肤恢复情况而定，此时皮肤细腻弹滑有光泽，浅表皱纹消失，毛孔粗大和色斑减轻。</p>
					<p class="desc-step-title">- 皮肤深层恢复期 -</p>
					<p class="desc-step-info">治疗后半个月至两个月，无明显不适感，深皱纹以及严重痤疮瘢痕等逐步恢复，效果渐渐明显。此阶段同样需注意防晒和修复。</p>
				</div>
			</div>
		</div>




	</div>
</body>
</html>