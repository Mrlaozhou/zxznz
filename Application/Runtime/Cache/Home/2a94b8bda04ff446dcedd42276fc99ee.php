<?php if (!defined('THINK_PATH')) exit();?>﻿<?php require_once('/Public/Home/header.html');?>

<style type="text/css">
/*
.js_slide:hover{
    cursor:pointer;
    box-shadow:1px 1px 5px 5px #BBBBBB;
}
*/
</style>

<div class="banner">
	<div class="ban_con">
    	<div class="fullSlide">
            <div class="bd">
                <ul>
                    <li style="background:url(/Public/Home/images/banner-01.jpg) center 0 no-repeat;"><a target="_blank" href="<?php echo U('Active/threey?navNum=6');?>"></a></li>
                    <li style="background:url(/Public/Home/images/banner2.jpg) center 0 no-repeat;"><a target="_blank" href="<?php echo U('Active/lst?navNum=6');?>"></a></li>
                    <li style="background:url(/Public/Home/images/banner1.jpg) center 0 no-repeat;"><a target="_blank" href="<?php echo U('Active/lst?navNum=6');?>"></a></li>
                </ul>
            </div>
            <div class="hd">
                <ul>
                </ul>
            </div>
        </div>
        <script type="text/javascript">		jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });	</script>

    </div>
</div>

<div class="huodong">
	<div class="hdtt"><img src="/Public/Home/images/hot_tt.jpg" border="0" /></div>
    <div style="width:100%;height:545px;">
        <a target="_blank" href="<?php echo U('Active/threey?navNum=6');?>"><img style="width:100%;height:545px;" src="/Public/Home/images/specialpurchase.jpg"></a>
    </div>
    <div class="hd_con">
    	<li>
            <a href="<?php echo U('Active/lst?navNum=6');?>"><img src="/Public/Home/images/index-active-01.jpg" border="0" /></a>
        </li>
        <li class="hdr">
			<a href="<?php echo U('Active/lst?navNum=6');?>"><img src="/Public/Home/images/index-active.jpg" border="0" /></a>

        </li>
        <div class="clear"></div>
    </div>
</div>

<div class="publish">
    <div class="publish-top">
        
    </div>
    <div class="publish-face">
        <a target="_blank" style="display:block;" href="<?php echo U('Publish/index?navNum=6');?>">
            <div class="empty">
                <div class="empty-fixed">
                    <p style="font-size:14px;margin:15px 0;">皮肤美容</p>
                    <p style="font-size:24px;color:black;">斑点妹诱因盘点你属哪种？</p>
                </div>
            </div>
        </a>

    </div>
    <ul class="publish-item">
        <li class="floatL" style="margin-bottom:20px;">
            <a target="_blank" href="<?php echo U('Publish/index?navNum=6');?>"><img src="/Public/Home/images/p-i-1.jpg"></a>
        </li>
        <li class="floatR" style="margin-bottom:20px;">
                <a target="_blank" href="<?php echo U('Publish/index?navNum=6');?>"><img src="/Public/Home/images/index-publish.jpg"></a>
        </li>
        <li class="floatL" style="">
            <a target="_blank" href="<?php echo U('Publish/index?navNum=6');?>"><img src="/Public/Home/images/p-i-3.jpg"></a>
        </li>
        <li class="floatR" style="">
            <a target="_blank" href="<?php echo U('Publish/index?navNum=6');?>"><img src="/Public/Home/images/p-i-4.jpg"></a>
        </li>       
        <p class="clear"></p>
    </ul>
</div>

<div class="index-doc">
    <div class="index-doc-top"></div>
    <div class="index-doc-content">
        <div class="htmleaf-container">
            <div class="htmleaf-content">
                <section class="examples">
                    <div class="slider js_ease ease">
                        <div class="frame js_frame">
                            <ul class="slides js_slides">
                            <?php foreach($Dinfo as $k => $v):?>
                                <li class="js_slide" style="position: relative;">
                                    <a target="_blank" href="<?php echo U('Doctor/detial?navNum=2&id='.$v['id'])?>">
                                        <img style="width:240px;height:250px;" src="/Public/Uploads/<?php echo $v['picture'];?>">
                                    </a>
									<p style="width:240px;height:40px;left:5px;background: black;position: absolute;bottom:0;opacity: .6;text-align: 		center;line-height: 40px;">
                                        <?php echo $v['hos_name'];?> <?php echo $v['name'];?>
                                    </p>
                                </li>
                            <?php endforeach;?>                             
                            </ul>
                        </div>
                        <span class="js_prev doc-prev">
                            <img style="width:70%;" src="/Public/Home/images/slide_left.jpg">
                        </span><span class="js_next doc-next">
                            <img style="width:70%;" src="/Public/Home/images/slide_right.jpg">
                        </span>
						
						<script type="text/javascript">
                            $(function(){
                                $('.slides li').find('p').slideUp('fast');
                            })
                           $('.slides li').bind({"mouseover":function(){
                                $(this).find('p').slideDown('fast');
                           },"mouseout":function(){
                                $(this).find('p').css('display','none');
                           }});
                        </script>
						
                    </div>
                </section>
            </div>
        </div>
        <script src="/Public/Home/doc-lb/vendor/highlight.js"></script>
        <script>        hljs.initHighlightingOnLoad();</script>
        <script src="/Public/Home/doc-lb/dist/lory.min.js"></script>
        <script>
            'use strict';

            document.addEventListener('DOMContentLoaded', function () {

                var ease = document.querySelector('.js_ease');

                lory(ease, {
                    infinite: 4,
                    slidesToScroll: 3,
                    slideSpeed: 300,
                    ease: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)'
                });
            });
        </script>
    </div>
