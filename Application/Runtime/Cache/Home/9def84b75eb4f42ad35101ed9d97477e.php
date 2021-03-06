<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>面部精微吸脂术</title>
</head>
<style type="text/css" media="screen">
	html,body
	{
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		font-family: "Microsoft Yahei", 'Arial', Helvetica, STHeiTi, sans-serif;
	}
	.header-bg
	{
		height: 800px;
		width: 100%;
		background: #dcf6f4;
	}
	.header-center
	{
		width: 1000px;
		height: 100%;
		margin: 0 auto;
		position: relative;
	}
	.header-img-text
	{
		width: 420px;
		position: absolute;
		left: 0;
		bottom: 270px;
	}
	.header-img-banner
	{
		width: 630px;
		position: absolute;
		bottom: 0;
		right: -32px;
	}
	.header-dashed
	{
		width: 0;
		height: 384px;
		border-left: 1px dashed #666;
		position: absolute;
		left: 0;
		bottom: -114px;
	}
	.liposuction-container
	{
		padding-bottom: 200px;
	}
	/****** Facial subtle liposuction meaning *****/
	.meaning-container
	{
		width: 1000px;
		height: 930px;
		border: 1px dashed #666;
		margin: 0 auto;
		margin-top: 114px;
		box-sizing: border-box;
		border-left: none;
	}
	.meaning-title
	{
		width: 440px;
		height: 110px;
		box-sizing: border-box;
		border: 1px dashed #666;
		text-align: center;
		margin: -55px auto 0;
		background: #fff;
		padding-top: 12px;
	}
	.main-title
	{
		font-size: 50px;
		color: #222;
		font-weight: bold;
	}
	.sub-title
	{
		font-size: 20px;
		color: #666;
	}
	.meaning-img
	{
		display: inline-block;
		width: 440px;
		margin-top: 112px;
		vertical-align: top;
	}
	.meaning-img img
	{
		width: 100%;
	}
	.meaning-content
	{
		font-size: 0;
	}
	.meaning-text
	{
		display: inline-block;
		width: 550px;
		font-size: 18px;
		vertical-align: top;
		box-sizing: border-box;
		padding: 75px 0 0 95px;
		margin-top: 112px;
	}
	.meaning-text .ch
	{
		font-size: 30px;
		color: #333;
		margin-bottom: 38px;
		line-height: 40px;
	}
	.meaning-text .en
	{
		font-size: 15px;
		color: #999;
	}
	.meaning-text .line-h
	{
		display: inline-block;
		width: 62px;
		height: 2px;
		background: #666;
		margin-top: 60px;
	}

	/****** Applicable to the five groups *****/
	.groups-container
	{
		width: 1000px;
		height: 500px;
		margin: 0 auto;
		border-left: 1px dashed #666;
		box-sizing: border-box;
	}
	.groups-title
	{
		width: 440px;
		height: 110px;
		box-sizing: border-box;
		border: 1px dashed #666;
		text-align: center;
		position: relative;
		top: -55px;
		margin: 0 auto;
		background: #fff;
		padding-top: 12px;
	}
	.groups-content
	{
		margin-top: 60px;
	}
	.groups-content .item-img
	{
		display: inline-block;
		width:  92px;
		height: 92px;
		border-radius: 46px;
		border: 1px dashed #666;
		text-align: center;
	}
	.groups-content .item-img img
	{
		width: 32px;
		margin-top: 15px;
	}
	.groups-content p
	{
		margin: 0;
		font-size: 24px;
		color: #333;
	}
	.groups-content .content-item-1
	{
		display: inline-block;
		width: 160px;
		height: 160px;
		margin-left: 58px; 
		text-align: center;
		vertical-align: top;
	}
	.groups-content .content-item-2
	{
		display: inline-block;
		width: 100px;
		height: 160px;
		margin-left: 64px; 
		text-align: center;
		vertical-align: top;
	}
	.groups-content .content-item-3
	{
		display: inline-block;
		width: 114px;
		height: 160px;
		margin-left: 86px; 
		text-align: center;
		vertical-align: top;
	}
	.groups-content .content-item-4
	{
		display: inline-block;
		width: 100px;
		height: 160px;
		margin-left: 86px; 
		text-align: center;
		vertical-align: top;
	}
	.groups-content .content-item-5
	{
		display: inline-block;
		width: 100px;
		height: 160px;
		margin-left: 86px; 
		text-align: center;
		vertical-align: top;
	}
	.groups-content .item-text
	{
		font-size: 16px;
		color: #333;
		margin-top: 20px;
		line-height: 24px;
	}

	/****** Surgical approach ******/
	.surgical-container
	{
		width: 1000px;
		height: 1380px;
		border: 1px dashed #666;
		margin: 0 auto;
		border-left: none;
	}
	.surgical-title
	{
		width: 440px;
		height: 110px;
		box-sizing: border-box;
		border: 1px dashed #666;
		text-align: center;
		position: relative;
		top: -55px;
		margin: 0 auto;
		background: #fff;
		padding-top: 12px;
	}
	.surgical-item-1
	{
		font-size: 0;
	}
	.surgical-item-1 .item-text
	{
		width: 460px;
		display: inline-block;
		box-sizing: border-box;
		margin-top: 190px;
	}
	.surgical-item-1 .item-text .main-text
	{
		font-size: 26px;
		color: #333;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-1 .item-text .main-text span
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		border-radius: 15px;
		border: 1px dashed #666;
		text-align: center;
		line-height: 30px;
		font-size: 14px;
		color: #666;
		vertical-align: top;
		margin-left: 10px
	}
	.surgical-item-1 .item-text .sub-text
	{
		font-size: 20px;
		color: #666;
		font-weight: bold;
		margin-bottom: 20px;
		vertical-align: top;
	}
	.surgical-item-1 .item-img
	{
		width: 520px;
		display: inline-block;
		vertical-align: top;
		margin-top: 50px;
		vertical-align: top;
	}
	.surgical-item-1 .item-img img
	{
		width: 510px;
	}
	.surgical-item-2
	{
		font-size: 0;
	}
	.surgical-item-2 .item-img
	{
		display: inline-block;
		width: 500px;
		margin-top: 106px;
		vertical-align: top;
	}
	.surgical-item-2 .item-img img
	{
		width: 100%;
	}
	.surgical-item-2 .item-text
	{
		width: 500px;
		display: inline-block;
		box-sizing: border-box;
		margin-top: 94px;
		padding-left: 30px;
		vertical-align: top;
	}
	.surgical-item-2 .item-text .main-text
	{
		font-size: 26px;
		color: #333;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-2 .item-text .main-text span
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		border-radius: 15px;
		border: 1px dashed #666;
		text-align: center;
		line-height: 30px;
		font-size: 14px;
		color: #666;
		vertical-align: top;
		margin-left: 10px
	}
	.surgical-item-2 .item-text .sub-text
	{
		font-size: 20px;
		color: #666;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-3
	{
		font-size: 0;
	}
	.surgical-item-3 .item-text
	{
		width: 460px;
		display: inline-block;
		box-sizing: border-box;
		margin-top: 120px;
		vertical-align: top;
	}
	.surgical-item-3 .item-text .main-text
	{
		font-size: 26px;
		color: #333;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-3 .item-text .main-text span
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		border-radius: 15px;
		border: 1px dashed #666;
		text-align: center;
		line-height: 30px;
		font-size: 14px;
		color: #666;
		vertical-align: top;
		margin-left: 10px
	}
	.surgical-item-3 .item-text .sub-text
	{
		font-size: 20px;
		color: #666;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-3 .item-img
	{
		width: 520px;
		display: inline-block;
		vertical-align: top;
		margin-top: 90px;
		vertical-align: top;
	}
	.surgical-item-3 .item-img img
	{
		width: 510px;
	}
	.surgical-item-4
	{
		font-size: 0;
	}
	.surgical-item-4 .item-img
	{
		display: inline-block;
		width: 425px;
		margin-top: 100px;
		vertical-align: top;
	}
	.surgical-item-4 .item-img img
	{
		width: 100%;
	}
	.surgical-item-4 .item-text
	{
		width: 500px;
		display: inline-block;
		box-sizing: border-box;
		margin-top: 160px;
		padding-left: 30px;
		vertical-align: top;
	}
	.surgical-item-4 .item-text .main-text
	{
		font-size: 26px;
		color: #333;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.surgical-item-4 .item-text .main-text span
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		border-radius: 15px;
		border: 1px dashed #666;
		text-align: center;
		line-height: 30px;
		font-size: 14px;
		color: #666;
		vertical-align: top;
		margin-left: 10px
	}
	.surgical-item-4 .item-text .sub-text
	{
		font-size: 20px;
		color: #666;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.process-container
	{
		width: 1000px;
		height: 2080px;
		border-left: 1px dashed #666;
		margin: 0 auto;
		position: relative;
	}
	.process-content
	{
		font-size: 0;
	}
	.process-item
	{
		margin-bottom: 38px;
	}
	.process-title
	{
		width: 440px;
		height: 110px;
		box-sizing: border-box;
		border: 1px dashed #666;
		text-align: center;
		position: relative;
		top: -55px;
		margin: 0 auto;
		background: #fff;
		padding-top: 12px;
	}
	.process-item-tag
	{
		display: inline-block;
		width: 92px;
		height: 92px;
		border-radius: 46px;
		border: 1px dashed #666;
		text-align: center;
		box-sizing: border-box;
		margin: 0 32px 20px;
		vertical-align: middle;
		padding-top: 6px;
	}
	.process-text
	{
		display: inline-block;
		width: 840px;
		font-size: 20px;
		color: #333;
		vertical-align: middle;
	}
	.process-item-tag .tag-index
	{
		font-size: 36px;
		color: #333;
	}
	.process-item-tag .tag-msg
	{
		font-size: 18px;
		color: #333;
	}
	.process-compare
	{
		font-size: 0;
	}
	.compare-item-1
	{
		display: inline-block;
		width: 300px;
		height: 530px;
		box-sizing: border-box;
		padding: 35px 26px 0 50px;
		border: 1px solid #ddd;
		vertical-align: bottom;
		text-indent:-20px;
		margin-left: 20px;
	}
	.compare-item-1 p,.compare-item-2 p,.compare-item-3 p
	{
		margin: 0;
		padding: 0;
		line-height: 24px;
		font-size: 14px;
		color: #666;
		margin-left: 
	}
	.compare-item-2
	{
		display: inline-block;
		width: 300px;
		height: 390px;
		box-sizing: border-box;
		padding: 35px 0px 0 36px;
		border: 1px solid #ddd;
		vertical-align: bottom;
		text-indent:-18px;
		margin: 0 40px;
	}
	.compare-item-3
	{
		display: inline-block;
		width: 300px;
		height: 600px;
		box-sizing: border-box;
		border: 1px solid #ddd;
		padding: 35px 0 0 36px;
		vertical-align: bottom;
		text-indent:-18px;
	}
	.compare-title
	{
		font-size: 22px;
		color: #333;
		font-weight: bold;
		margin-bottom: 30px;
	}
	.process-qa
	{
		box-sizing: border-box;
		padding: 52px 122px 0 24px;
	}
	.qa-title
	{
		font-size: 20px;
		color: #333;
		line-height: 30px;
		margin-bottom: 22px;
	}
	.qa-title .q
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>icon-q.jpg);
		background-size: 100% 100%;
		vertical-align: middle;
		margin-right: 8px;
	}
	.qa-text
	{
		font-size: 16px;
		color: #666;
		line-height: 26px;
		padding-left: 38px;
		text-indent: -38px;
		margin-bottom: 34px;
	}
	.qa-text .a
	{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>icon-a.png);
		background-size: 19px 16px;
		background-position: 5px 5px;
		background-repeat: no-repeat;
		vertical-align: middle;
		margin-right: 8px;
	}
	.corner-in
	{
		width: 30px;
		height: 30px;
		background: #666;
	}
	.corner
	{
		width: 50px;
		height: 50px;
		border: 1px dashed #666;
		box-sizing: border-box;
		padding: 9px;
		position: absolute;
		bottom: 0;
		left: 0;
		border-left: none;
	}
