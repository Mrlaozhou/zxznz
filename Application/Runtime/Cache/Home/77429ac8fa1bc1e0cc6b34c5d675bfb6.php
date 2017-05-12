<?php if (!defined('THINK_PATH')) exit(); require_once('/Public/Home/header.html');?>





<div style="margin:80px auto;text-align:center;">
	<p style="text-align:center;font-size:22px;color:black;font-weight:bold;">请用微信扫描下方二维码支付</p>
	<img alt='模式二扫码支付' src='http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo $url;?>' style='width:250px;height:250px;'/>	
</div>

<script type="text/javascript">

	setInterval(function(){
		$.ajax({
			url:'http://www.zxznz.cn/index.php/Home/Index/queryOrder',
			type:'post',
			data:{'id':<?php echo $id;?>},
			dataType:'JSON',
			success:function(data)
			{
				if( data.status == true )
				{
					window.location.href = 'http://www.zxznz.cn/index.php/Home/Order/over/orderId/'+<?php echo $id;?>;
				}
			}})},5000)

</script>
<?php require_once('/Public/Home/footer.html');?>