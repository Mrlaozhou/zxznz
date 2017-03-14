<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - <?php echo $_page_title; ?> </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src='/Public/jquery-1.11.3.min.js'></script>
    <link href="/Public/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
    <script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo $_page_btn_link; ?>"><?php echo $_page_btn_name; ?></a></span>
    <span class="action-span1"><a href="#">管理中心</a></span>
    <span id="search_id" class="action-span1"> - <?php echo $_page_title; ?> </span>
    <div style="clear:both"></div>
</h1>

<!-- 内容 -->


	<link href="/Public/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
    <script type="text/javascript" src="/Public/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
    
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front">密码操作</span>
        </p>
    </div>
    <div id="tabbody-div">
	    <form method="" action="" enctype="multipart/form-data" >
	    	<!-- 基本信息 -->
	        <table class="tab_content" cellspacing="1" cellpadding="3" width="100%">
	            <tr>
	                <td class="label">加密：</td>
	                <td>
	                	<br />
	                    模块名 ：<input id="en_module" type="text" name="module" value="" /><br /><br /><br />
	                    行为名 ：<input id="en_action" type="text" name="action" value="" /><br /><br /><br />
	                    加密为 ：<span id="michi" style="color:red;"></span>
	                    		
	                    <br /><br />
	                </td>
	            </tr>
	        </table>
	        <table cellspacing="1" cellpadding="3" width="100%">
	        	<tr>
	                <td colspan="2" align="center"><br />
	                    <input id="encode" type="button" class="button" value=" 加密 " />
	                </td>
	            </tr>
	        </table>
	    </form>
	    <form method="post" action="" enctype="multipart/form-data" >
	    	<!-- 基本信息 -->
	        <table class="tab_content" cellspacing="1" cellpadding="3" width="100%">
	            <tr>
	                <td class="label">解密：</td>
	                <td>
	                	<br />
	                    输入密匙 ：<input id="de_michi" type="text" name="action" value="" size="40"/><br /><br /><br />
	                    模块名 ：<span id="de_module" style="color:blue;"></span><br /><br /><br />
	                    行为名 ：<span id="de_action" style="color:blue;"></span><br />
	                    		
	                    <br /><br />
	                </td>
	            </tr>
	        </table>
	        <table cellspacing="1" cellpadding="3" width="100%">
	        	<tr>
	                <td colspan="2" align="center"><br />
	                    <input id="decode" type="button" class="button" value=" 解密 " />
	                </td>
	            </tr>
	        </table>
	    </form>
    </div>
</div>

<script>

$("#encode").click(function(){
	var mm = $('#en_module').val();
	var aa = $('#en_action').val();

	$.ajax({

		url:"http://www.z.com/index.php/Admin/Mburl/encode",
		type:"POST",
		dataType:"JSON",
		data:{'mm':mm,'aa':aa},
		success:function(data)
		{
			$("#michi").text(data.result);
		}
	})
})
$("#decode").click(function(){
	var de_michi = $('#de_michi').val();
	$.ajax({
		url:"http://www.z.com/index.php/Admin/Mburl/decode",
		type:"POST",
		dataType:"JSON",
		data:{'michi':de_michi},
		success:function(data)
		{
			$("#de_module").html();
			$("#de_action").html();		
			$("#de_module").html(data.result.m);
			$("#de_action").html(data.result.a);		
		}
	})
})
</script>

















<div id="footer"> ZXZNZ 后台管理系统</div>
</body>
</html>