</div>

<div class="index-hos">
    <div class="index-hos-top"></div>
    <div class="index-hos-content">
        <div class="top_slider" id="pl_app_focus">
            <div class="ts_inner" node-type="slider">

                <ul class="slider_list" >
                <?php foreach($Hinfo as $k => $v):?>
                    <li class="slider_item ">
                    
                        <div class="column_large " style="">
                            <div class="column_large_one" action-type="showdesc">
                                <div class="column_img_container">
                                    <a target="_blank" href="<?php echo U('Hospital/detial?navNum=3&id='.$v[0]['id'])?>"><img class="column_large_img" width="490" height="490" src="/Public/Uploads/<?php echo $v[0]['logo'];?>" alt=""  /></a>
                                </div>
                                <div class="column_select_layer">
                                    <div class="layer_content">
                                        <p class="column_title"><?php echo $v[0]['name'];?></p>
                                        <div class="column_info">
                                            <i class="allstar"><i style="width:84%" class="star_bar"></i></i>
                                            <span class="column_play_count"><!--000--></span>
                                        </div>
                                    </div>
                                    <div class="layer_mask"></div>
                                </div>
                                <a class="column_item_link" href="<?php echo U('Hospital/detial?navNum=3&hos_id='.$v[0][id])?>" title="" target="_blank"></a>
                            </div>
                        </div>
                    
                        <div class="column_small middle_column" style="margin-right:16px;">
                            <div class="column_small_first " style="margin-bottom:20px;" action-type="showdesc">
                                <div class="column_img_container">
                                    <img class="column_small_img" width="235" height="235" src="/Public/Uploads/<?php echo $v[1]['logo'];?>" alt=""  />
                                </div>
                                <div class="column_select_layer">
                                    <div class="layer_content">
                                        <p class="column_title"><?php echo $v[1]['name'];?></p>
                                        <div class="column_info">
                                            <i class="allstar"><i style="width:84%" class="star_bar"></i></i>
                                            <span class="column_play_count"><!--000--></span>
                                        </div>
                                    </div>
                                    <div class="layer_mask"></div>
                                </div>
                                <a class="column_item_link" href="<?php echo U('Hospital/detial?navNum=3&hos_id='.$v[1][id])?>" title="" target="_blank"></a>
                            </div>

                            <div class="column_small_first " action-type="showdesc">
                                <div class="column_img_container">
                                    <img class="column_small_img" width="235" height="235" src="/Public/Uploads/<?php echo $v[2]['logo'];?>" alt=""  />
                                </div>
                                <div class="column_select_layer">
                                    <div class="layer_content">
                                        <p class="column_title"><?php echo $v[2]['name'];?></p>
                                        <div class="column_info">
                                            <i class="allstar"><i style="width:84%" class="star_bar"></i></i>
                                            <span class="column_play_count"><!--000--></span>
                                        </div>
                                    </div>
                                    <div class="layer_mask"></div>
                                </div>
                                <a class="column_item_link" href="<?php echo U('Hospital/detial?navNum=3&hos_id='.$v[2][id])?>" title="" target="_blank"></a>
                            </div>
                        </div>
                    
                        <div class="column_small ">
                            <div class="column_small_first " style="margin-bottom:20px;" action-type="showdesc">
                                <div class="column_img_container">
                                    <img class="column_small_img" width="235" height="235" src="/Public/Uploads/<?php echo $v[3]['logo'];?>" alt=""  />
                                </div>
                                <div class="column_select_layer">
                                    <div class="layer_content">
                                        <p class="column_title"><?php echo $v[3]['name'];?></p>
                                        <div class="column_info">
                                            <i class="allstar"><i style="width:82%" class="star_bar"></i></i>
                                            <span class="column_play_count"><!--000--></span>
                                        </div>
                                    </div>
                                    <div class="layer_mask"></div>
                                </div>
                                <a class="column_item_link" href="<?php echo U('Hospital/detial?navNum=3&hos_id='.$v[3][id])?>" title="" target="_blank"></a>
                            </div>

                            <div class="column_small_first " action-type="showdesc">
                                <div class="column_img_container">
                                    <img class="column_small_img" width="235" height="235" src="/Public/Uploads/<?php echo $v[4]['logo'];?>" alt=""  />
                                </div>
                                <div class="column_select_layer">
                                    <div class="layer_content">
                                        <p class="column_title"><?php echo $v[4]['name'];?></p>
                                        <div class="column_info">
                                            <i class="allstar"><i style="width:84%" class="star_bar"></i></i>
                                            <span class="column_play_count"><!--000--></span>
                                        </div>
                                    </div>
                                    <div class="layer_mask"></div>
                                </div>
                                <a class="column_item_link" href="<?php echo U('Hospital/detial?navNum=3&hos_id='.$v[4][id])?>" title="" target="_blank"></a>
                            </div>                     
                        </div>
                    </li>  
                <?php endforeach;?>
                </ul>
                <a class="slider_btn_left" href="javascript:;" title="" node-type="prev"></a>
                <a class="slider_btn_right" href="javascript:;" title="" node-type="next"></a>
            </div>
        </div>  
    </div>
</div>





<?php require_once('/Public/Home/footer.html');?>