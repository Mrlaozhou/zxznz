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

<!-- 列表 -->
<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">

    	<tr>
            <th >编号</th>
            <th >导航栏名称</th>
            <th >对应的控制器名</th>
            <th >对应的方法名</th>
			<th width="200">操作</th>
        </tr>

    <?php foreach($data as $k => $v):?>
        <tr>
            <td align='center'><?php echo $v['id'];?></td>
            <td align='center'><?php echo $v['name'];?></td>
            <td align='center'><?php echo $v['controller'];?></td>
            <td align='center'><?php echo $v['action'];?></td>
            <td align='center'>
                <a id='del' delid='<?php echo $v['id'];?>' pid="<?php echo $v['parent_id'];?>" onclick="del(this)" href="javascript:void(0)">删除</a> | 
                <a href="<?php echo U('edit?id='.$v['id']);?>">修改</a> | 
                <a navId="<?php echo $v['id'];?>" href="javascript:;" onclick="refreshNavToTop(this);">点击刷新</a>
            </td>
        </tr>
    <?php endforeach;?>

	</table>
</div>
<script type="text/javascript">
function del(a){
    var id = $(a).attr('delid');
    if ( window.confirm('你确定要删除此条信息吗 ？') )
    {
        $.ajax({
            type:'GET',
            url:'/index.php/Admin/Nav/del/id/'+id,
            dataType:'json',
            success:function(msg)
            {
                if(msg.result == 1)
                {
                    alert('删除成功！');
                    $(a).parent().parent().remove();
                } 
                else
                {
                    alert(msg.result);
                }   
            }
        })
    }
}

function refreshNavToTop(a)
{
    if( window.confirm('点击确定，刷新置顶！') )
    {
        var id = $(a).attr('navId');
        $.ajax({
            url:"/index.php/Admin/Nav/ajaxRefreshNavTop/id/"+id,
            type:"GET",
            dataType:'json',
            success:function(data){
                if( data.result )
                {
                    $(a).html("<span style='color:red;'>刷新成功</span>");
                }
                else
                {
                    $(a).html("<span style='color:blue;'>刷新失败</span>");
                }
            }
        })
    }
}

</script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/Js/tron.js"></script>

<div id="footer"> ZXZNZ 后台管理系统</div>
</body>
</html>