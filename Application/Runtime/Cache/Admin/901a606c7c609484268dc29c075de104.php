<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{text-align: center;margin-top: 160px;}
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px;}
.success-icon{color: #2CF4ED; }
.error-icon{color: #ff7967}
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #01a8f9;}
.system-message .success{color: #2CF4ED;}
.system-message .error{color: #ff7967;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px;}
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
#wait{color: #D23028}
</style>
</head>
<body>
<div class="system-message">
<?php if(isset($message)): ?><h1 class="success-icon">｡◕‿◕｡</h1>
<p class="success"><?php echo($message); ?></p>
<?php else: ?>
<h1 class="error-icon">(⊙ˍ⊙)</h1>
<p class="error"><?php echo($error); ?></p><?php endif; ?>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond);?></b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>