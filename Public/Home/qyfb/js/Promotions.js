//促销活动自动切换效果js
var slideTxt={
	thisBox:$('.content3-r .content3-r-con'),//这里的样式名要与内容区保持一致
	btnLeft:$('.content3-r a.arrowleft'),
	btnRight:$('.content3-r a.arrowright'),
	thisEle:$('.content3-r .content3-r-con div'),
	init:function(){
		slideTxt.thisBox.width(slideTxt.thisEle.length*230);//这个宽度等于内容区的宽度，是内容移出去的宽度
		slideTxt.slideAuto();
		slideTxt.btnLeft.click(slideTxt.slideLeft).hover(slideTxt.slideStop,slideTxt.slideAuto);
		slideTxt.btnRight.click(slideTxt.slideRight).hover(slideTxt.slideStop,slideTxt.slideAuto);
		slideTxt.thisBox.hover(slideTxt.slideStop,slideTxt.slideAuto);
		},
	slideLeft:function(){
		slideTxt.btnLeft.unbind('click',slideTxt.slideLeft);
		slideTxt.thisBox.find('div:last').prependTo(slideTxt.thisBox);
		slideTxt.thisBox.css('marginLeft',-230);//这个宽度等于内容区的宽度，是内容移出去的宽度
		slideTxt.thisBox.animate({'marginLeft':0},230,function(){
			slideTxt.btnLeft.bind('click',slideTxt.slideLeft);
			});
		return false;
		},
	slideRight:function(){
		slideTxt.btnRight.unbind('click',slideTxt.slideRight);
		slideTxt.thisBox.animate({'marginLeft':-230},230,function(){
			slideTxt.thisBox.css('marginLeft','0');
			slideTxt.thisBox.find('div:first').appendTo(slideTxt.thisBox);
			slideTxt.btnRight.bind('click',slideTxt.slideRight);
			});
		return false;
		},
	slideAuto:function(){
		slideTxt.intervalId=window.setInterval(slideTxt.slideRight,5000);
		},
	slideStop:function(){
		window.clearInterval(slideTxt.intervalId);
		}
	}
$(function(){
	slideTxt.init();

});