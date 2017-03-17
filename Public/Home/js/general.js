$(function(){
	$(window).scroll(function(){
		var h = $(window).scrollTop();
		if(h >= 300)
		{
			$(".fixed").css("top","100px");
		}
		else
		{
			$(".fixed").css("top","610px");
		}
	});
/*
	$(".z-box-content > ul li").click(function(){
		var index = $(this).index();
		var thisSrc = $(this).find("img").attr("src");
		var ul = $(this).parent();
		var show = $(ul).find('[class=z-over]');

		var docName = $(this).attr('name');
		var hosName = $(this).attr('hos_name');
		var intro = $(this).attr('intro');

		$('.z-over').find('[class=doc-name]').html(docName);
		$('.z-over').find('[class=doc-hos_name]').html(hosName);
		$('.z-over').find('[class=doc-intro]').html(intro);

		$(".z-box-content .z-over").css("display","none");
		$(show).css("display","block");
		$(show).find('img').attr('src',thisSrc);
		$(".z-box-content li").css("opacity","0.5");
	});
	$(".close").click(function(){
		var ul = $(this).parent().parent();
		$(ul).css("display","none");
		$(".z-box-content li").css("opacity","1");

	});	
*/

	$(".h-box-content > ul li").bind({"mouseover":function(){
		var name = $(this).find("[class=name]");

		$(name).css("color","#C40000");
		
		$(this).addClass('shadow');
	},"mouseout":function(){
		var name = $(this).find("div");

		$(name).css("color","black");
		$(this).removeClass('shadow');
	}});
})