</style>
<body>
	<div class="header-bg">
		<!-- <img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>liposuction-header-bg.jpg" alt=""> -->
		<div class="header-center">
			<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>header-img-1.png" alt="" class="header-img-text">
			<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>header-img-2.png" alt="" class="header-img-banner">
			<div class="header-dashed">
				
			</div>
		</div>
	</div>

	<div class="liposuction-container">
		
		<!-- Facial subtle liposuction meaning -->
		<div class="meaning-container">
			<div class="meaning-title">
				<div class="main-title">面部精微吸脂含义</div>
				<div class="sub-title">Facial subtle liposuction meaning</div>
			</div>
			<div class="meaning-content">
				<div class="meaning-img">
					<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>liposuction-meaning-img.jpg" alt="">
				</div>
				<div class="meaning-text">
					<div class="ch">
						采用层处理抽吸新技术<br>吸除皮下多余脂肪<br>改善面部形态<br>恢复皮肤弹性<br>消除松弛感
					</div>
					<div class="en">
						Adopting layer processing to suck new technology<br>Absorb subcutaneous excess fat<br>Improve facial form<br>Restore skin elasticity<br>Eliminate relaxation
					</div>
					<div class="line-h"></div>
				</div>
			</div>
		</div>

		<!-- Applicable to the five groups -->
		<div class="groups-container">
			<div class="groups-title">
			    <div class="main-title">
			    	适用于五大人群
			    </div>
				<div class="sub-title">
					Applicable to the five groups
				</div>
			</div>
			<div class="groups-content">

				<!-- item 1 -->
				<div class="content-item-1">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>groups-icon.png" alt="">
						<p>01</p>
					</div>
					<div class="item-text">
						面部皮下脂肪堆积过多<br>而引起的各种胖脸形者
					</div>
				</div>

				<!-- item 2 -->
				<div class="content-item-2">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>groups-icon.png" alt="">
						<p>02</p>
					</div>
					<div class="item-text">
						面部轮廓不佳<br>要求清晰化者
					</div>
				</div>

				<!-- item 3 -->
				<div class="content-item-3">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>groups-icon.png" alt="">
						<p>03</p>
					</div>
					<div class="item-text">
						面部皮肤软组织<br>轻度松弛下垂者
					</div>
				</div>

				<!-- item 4 -->
				<div class="content-item-4">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>groups-icon.png" alt="">
						<p>04</p>
					</div>
					<div class="item-text">
						两颊过宽<br>双侧不对称者
					</div>
				</div>

				<!-- item 5 -->
				<div class="content-item-5">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>groups-icon.png" alt="">
						<p>05</p>
					</div>
					<div class="item-text">
						双下巴明显者
					</div>
				</div>
			</div>
		</div>

		<!-- Surgical approach -->
		<div class="surgical-container">
			<div class="surgical-title">
				<div class="main-title">
			    	手术方式
			    </div>
				<div class="sub-title">
					Surgical approach
				</div>
			</div>
			<div class="surgical-content">
				<!-- surgical-item-1 -->
				<div class="surgical-item-1">
					<div class="item-text">
						<div class="main-text">
							负压吸脂方法<span>01</span>
						</div>
						<div class="sub-text">
							这是最早的机器吸脂方法，它利用负压、<br>特定吸管、吸头和适当麻醉将局部脂肪吸除
						</div>
					</div>
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>surgical-item-1.png" alt="">
					</div>
				</div>

				<!-- surgical-item-2 -->
				<div class="surgical-item-2">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>surgical-item-2.jpg" alt="">
					</div>
					<div class="item-text">
						<div class="main-text">
							超声吸脂方法<span>02</span>
						</div>
						<div class="sub-text">
							面部吸脂瘦脸利用超声波的能量选择性地破坏脂肪<br>细胞，再通过负压吸除脂肪组织，分为体内超声和<br>体外超声两种，是目前被视为比较安全的方法
						</div>
					</div>
				</div>

				<!-- surgical-item-3 -->
				<div class="surgical-item-3">
					<div class="item-text">
						<div class="main-text">
							电子吸脂方法<span>03</span>
						</div>
						<div class="sub-text">
							利用一定强度高频电场产生的热效应使脂肪<br>组织受热，导致脂肪细胞破裂，利于吸除
						</div>
					</div>
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>surgical-item-3.jpg" alt="">
					</div>
				</div>

				<!-- surgical-item-4 -->
				<div class="surgical-item-4">
					<div class="item-img">
						<img src="<?php echo PUBLISH_IMG.ACTION_NAME.'/';?>surgical-item-4.jpg" alt="">
					</div>
					<div class="item-text">
						<div class="main-text">
							共振面部吸脂瘦脸法<span>04</span>
						</div>
						<div class="sub-text">
							利用共振原理，在电脑模糊程序控制下的吸管产生<br>与脂肪细胞固有频率相同的机械性共振波，选择性<br>破坏脂肪细胞，便于吸除，而且可以有效保护神经<br>和血管
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Surgery process -->
		<div class="process-container">
			<div class="process-title">
				<div class="main-title">
			    	手术过程
			    </div>
				<div class="sub-title">
					Surgical procsss
				</div>
			</div>
			<div class="process-content">
				<!-- process item 1 -->
				<div class="process-item">
					<div class="process-item-tag">
						<div class="tag-index">
							01
						</div>
						<div class="tag-msg">
							标记
						</div>
					</div>
					<div class="process-text">
						面部吸脂前用龙胆紫标识好局部脂肪堆积的范围，并反复用手指触诊，了解局部脂肪组织的厚度，较厚处要用龙胆紫重点标记。
					</div>
				</div>

				<!-- process item 2 -->
				<div class="process-item">
					<div class="process-item-tag">
						<div class="tag-index">
							02
						</div>
						<div class="tag-msg">
							麻醉
						</div>
					</div>
					<div class="process-text">
						麻醉用局部浸润麻醉，一般可将0.1%～0.5%利多卡因生理盐水液，经切口，均匀注入吸脂区皮下，直至皮肤有胀硬感。
					</div>
				</div>

				<!-- process item 3 -->
				<div class="process-item">
					<div class="process-item-tag">
						<div class="tag-index">
							03
						</div>
						<div class="tag-msg">
							进针
						</div>
					</div>
					<div class="process-text">
						面部吸脂手术一般取耳垂下方，口角红白唇线、颏部正中等处为穿刺进针点，双下巴吸脂的进针处在下巴的下方，恢复后也几乎没有痕迹。一般切2mm切口，采用直径2mm圆头带侧孔的长针注射器或新一代聚能振波吸脂仪，用50raL一次性注射器接上吸脂针，经切口进入皮下脂肪层，先用针头推到最远端，并在不形成负压时疏通几个皮下隧道。
					</div>
				</div>

				<!-- process item 4 -->
				<div class="process-item">
					<div class="process-item-tag">
						<div class="tag-index">
							04
						</div>
						<div class="tag-msg">
							抽吸
						</div>
					</div>
					<div class="process-text">
						抽拉针栓形成负压，往复拉锯式放射状游走性抽吸，既要在脂肪堆积较多的部位多加压抽吸，又要注意抽吸的均匀性，直至满意为止。但应保留约5mm厚的皮肤脂肪层。一般面颊可吸出脂肪量为10-30ml，颧部约5-30ml，下颌部约20-35ml。
					</div>
				</div>

				<!-- process item 5 -->
				<div class="process-item">
					<div class="process-item-tag">
						<div class="tag-index">
							05
						</div>
						<div class="tag-msg">
							缝合包扎
						</div>
					</div>
					<div class="process-text">
						面部吸脂手术的最后，需要轻轻挤压皮肤，将其内部积液尽量挤出。术毕缝合切口一针，外敷纱布加压包扎。
					</div>
				</div>
			</div>
			<div class="process-compare">
				<div class="compare-item-1">
					<div class="compare-title">
						面部精微吸脂手术的优势
					</div>
					<div class="compare-desc">
						<p>1、丰富经验的专家操作安全、低创、恢复速度快。</p>
						<p>2、吸脂瘦脸的同时不影响面部整体的丰满度。</p>
						<p>3、层处理技术充分确保术后不会出现凹凸不平的现象。</p>
						<p>4、术后效果立竿见影，不易反弹。</p>
						<p>5、面部的精微吸脂，还可与下颌吸脂、颊脂垫去除、重睑术、去眼袋、隆鼻、隆下颌一起做，在去除多余脂肪、收紧皮肤基础上，使面部五官轮廓更加清晰协调，颈部曲线流畅。</p>
						<p>6、面部精微吸脂作为多年开展项目，已形成一系列专业化规范化流程，有效避免了吸脂手术中及手术后可能出现的并发症。</p>	
					</div>
				</div>
				<div class="compare-item-2">
					<div class="compare-title">
						面部精微吸脂术前注意事项
					</div>
					<div class="compare-desc">
						<p>1、身体健康，无重要脏器的器质性病变；</p>
						<p>2、无口腔感染源；</p>
						<p>3、女性手术应避开月经期；</p>
						<p>4、还应作术前血、尿的常规化验检查，胸透和心电图等常规健康检查；</p>
						<p>5、常规拍摄头颅正侧位照片，以备术后对比和疗效评定，有条件的可以做三维头颅CT；</p>
						<p>6、术前应停止吸烟。阿西匹林、避孕药和某些抗炎药物会引起出血增加，故术前一段时间应停用这些药物。</p>	
					</div>
				</div>
				<div class="compare-item-3">
					<div class="compare-title">
						面部精微吸脂术后注意事项
					</div>
					<div class="compare-desc">
						<p>1、术后加压包扎，第二天换药，术后 5-7天拆线。</p>
						<p>2、术后 15 天之内尽量避免手术部位沾水</p>
						<p>3、保证手术部位清洁，防止感染。如果伤口上有血痂或分泌物，可用无菌盐水擦拭。</p>
						<p>4、手术后可对局部伤口加压包扎或用冰袋冷敷，但压力不宜大，以免损伤手术部位。面部吸脂术后一旦发生出血不止和严重血肿，应及时到医院复诊。</p>
						<p>5、术后应有安静舒适的环境休养，避免负重从而加重伤口肿胀。</p>
						<p>6、取颊部脂肪垫术后伤口会有些疼痛，但随着时间的推移会逐渐减轻。受术者不要急于吃去痛片，因为阿斯匹林类药物会加重伤口出血。</p>
						<p>7、避免进食刺激性食物如辣椒等。</p>
						<p>8、取颊部脂肪垫术严格遵守医生嘱咐服药及复诊。</p>
					</div>
				</div>
			</div>
			<div class="process-qa">
				<!-- Q & A item 1 -->
				<div class="qa-item">
					<div class="qa-title">
						<span class="q"></span>面部精微吸脂手术的效果是永久性的吗?
					</div>
					<div class="qa-text">
						<span class="a"></span>一般来说，面部精微吸脂只需要1次即可拥有的小V脸。在面部精微吸脂的过程中，吸脂管会多次经过自体脂肪层，
