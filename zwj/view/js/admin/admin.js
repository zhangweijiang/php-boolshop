$(function(){

	//移动窗口的步骤
	//1、按下鼠标左键
	//2、移动鼠标
	//获得可视区域的高度
	var windowHeight=$(window).height();
	//获得类名为.header的标签设置高度
	var headerHeight=$('.head').outerHeight(true);
	//获得类名为.outer的标签设置高度
	$('.outer').css('height',windowHeight-headerHeight+'px');
	//获得类名为.outerContent的标签设置高度
	$('.outerContent').css('height',windowHeight-headerHeight+'px');

	//获得标签的类名为.outerContent的宽度
	var outerContentWidth=$('.outerContent').outerWidth(true);
	//获得标签类名为.outer的宽度
	var outerWidth=$('.outer').outerWidth(true);
	//获得左边所有div标签的宽度
	var leftWidth=outerContentWidth+outerWidth;
	//获得可视区域的宽度
	var totalWidth=$(window).width();
	$('iframe:first').css({
		"width":totalWidth-leftWidth+'px',
		"height":windowHeight-headerHeight+'px',
		"display":'block',
		"float":'right'
	});

	$('.inner').mousedown(function(e){

		// e.pageX
		var positionDiv = $(this).offset();
		var positionOuterDiv = $('.outer').offset();
		var distenceY = e.pageY - positionDiv.top + positionOuterDiv.top;
		//alert(distenceX)
		// alert(positionDiv.left);
		


		$(document).mousemove(function(e){
			var y = e.pageY - distenceY;
			if(y<0){
				y=0;
			}else if(y>$('.outer').height()-$('.inner').outerHeight(true)){
				y = $('.outer').height()-$('.inner').outerHeight(true);
			}

			$('.inner').css({
				'top':y+'px'
			});

			var percentage = y/($('.outer').height()-$('.inner').outerHeight(true));
			var dragHeight = $('.innerContent').height()-$('.outerContent').height();
			$('.innerContent').css('top',-percentage*dragHeight);

		});

		$(document).mouseup(function(){
			$(document).off('mousemove');
		});
	});


	var speed = 0;
	$('.outerContent').mousewheel(function(e,d){
		var innerTop = parseInt($('.inner').css('top'));
		var percentage = innerTop/($('.outer').height()-$('.inner').outerHeight(true));
		var dragHeight = $('.innerContent').height()-$('.outerContent').height();
		if(d==-1){
			speed++;
			if(speed>=($('.outer').height()-$('.inner').height())/10){	
				speed=(($('.outer').height()-$('.inner').height())/10);			
			}
			//注意:speed只能乘以10,乘以20,30不能实现效果
			$('.inner').css('top',speed*10+'px');
			$('.innerContent').css('top',-percentage*dragHeight);
		}else{
			speed--;
			if(speed<=0){
				speed=0;
			}
			$('.inner').css('top',speed*10+'px');
			$('.innerContent').css('top',-percentage*dragHeight);
		}

	});

});