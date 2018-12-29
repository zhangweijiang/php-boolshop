$(function(){
	var smallImgLi = $('.wrapSmallImg ul li');
	var smallImgLiLength = smallImgLi.length;
	var smallImgLiWidth = smallImgLi.outerWidth(true);
	var smallImgUl = $('.wrapSmallImg ul');
	var leftBtn = $('span.left');
	var rightBtn = $('span.right');
	var now = 0;
	var zoomMiddleDiv = $('.zoomMiddle');

	smallImgLi.mouseover(function(){
		$(this).addClass('current').siblings().removeClass('current');
		var thisSrc = $(this).children('img').attr('src');
		$('.zoomMiddle img').attr('src',thisSrc);
		$('.zoomLarge img').attr('src',thisSrc);
	});

	rightBtn.bind('click',function(){
		//当now=2的时候，我们不希望再让他滚动了
		leftBtn.removeClass('disable');
		if(now>=smallImgLiLength-6){
			$(this).addClass('disable');
		}
		if(now>=smallImgLiLength-5){
	/*		$(this).addClass('disable');*/
			now = smallImgLiLength-5;

		}else{
			now++;
			smallImgUl.animate({'left':-now*smallImgLiWidth},300);
		}
	});

	leftBtn.bind('click',function(){	
		rightBtn.removeClass('disable');
		if(now==1){
			$(this).addClass('disable');
		}
		if(now<=0){
		/*	$(this).addClass('disable');*/
			now=0;
		}else{
			now--;
			smallImgUl.animate({'left':'+='+smallImgLiWidth},300);
		}
		
	});

	if($('.wrapSmallImg li').length<=5){
		leftBtn.addClass('disable');
		rightBtn.addClass('disable');
		leftBtn.unbind('click');
		rightBtn.unbind('click');
	}
	zoomMiddleDiv.mousemove(function(e){
		$(this).css('cursor','move');
		$('.mask').show();
		$('.zoomLarge').show();
		zoomMiddleDivOffset = $(this).offset();
		var x = e.pageX - zoomMiddleDivOffset.left - $('.mask').width()/2;
		var y = e.pageY - zoomMiddleDivOffset.top - $('.mask').height()/2;

		if(x<=0){
			x=0;
		}else if(x>=zoomMiddleDiv.width()-$('.mask').width()){
			x = zoomMiddleDiv.width()-$('.mask').width();
		}

		if(y<=0){
			y=0;
		}else if(y>=zoomMiddleDiv.height()-$('.mask').height()){
			y = zoomMiddleDiv.height()-$('.mask').height();
		}

		var percentageX = x/(zoomMiddleDiv.width()-$('.mask').width());
		var percentageY = y/(zoomMiddleDiv.height()-$('.mask').height());

		$('.zoomLarge img').css({
			left:-percentageX*(750-$('.zoomLarge').width()),
			top:-percentageY*(750-$('.zoomLarge').height())
		});
		

		$('.mask').css({
			'left':x+'px',
			'top':y+'px'
		});
	});

	zoomMiddleDiv.mouseout(function(){
		$('.mask').hide();
		$('.zoomLarge').hide();
	});
});