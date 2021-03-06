<?php if (!defined('THINK_PATH')) exit(); require_once('/Public/Home/header.html');?>



<style type="text/css">
.hos_doc-lb{
	width:100%;
	height:300px;
	position: relative;
}

.hos-doc-left{
	position: absolute;
	top:110px;
	left:0;
}

.hos-doc-right{
	position: absolute;
	top:110px;
	right:0;
}

.hos_img:hover{
	cursor:pointer;
	box-shadow:1px 1px 5px 5px #BBBBBB;
}

/*************hos_cmt*************/

.hos_cmt{
	margin-top:40px;
	width:100%;

	border-top:2px solid #aaaaaa;

}
.hos_cmt_zan{
	padding:30px 0;
}
#heat{
	cursor: pointer;
}
.hos_cmt_box{
	padding-top:20px;
	width:100%;
}
.hos_cmt_box-l{
	width:50px;
	height:50px;
}
.hos_cmt_box-r{
	width:580px;

	background-image:url(/Public/Home/images/hos_cmt_box-r.jpg); 
	background-repeat: no-repeat; 
}
.hos_cmt_list{
	width:570px;
	margin:0 0 0 10px;
}
.hos_cmt_list li{
	width:100%;
	padding-top:50px;
	border-top:1px solid #ccc;
}

#hos_comment{
	cursor:pointer;
}

.hos_reply_box{
	width:100%;
	height:200px;
	display:none;
}
.hos_reply_box-l{
	width:30px;
	height:30px;
}

.hos_reply_box-r{
	width:469px;
	height:100px;
	background-image:url(/Public/Home/images/hos_reply_box-r.jpg);
}
.hos_reply_list{
	width:510px;


}
.hos_reply_list li{
	padding-top:30px;
	border-top:1px solid #ccc;	
}
.hos_reply_controller{
	cursor: pointer;
}
.hos_reply{
	cursor: pointer;
}
</style>




