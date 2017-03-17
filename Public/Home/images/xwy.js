// JavaScript Document
var imgSrc = "http://www.zxznz.cn/images/xwy.png";//图片地址
var linkSrc = "http://www.zxznz.cn/";
if( typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat'){
document.writeln('<div id="mainbox" style="background:url('+imgSrc+');background-repeat:no-repeat;z-index:1001;right:10px;bottom:110px; height:395px;width:154px;overflow:hidden;position:fixed;_position:absolute; _margin-top:expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);">');
}else {
document.writeln('<div id="mainbox" style="background:url('+imgSrc+');background-repeat:no-repeat;z-index:1001;left:0;bottom:0px; height:10px;width:10px;overflow:hidden;position:fixed;*position:absolute; *top:expression(eval(document.body.scrollTop)+eval(document.body.clientHeight)-this.style.pixelHeight);">');
}
document.writeln('<div style="width:20px;height:20px;float:right;cursor:pointer;" onclick="this.parentNode.style.display=\'none\'"></div><div style="height:395px;width:154px;"><a style="height:420px;width:144px;display:block;cursor:pointer;outline: none; blr:expression(this.onFocus=this.blur());" href="http://www.zxznz.cn/" target="_blank"></a></div>');
document.writeln('</div>');