吸脂管经过的部位会形成疤痕组织，在自体脂肪层间形成坚固的网膜，自体脂肪即使增长体积也会受到限制，所以面
部精微吸脂的效果是永久性的。
					</div>
				</div>

				<!-- Q & A item 2 -->
				<div class="qa-item">
					<div class="qa-title">
						<span class="q"></span>面部精微吸脂后怎么才能快速消肿?
					</div>
					<div class="qa-text">
						<span class="a"></span>面部精微吸脂后为了加快面部吸脂消肿，要禁止吸烟，术后口服消炎要药，应减少活动，更换敷料外，可用超声波
在吸脂区进行理疗以促进愈合，加快消肿，减轻疼痛。面部精微吸脂后要口服消炎药，想要消肿时间短，除了更换
敷料外，应减少活动。
					</div>
				</div>

				<!-- Q & A item 3 -->
				<div class="qa-item">
					<div class="qa-title">
						<span class="q"></span>面部精微吸脂有没有危险？
					</div>
					<div class="qa-text">
						<span class="a"></span>面部精微吸脂可以解决面部脂肪过多引起的胖脸问题，是瘦脸的一种方式，只要选择正规专业的医疗美容医院进行求
美就可以了，基本没有风险的
					</div>
				</div>
			</div>
			<div class="corner">
				<div class="corner-in"></div>
			</div>
		</div>




	</div>
</body>
</html>