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
            <span class="tab-front">基本信息</span>
            <span class="tab-back">医生介绍</span>
            <span class="tab-back">职业经历</span>
        </p>
    </div>
    <div id="tabbody-div">
	    <form method="post" action="<?php echo U('add'); ?>" enctype="multipart/form-data" >
	    	<!-- 基本信息 -->
	        <table class="tab_content" cellspacing="1" cellpadding="3" width="100%">
	            <tr>
	                <td class="label">医生名称</td>
	                <td>
	                    <input type="text" name="name" size="20" maxlength="20" value="" />
	                    <span class="require-field">*</span>
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">性别</td>
	                <td>
	                    <input type="radio" name="sex" value="男" checked="checked" /> 男
	                    <input type="radio" name="sex" value="女"  /> 女
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">职务</td>
	                <td>
	                    <input type="text" name="duty" size="20" maxlength="20" value="" />
	                    <span class="require-field">*</span>
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">职称</td>
	                <td>
	                    <input type="text" name="title" size="20" maxlength="20" value="" />
	                    <span class="require-field">*</span>
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">从行时间</td>
	                <td>
	                    <input type="text" name="start" size="20" maxlength="20" value="" />
	                    <!-- <script language="javascript" type="text/javascript" src="/Public/date/WdatePicker.js"></script>
	                    <input class="Wdate" type="text" name="start" onClick="WdatePicker()"> -->
	                    <span class="require-field">* 格式为：2017-01-01</span>
	                    <br /><br />
	                </td>
	            </tr>
	        <!--
	            <tr>
	                <td class="label">医院地址</td>
	                <td>

	                    <select name="province">
	                    	<option value="">请选择省份</option>
	                    	<?php foreach($smp->province as $k => $v):?>
	                    	<option value="<?php echo $v['name'];?>">
	                    		<?php echo $v['name'];?>
	                    	</option>
	                    	<?php endforeach;?>
	                    </select>

	        			<select name="city">
	                    	<option value="">请选择城市</option>
	                    </select><br /><br />

	                    请填写详细地址：<input type="text" name="detial" size='40' placeholder="区县、街道、号">
	                    <span class="require-field">*</span>
	                    <br /><br />
	                </td>
	            </tr>
	        -->
	            <tr>
	                <td class="label">医生照片</td>
	                <td>
	                    <input type="file" name="picture" />
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">学历</td>
	                <td>
	                    <select name="edu">
	                    	<option value="">请选择学历</option>
	                    	<option value="中专">中专</option>
	                    	<option value="大专">大专</option>
	                    	<option value="本科">本科</option>
	                    	<option value="研究生">研究生</option>
	                    	<option value="博士">博士</option>
	                    	<option value="博士">博士后</option>
	                    </select>
	                    <br /><br />
	                </td>
	            </tr>
		        <tr>
	                <td class="label">擅长项目：</td>
	                <td>
	                    <input type="text" size="60" name="good" placeholder="请用','号隔开" /><br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">是否显示</td>
	                <td>
	                    <input type="radio" name="is_show" value="是" checked="checked" /> 是
	                    <input type="radio" name="is_show" value="否"  /> 否
	                    <br /><br />
	                </td>
	            </tr>
	            <tr>
	                <td class="label">显示到主页</td>
	                <td>
	                    <input type="radio" name="is_index" value="1" /> 是
	                    <input type="radio" name="is_index" value="0" checked="checked"  /> 否
	                    <br /><br />
	                </td>
	            </tr>

	        </table>
	        <!-- 医生描述 -->
	        <table style="display:none;" class="tab_content" cellspacing="1" cellpadding="3" width="100%">
	        	<tr>
	                <td><textarea id="intro" name="intro" cols="60" rows="4"  ></textarea></td>
	            </tr>
	        </table>
	        <!-- 从业经历 -->
	        <table id="table_pic_list" style="display:none;" class="tab_content" cellspacing="1" cellpadding="3" width="100%">
	        	<tr>
	                <td><input id="btn_add_pic" type="button" value="添加职业经历" /></td>
	            </tr>
	            <tr>
	            	<td><textarea style="width:300px;height:60px;" name="pass[]"></textarea></td>
	            </tr>
	        </table>
	        <!-- 提交按钮 -->
	        <table cellspacing="1" cellpadding="3" width="100%">
	        	<tr>
	                <td colspan="2" align="center"><br />
	                    <input type="submit" class="button" value=" 确定 " />
	                    <input type="reset" class="button" value=" 重置 " />
	                    <input type="hidden" name="hos_id" value="<?php echo $hos_id;?>" />
	                </td>
	            </tr>
	        </table>
	    </form>
    </div>
</div>

<script>
UM.getEditor('intro', {
	initialFrameWidth : "80%"
});
function addNewExtCat(btn)
{
	// 选择后面的下拉框并克隆一个
	var newSel = $(btn).next("select").clone();
	// 把新的下拉框添加到当前TD的最后
	$(btn).parent().append(newSel);
}
// 为类型绑定change事件
$("select[name=province]").change(function(){
	// 先取出选择的类型ID
	var province = $(this).val();
	province = encodeURI(encodeURI(province));
	var html = '';
	$.ajax({
		type : "GET",
		url : "<?php echo U('ajaxGetCitys', '', FALSE); ?>/province/"+province,
		dataType : "json",
		success : function(data)
		{
			//拼接代码
			$(data).each(function(k,v){
				html += "<option value='"+v+"'>"+v;
				html += "</option>";
			});
			//把代码追加到select[name='city']
			$("select[name=city]").html(html);
		}
	});
});
function onloadAjax()
{
	var province = $("select[name=province]").val();
	province = encodeURI(encodeURI(province));
	var html = '';
	if( province )
	{
		$.ajax({
			type : "GET",
			url : "<?php echo U('ajaxGetCitys', '', FALSE); ?>/province/"+province,
			dataType : "json",
			success : function(data)
			{
				//拼接代码
				$(data).each(function(k,v){
					html += "<option value='"+v+"'>"+v;
					html += "</option>";
				});
				//把代码追加到select[name='city']
				$("select[name=city]").html(html);
			}
		});		
	}
	else
	{
		html = "<option valuse=''>请选择城市</option>";
		//把代码追加到select[name='city']
		$("select[name=city]").html(html);
	}
}
//网页加载完成  调用
onloadAjax();



// +号的事件
function addRow(a)
{
	// 先选中所在的LI标签
	var li = $(a).parent();
	if(li.find('a').html() == '[+]')
	{
		// 克隆一个新的LI
		var newLi = li.clone();
		// 变成-号
		newLi.find('a').html('[-]');
		// 新LI放到LI后面
		li.after(newLi);
	}
	else
		li.remove();
}
$("#tabbar-div p span").click(function(){
	// 获取点击的是第几个
	var i = $(this).index();
	// 先隐藏所有的table
	$(".tab_content").hide();
	// 显示第i个
	$(".tab_content").eq(i).show();
	$(".tab-front").removeClass("tab-front").addClass('tab-back');
	$(this).removeClass("tab-back").addClass('tab-front');
});

$("#btn_add_pic").click(function(){
	$("#table_pic_list").append('<tr><td><textarea style="width:300px;height:60px;" name="pass[]"></textarea></td></tr>');
});
</script>

















<div id="footer"> ZXZNZ 后台管理系统</div>
</body>
</html>