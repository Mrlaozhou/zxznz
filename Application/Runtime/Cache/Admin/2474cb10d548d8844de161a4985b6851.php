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

<div class="form-div">
	<!-- 搜索表单 -->
    <form action="<?php echo U('big'); ?>" name="searchForm" method="post">
    	来源渠道：
    				<select name="from">
                        <option value="">所有</option>
                        <option value="1">PC端</option>
                        <option value="2">移动端</option>
                        <option value="3">公众号</option>
                    	<option value="4">其他</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    订单状态：  <select name="status">
                        <option value="">所有</option>
                        <option value="1">未支付</option>
                        <option value="2">已支付</option>
                        <option value="7">已取消</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    付款方式：  <select name="pay_type">
                        <option value="">所有</option>
                        <option value="1">支付宝</option>
                        <option value="2">微信</option>
                        <option value="3">公众号</option>
                        <option value="4">现金</option>
                        <option value="5">其它</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        活动名称：   <select name="active">
                        <option value="">所有</option>
                    <?php foreach($active as $k=>$v):?>
                        <option value="<?php echo $v['id']?>">
                            <?php echo $v['title'];?>
                        </option>
                    <?php endforeach;?>
                    </select> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
        时间搜索: 创建订单时间  
                    <script language="javascript" type="text/javascript" src="/Public/date/WdatePicker.js"></script>
                    <input class="Wdate" type="text" name="start" onClick="WdatePicker()">
                     — 
                    <input class="Wdate" type="text" name="end" onClick="WdatePicker()">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
        用户名 ：   <input type="text" size="13" name='username'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        订单编号：  <input type="text" name="code" size='30' />
                
    <input id="search" type="button" value=" 搜索 " class="button" />
    </form>
</div>
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <table id="showTable" cellpadding="3" cellspacing="1">
            
        </table>
    </div>
</form>

<script type="text/javascript">
function getData()
{
    var searchForm = document.searchForm;
    var val = $(searchForm).serialize();
    var html = '';
    var show = document.getElementById('showTable');      
    $.ajax({
        url:'/index.php/Admin/Order/search',
        type:'POST',
        data:val,
        dataType:'JSON',
        success:function(data)
        {
            if( data.status )
            {
                $(data.data).each(function(k,v)
                    {
                        var status = '';
                        var pay_type = '';
                        var from = '';
                        var style = '';
                        switch (v.status) 
                        {
                            case '1':
                                status="<span style='color:red;'>未支付</span>";
                                break;
                            case '2':
                                status="<span style='color:blue;'>已支付</span>";
                                break;
                            case '7':
                                status="<span style='color:black;'>已取消</span>";
                                break;
                        }
                        switch (v.pay_type) 
                        {
                            case '0':
                                pay_type="<span style='color:black;'>无状态</span>";
                                break;
                            case '1':
                                pay_type="<span style='color:blue;'>支付宝</span>";
                                break;
                            case '2':
                                pay_type="<span style='color:green;'>微信</span>";
                                break;
                            case '3':
                                pay_type="<span style='color:#C40000;'>公众号</span>";
                                break;
                            case '4':
                                pay_type="<span style='color:red;'>现金</span>";
                                break;
                            case '5':
                                pay_type="<span style='color:yellow;'>其它</span>";
                                break;
                        }
                        switch (v.from) 
                        {
                            case '1':
                                from="<span style='color:blue;'>PC端</span>";
                                break;
                            case '2':
                                from="<span style='color:red;'>移动端</span>";
                                break;
                            case '3':
                                from="<span style='color:#C40000;'>公众号</span>";
                                break;
                            case '4':
                                from="<span style='color:black;'>其它</span>";
                                break;
                        }
                        if( k%2 == 0 )
                        {
                            style = "background:#ccc;";
                        }
                        html += "<tr style='"+style+"'>";
                        html += "   <td align='center'>"+(k+1)+"</td>";
                        html += "   <td align='center'>"+v.username+"</td>";
                        html += "   <td align='center'>"+v.active_name+"</td>";
                        html += "   <td align='center'>"+v.code+"</td>";
                        html += "   <td align='center'>"+status+"</td>";
                        html += "   <td align='center'>"+pay_type+"</td>";
                        html += "   <td align='center'>"+from+"</td>";
                        html += "   <td align='center'>"+v.create_time+"</td>";
                        html += "   <td align='center'>"+v.cancel_time+"</td>";
                        html += "   <td align='center'>"+v.pay_time+"</td>";
                        html += "   <td align='center'>"+v.need_pay+"</td>";
                        html += "   <td align='center'>"+v.true_pay+"</td>";
                        html += "   <td align='center'>"+v.count+"</td>";
                        html += "   <td align='center'>"+v.price+"</td>";
                        html += '</tr>';
                    });
                
            }
            else
            {
                html="<tr><td colspan='14'><span style='color:red;'>无数据...</span></td></tr>";
            }
            var tr1 = "<tr><th>序号</th><th>用户名</th><th>活动名称</th><th>订单编号</th><th>订单状态</th><th>付款方式</th><th>来源渠道</th><th>创建时间</th><th>取消时间</th><th>付款时间</th><th>需付款</th><th>实付款</th><th>数量</th><th>单价</th></tr>";
            html = tr1+html;

            $(show).html(html);
            console.log(data.sql);
        }
    })
};
$('#search').click(function()
{
    getData();
})
getData();
</script>

<div id="footer"> ZXZNZ 后台管理系统</div>
</body>
</html>