<div class="h-d-content">
	<div class="h-d-top">
		<div><img style="width:100%;height:230px;" src="/Public/Home/images/h-bg.jpg"></div>
		
	</div>
	<div class="h-d-box">
		<div class=" floatL left">
			<div class="hos_img">
				<img style="width:300px;height:300px;" src="/Public/Uploads/<?php echo $info['logo'];?>">
			</div>
		</div>
		<div class="floatR right" style="margin-bottom:30px;">
			<div style="height:234px;">
				<img src="/Public/Home/images/hos_detial.jpg">
			</div>
			<div style="padding-bottom:30px;">
				<p style="height:120px;line-height:120px;color:black;font-size:24px;font-weight:bold;">
					<?php echo $info['name'];?>
				</p>
				<p>
					  <?php echo htmlspecialchars_decode($info['intro']);?>
				</p>				
			</div>

			<!--pinglun-->
			<!--pinglun-->
			<!--pinglun-->


			<div class=template-comment>
				<div class="comment-title">
					<span class="comment-title-content">用户评论 <span>122</span></span> 
				</div>

				<div class="comment-grade">
					<div class="comment-grade-left">
						<p class="grade-title">用户评分</p>
						<p class="grade-level">5</p>
					</div>
					<div class="comment-grade-right">
						<div class="grade-rank">
							<div class="grade-rank-star">
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
							</div>
							<div class="grade-rank-progress">
								<span class="progress-title">90%</span>
								<span class="progress-bar">
									<span style="width: 150px;"></span>
								</span>
							</div>
						</div>
						<div class="grade-rank">
							<div class="grade-rank-star">
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star-d"></span>
							</div>
							<div class="grade-rank-progress">
								<span class="progress-title">80%</span>
								<span class="progress-bar">
									<span style="width: 140px"></span>
								</span>
							</div>
						</div>
						<div class="grade-rank">
							<div class="grade-rank-star">
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
							</div>
							<div class="grade-rank-progress">
								<span class="progress-title">60%</span>
								<span class="progress-bar">
									<span style="width: 100px"></span>
								</span>
							</div>
						</div>
						<div class="grade-rank">
							<div class="grade-rank-star">
								<span class="icon-star"></span>
								<span class="icon-star"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
							</div>
							<div class="grade-rank-progress">
								<span class="progress-title">50%</span>
								<span class="progress-bar">
									<span style="width: 80px;"></span>
								</span>
							</div>
						</div>
						<div class="grade-rank">
							<div class="grade-rank-star">
								<span class="icon-star"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
								<span class="icon-star-d"></span>
							</div>
							<div class="grade-rank-progress">
								<span class="progress-title">0%</span>
								<span class="progress-bar">
									<span style="width: 0;"></span>
								</span>
							</div>
						</div>
					</div>
				</div>


				<div class="comment-container">
					<div class="comment-item">
						<div class="item-left">
							<div class="avatar"><img src="/Public/Home/images/avatar-default.png" alt=""></div>
							<div class="user">kaxokasli</div>
						</div>
						<div class="item-right">
							<div class="item-right-title clearfix">
								<div class="title-star">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<div class="title-date">2017-01-19 17:00:29</div>
							</div>
							<div class="item-right-content">
								上海美莱医疗美容门诊部，凝萃多国医美技艺，历经品牌深厚沉淀，汇纳国内外设备，为求美者实现在国内即可享有国内外名师倾力为其打造品质医美服务。以独立私密的医疗环境、专业个性的美丽定制、无微不至的人文关怀为爱美者提供品质医美服务
							</div>
						</div>
					</div>


					<div class="comment-item">
						<div class="item-left">
							<div class="avatar"><img src="/Public/Home/images/avatar-default.png" alt=""></div>
							<div class="user">kaxokasli</div>
						</div>
						<div class="item-right">
							<div class="item-right-title clearfix">
								<div class="title-star">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<div class="title-date">2017-01-19 17:00:29</div>
							</div>
							<div class="item-right-content">
								上海美莱医疗美容门诊部，凝萃多国医美技艺，历经品牌深厚沉淀，汇纳国内外设备，为求美者实现在国内即可享有国内外名师倾力为其打造品质医美服务。以独立私密的医疗环境、专业个性的美丽定制、无微不至的人文关怀为爱美者提供品质医美服务
							</div>
						</div>
					</div>

					<div class="comment-item">
						<div class="item-left">
							<div class="avatar"><img src="/Public/Home/images/avatar-default.png" alt=""></div>
							<div class="user">kaxokasli</div>
						</div>
						<div class="item-right">
							<div class="item-right-title clearfix">
								<div class="title-star">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<div class="title-date">2017-01-19 17:00:29</div>
							</div>
							<div class="item-right-content">
								上海美莱医疗美容门诊部，凝萃多国医美技艺，历经品牌深厚沉淀，汇纳国内外设备，为求美者实现在国内即可享有国内外名师倾力为其打造品质医美服务。以独立私密的医疗环境、专业个性的美丽定制、无微不至的人文关怀为爱美者提供品质医美服务
							</div>
						</div>
					</div>
				</div>



				<!-- page index -->
				<div class="pages">
					<span class="page-item">1</span>
					<span class="page-item">2</span>
					<span class="page-item">3</span>
					<span class="page-item active">4</span>
					<span class="page-item">5</span>
					<span class="page-item">6</span>
					<span class="page-item">7</span>
					<span class="page-item">8</span>
					<span class="page-item">9</span>
					<span class="page-item">10</span>
				</div>



				<div class="comment-btn"><a href="javascript:void(0)" id="open-input-btn">我要点评</a></div>
				<div class="no-register">没有账号？立即<a href="javascript:void(0)">注册</a></div>

				<div class="submmit-comment" id="input-well">
					<a href="javascript:void(0)" class="input-close-btn" id="input-close-btn"></a>
					<div class="input-container">
						<div class="input-user">
							<div class="avatar"><img src="/Public/Home/images/avatar-default.png" alt=""></div>
							<div class="user">kaxokasli</div>
						</div>
						<div>
							<textarea class="textarea"></textarea>
						</div>
					</div>
					<div class="user-score clearfix">
						<div class="score-title">用户评分</div>
						<div class="score-content" id="score">
							<span class="icon-star-d"></span>
							<span class="icon-star-d"></span>
							<span class="icon-star-d"></span>
							<span class="icon-star-d"></span>
							<span class="icon-star-d"></span>
						</div>
					</div>
					<div class="submit-btn">
						<a href="javascript:void(0)">发表评论</a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>

</div>


	
<script>
	$("#score span").hover(function(event){
		var i=$('#score span').index(event.currentTarget)
		for(x=0;x<=4;x++)
		{
			if(x<=i)
			{
				$('#score span').eq(x).addClass('icon-star')
			}
			else
			{
				$('#score span').eq(x).removeClass('icon-star')
			}
			
		}

	});


	$('#open-input-btn').click(function(){
		$('#input-well').fadeIn(500)	
	})
	$('#input-close-btn').click(function() {
		$('#input-well').fadeOut(500);
	});
</script>









<?php require_once('/Public/Home/footer.html');?>