<?php if (!defined('THINK_PATH')) exit();?>
<?php require_once('/Public/Home/header.html');?>


<style type="text/css">
.pblh{

}

.pblh-content{
  width:1000px ;
  margin:0 auto 50px;

}

.pblh-line{
  width:50px ;
  margin:10px 0;
  border-top:1px solid #aaa;
  border-bottom:1px solid #aaa;
}

.pblh-hover a {
    color:#444444;
}

.pblh-list-item{display:;width:100%;height:480px;margin-top:60px;}
.pblh-list-item a{color:#444444;}
.pblh-list1{display:block;}

.hover_type_1{width:190px;height:230px;padding:0 20px;position:absolute;top:0 ;left: 0;background:;}
.hover_type_2{width:190px;height:230px;padding:0 20px;position:absolute;top:0 ;right: 0;background:;}
.hover_type_3{width:190px;height:230px;padding:0 20px;position:absolute;bottom:0 ;right: 0;background:;}
.hover_type_4{width:190px;height:230px;padding:0 20px;position:absolute;bottom:0 ;left: 0;background:;}


/**
 * 新增样式(活动)
 */
.activity-item
  {
    display: inline-block;
    width: 480px;
    height: 480px;
    overflow: hidden;
    font-family: '微软雅黑',Arial;
  }
  .activity-item-img
  {
    width: 100%;
    height: 320px;
    overflow: hidden;
  }
  .activity-item-img img
  {
    width:480px;
    height:320px;
  }
  .activity-item-info
  {
    width: 100%;
    height: 150px;
    margin-top: 10px;
    font-size: 0;
  }
  .activity-item-desc
  {
    display: inline-block;
    width: 332px;
    height: 100%;
    vertical-align: top;
    box-sizing: border-box;
    padding: 10px;
  }
  .activity-item-desc p
  {
    margin: 0;
  }
  .activity-item-title
  {
    font-size: 26px;
    color: #333;
    font-weight: bold;
    line-height: 46px;
  }
  .activity-item-text
  {
    font-size: 14px;
    color: #666;
    line-height: 26px;
    overflow : hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
  .activity-link
  {
    display: inline-block;
    width: 148px;
    height: 100%;
    vertical-align: top;
  }
  .activity-link a
  {
    display: inline-block;
    width: 100%;
    height: 100%;
    background: #f94d63;
    text-align: center;
    line-height: 150px;
    color: #fff;
    text-decoration: none;
    font-size: 24px;
  }


</style>


<div class="pblh">
  <div class="pblh-top">
    <img style="width:100%;height:230px;" src="/Public/Home/images/pblh-bg.jpg">
  </div>
    <div class="pblh-content">


      <?php foreach( $data as $k => $v ):?>

        <div class="pblh-list-item pblh-list<?php echo $k+1;?>" style="width:100%;height:480px;margin-top:60px;">
  <!--left------>

<?php if ( ! isset($v[0]['price']) ):?>
    <a target="_blank" href="<?php echo U($v[0]['action']."?navNum=4");?>">
		  <div class="floatL" style="width:480px;height:480px;background-image:url(/Public/Uploads/<?php echo $v[0]['bg'];?>);position: relative;">
            <div class="pblh-hover hover_type_<?php echo $v[0]['bg_type'];?>" style="">
                <p style="height:40px;font-size: 40px;padding-top:20px;"><?php echo date('Y.m',$v[0]['begin']);?></p>
                <div class="pblh-line"></div>
                <p style="line-height:20px;">

                      <span style="font-weight:bold;font-size:16px;">
                      <?php echo $v[0]['title'];?>
                      </span><br />
                      <?php echo $v[0]['intro'];?> 
                    
                </p>
            </div>
          </div>
		  </a>
<?php else:?>
    <a target="_blank" href="<?php echo U("Active/".$v[0]['action']);?>">
      <div class="activity-item">
        <div class="activity-item-img">
          <a href="#" title=""><img src="/Public/Uploads/<?php echo $v[0]['pic'];?>" alt=""></a>
        </div>
        <div class="activity-item-info">
          <div class="activity-item-desc">
            <p class="activity-item-title">活动日期：<?php echo date('Y.m',$v[0]['start_time']);?></p>
            <p class="activity-item-text"><?php echo $v[0]['intro'];?></p>
          </div>
          <div class="activity-link">
            <a href="<?php echo U('Order/despeak?id='.$v[1]['id']);?>" title="">点击预约</a>
          </div>
        </div>
      </div>
    </a>

<?php endif;?>
  <!--left end------>

  <!--right------>
<?php if( isset($v[1]) && ! isset($v[1]['price']) ):?>
		  <a target="_blank" href="<?php echo U($v[1]['action']."?navNum=4");?>">
          <div class="floatR" style="width:480px;height:480px;background-image:url(/Public/Uploads/<?php echo $v[1]['bg'];?>);position: relative;">
            <div class="pblh-hover hover_type_<?php echo $v[1]['bg_type'];?>" style="">
                <p style="height:40px;font-size: 40px;padding-top:20px;"><?php echo date('Y.m',$v[1]['begin']);?></p>
                <div class="pblh-line"></div>
                <p style="line-height:20px;">
                    
                      <span style="font-weight:bold;font-size:16px;">
                      <?php echo $v[1]['title'];?>
                      </span><br />
                      <?php echo $v[1]['intro'];?> 
                    
                </p>
            </div>
          </div>

<?php elseif ( isset($v[1]) && isset($v[1]['price']) ):?>
    <a target="_blank" href="<?php echo U("Active/".$v[1]['action']);?>">
      <div class="activity-item">
        <div class="activity-item-img">
          <a href="#" title=""><img src="/Public/Uploads/<?php echo $v[1]['pic'];?>" alt=""></a>
        </div>
        <div class="activity-item-info">
          <div class="activity-item-desc">
            <p class="activity-item-title">活动日期：<?php echo date('Y.m',$v[1]['start_time']);?></p>
            <p class="activity-item-text"><?php echo $v[1]['intro'];?></p>
          </div>
          <div class="activity-link">
            <a href="<?php echo U('Order/despeak?id='.$v[1]['id']);?>" title="">点击预约</a>
          </div>
        </div>
      </div>
    </a>
<?php endif;?>
    <!--right end------>
          <div class="clear"></div>
        </div>
		</a>
      <?php endforeach;?>


    </div>
  </div>
</div>

<script type="text/javascript">
  $(function(){
    /*
      var globalS=0;
      $(window).scroll(function(){
      var h = $(window).scrollTop();
      if(h>300+480*globalS)
      {
        globalS++;
        $('.pblh-list-item').eq(globalS).show('slow');
      }
      
    });
    */
      $('.pblh-hover').bind({'mouseover':function(){
          $(this).css('cursor','pointer');
          $(this).css('color','white');
          $(this).find('a').css('color','white');
          $(this).css('background','#444444');
      },'mouseout':function(){
          $(this).css('color','#444444');
          $(this).find('a').css('color','#444444');
          $(this).css('background','white');
      }});
  })
</script>



<?php require_once('/Public/Home/footer.html');?>