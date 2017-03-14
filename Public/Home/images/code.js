// JavaScript Document
var imgSrc = "http://www.zxznz.cn/images/weixin.jpg";//图片地址
//var linkSrc = ""; 页面地址   http://www.zxznz.cn/joinus/
if( typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat'){
document.writeln('<div id="mainbox" style="background:url('+imgSrc+');background-repeat:no-repeat;z-index:1001;right:10px;bottom:110px; height:263px;width:143px;overflow:hidden;position:fixed;_position:absolute; _margin-top:expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);">');
}else {
document.writeln('<div id="mainbox" style="background:url('+imgSrc+');background-repeat:no-repeat;z-index:1001;left:0;bottom:0px; height:10px;width:10px;overflow:hidden;position:fixed;*position:absolute; *top:expression(eval(document.body.scrollTop)+eval(document.body.clientHeight)-this.style.pixelHeight);">');
}
document.writeln('<div style="width:20px;height:20px;float:right;cursor:pointer;" onclick="this.parentNode.style.display=\'none\'"></div><div style="clear:both;font-size:0;height:0"></div>');
document.writeln('</div>');
