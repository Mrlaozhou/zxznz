<?php if (!defined('THINK_PATH')) exit(); require_once('/Public/Home/header.html');?>

<!-- 列表页主体 -->
	<div class="bk">
		<img style="width:100%;height:230px;" src="/Public/Home/images/bk.jpg">
	</div>


	<div class="list">
		<div class="lbody">
			<div class="list-now">
				<div class="list-now-top">
					
				</div>
				<ul class="list-now-item">
			<!--Now-->
				<?php foreach($data['now'] as $k=>$v):?>
					<li>
						<div class="floatL" style="width:550px;height:300px;">
							<a href="<?php echo U('Active/detial?navNum=6&id='.$v['id']);?>">
							<img style="width:550px;height:300px;" src="/Public/Uploads/<?php echo $v['pic'];?>" alt="">
							</a>
						</div>
						<div class="floatR li-right" style="width:400px;height:300px;border-bottom:1px solid #CCCCCC;">
							<p class="title" >活动时间：<?php echo date('Y.m.d',$v['start_time']).'-'.date('Y.m.d',$v['end_time']);?></p>
							<p class="intro">
								<?php echo strip_tags(htmlspecialchars_decode($v['intro']));?>
							</p>
							<div class="price">
								<div class="price-left floatL">
									<p style="font-size:12px;color:#AAAAAA;"><s>预约费：￥4800</s></p>
									<p style="height:50%;">￥<span style="font-size:30px;"><?php echo $v['price'];?></span></p>
									<p style="color:#666666;font-size:14px;">
										<span style="background:#D11337;color:white;padding:3px;">
											<?php echo $v['location'];?>
												
										</span>
										<span>上海华美医疗美容医院</span>
									</p>
								</div>
								<div class="price-right floatR">
									<p style="width:100%;margin:15px 0;">
										<a style="color:white;display:block;width:100px;height:30px;background:#D11337;text-align:center;line-height:30px;" href="javascript:void(0)">预约抢购</a>
									</p>
									<p><span style="color:red;"><?php echo $v['join_num'];?></span>人已经加入</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</li>
				<?php endforeach;?>
			<!--Now end-->

					
				</ul>
			</div>
			<div class="list-pass">
				<div class="list-pass-top">
					<a name="2F"></a> 
				</div>
				<ul class="list-pass-item">
				<!--will-->
					
				<?php foreach($data['will'] as $k=>$v):?>

					<li>
						<div class="floatL" style="width:550px;height:300px;background: black;">
							<a href="<?php echo U('Active/detial?navNum=6&id='.$v['id']);?>">
							<img style="width:550px;height:300px;" style="opacity:0.5;" src="/Public/Uploads/<?php echo $v['pic'];?>" alt="">
							</a>
						</div>
						<div class="floatR li-right" style="width:400px;height:300px;border-bottom:1px solid #CCCCCC;">
							<p class="title" >即将开始</p>
							<p class="intro">
								<?php echo strip_tags(htmlspecialchars_decode($v['intro']));?>
							</p>
							<div class="price">
								<div class="price-left floatL">
									<p style="font-size:12px;color:#AAAAAA;"><s>预约费：￥1500</s></p>
									<p style="height:50%;">￥<span style="font-size:30px;"><?php echo $v['price'];?></span></p>
									<p style="color:#666666;font-size:14px;">
										<span style="background:#D11337;color:white;padding:3px;"><?php echo $v['location'];?></span>
										<span>上海华美医疗美容医院</span>
									</p>
								</div>
								<div class="price-right floatR">
									<p style="width:100%;margin:15px 0;">
										<a style="color:white;display:block;width:100px;height:30px;background:#BBB;text-align:center;line-height:30px;" href="javascript:void(0)">预约抢购</a>
									</p>
									<p><span style="color:red;"><?php echo $v['join_num'];?></span>人已经加入</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</li>

				<?php endforeach;?>

				<!--will end-->
				</ul>
			</div>		
		</div>
		<div class="fixed">
			<div style="height:86px;"><img src="/Public/Home/images/fixed01.jpg"></div>
			<div style="height:126px;"><a href="javascript:void(0)"><img src="/Public/Home/images/fixed02.jpg"></a></div>
			<div style="height:123px;"><a href="#2F"><img src="/Public/Home/images/fixed03.jpg"></a></div>
		</div>
	</div>




<!-- 页面底部 -->

<?php require_once('/Public/Home/footer.html');?>