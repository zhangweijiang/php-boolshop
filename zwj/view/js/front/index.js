$(function(){
	//start轮播图的js
	var oul = $('.wrap ul');
	var ali = $('.wrap ul li');
	var numLi = $('.wrap ol li');
	var aliWidth = $('.wrap ul li').eq(0).width();
	var _now = 0;	//这个是控制数字样式的计数器
	var _now2 = 0;	//这个是控制图片运动距离的计数器
	var timeId;
	var aimg = $('.wrap ul img');
	/**
	 * [slider description] 图片运动的函数
	 * @return {[type]} [description] 无返回值
	 */
	function slider(){
		if(_now==numLi.length-1){
			ali.eq(0).css({
					'position':'relative',
					'left': oul.width()
			});
			_now=0;
		}else{
			_now++;
		}

		_now2++;

		numLi.eq(_now).find('img').attr('src','/zwj/view/images/front/circle2.png');
		numLi.eq(_now).siblings().find('img')
		.attr('src','/zwj/view/images/front/circle1.png');

		oul.stop(true,true).animate({'left':-aliWidth*_now2},300,function(){
			if(_now==0){
				ali.eq(0).css('position','static');
				oul.css('left',0);
				_now2=0;
			}
		});
	}
	timeId = setInterval(slider,3500);

		numLi.click(function(){
		var index = $(this).index();
		_now = index;
		_now2=index;
		$(this).find('img').attr('src','/zwj/view/images/front/circle2.png');
		$(this).siblings().find('img')
		.attr('src','/zwj/view/images/front/circle1.png');
		oul.stop(true,true).animate({'left':-aliWidth*_now},300);
	});
	$('div.next').click(function(){
		if(_now==numLi.length-1){
			ali.eq(0).css({
					'position':'relative',
					'left': oul.width()
			});
			_now=0;
		}else{
			_now++;
		}
		_now2++;
		if(_now2>numLi.length){
			_now2=numLi.length;
			_now=0;

		}
		numLi.eq(_now).find('img').attr('src','/zwj/view/images/front/circle2.png');
		numLi.eq(_now).siblings().find('img')
		.attr('src','/zwj/view/images/front/circle1.png');

		oul.stop(true,true).animate({'left':-aliWidth*_now2},300,function(){
			if(_now==0){
				ali.eq(0).css('position','static');
				oul.css('left',0);
				_now2=0;
			}
		});
	});
		$('div.prev').click(function(){
		if(_now==0){
			ali.eq(numLi.length-1).css({
					'position':'relative',
					'left': -oul.width()
			});
			_now=numLi.length-1;
			
		}else{
			_now--;
			
		}
		_now2--;
		if(_now2<0){
			_now2=-1;
			_now=numLi.length-1;		
		}
		console.log(_now);
		console.log(_now2);
		numLi.eq(_now).find('img').attr('src','/zwj/view/images/front/circle2.png');
		numLi.eq(_now).siblings().find('img')
		.attr('src','/zwj/view/images/front/circle1.png');
		oul.stop(true,true).animate({'left':-aliWidth*_now2},300,function(){
			if(_now==numLi.length-1){
				ali.eq(numLi.length-1).css('position','static');
				oul.css('left',-(ali.width()*(numLi.length-1)));
				_now2=numLi.length-1;
			}
		});
	});
	$('.wrap').hover(function(){
		clearInterval(timeId);
	},function(){
		timeId = setInterval(slider,3500);
	});
	//end 轮播图的js
	//start图片滑动时放大效果
	 var over_id=null;
     var img_this=null;
  
    $('.thumb_img').hover(function(){
        img_this=$(this);
        over_id=setTimeout(function(){
        	img_this.stop(true,true).animate({width:'250px',height:'250px',left:-15,top:-15},500);
        },100);
    	},function(){
        clearTimeout(over_id);
            img_this.stop(true,true).animate({width:'220px',height:'220px',left:0,top:0},500);
    });
	//end图片滑动时放大效果


	//分类的显示
	var time;
	$('.cate_info ul li').mouseenter(function(){


		$(this).parent().parent().find('.category').show();
			var parent_id = $(this).attr('data-id');
		function ajax1() {
			$('.category').empty();
			$.ajax({
				url: '/zwj/controller/front/category.php',
				type: 'post',
				dataType: 'json',
				data: {'parent_id': parent_id},
				success: function (data) {
					var str = "";
					for (var i = 0; i < data.length; i++) {
						str += "<a data-id='" + data[i]['cat_id'] + "' href='/zwj/controller/front/goods_cat.php?cat_id=" + data[i]['cat_id'] + "' class='category_son'>" + data[i]['cat_name'] + "</a>";
					}
					$('.category').append(str);
				}
			});
		}
		 time=window.setTimeout(function(){
			 ajax1();
		 },100);
	});

	$('.cate_info ul li').mouseleave(function(){
		clearTimeout(time);
		$(this).parent().parent().find('.category').hide();
	});
	$('.category').hover(function(){
		$(this).show();
	},function(){
		$(this).hide();
	});


	$('.cate_info ul li').click(function(){
		var cat_id=$(this).attr('data-id');
		window.location.href="/zwj/controller/front/goods_cat.php?cat_id="+cat_id;
	});
	/*$('.category').on('mouseenter','.category_son',function(){
		$('.category_son_two').remove();
		var cat_id=$(this).attr('data-id');
		$.ajax({
			url: '/zwj/controller/front/category.php',
			type: 'post',
			dataType: 'json',
			data: {'parent_id': cat_id},
			success: function (data) {
				var str = "<div style='width:600px;height:100px;margin-top:50px;' class='category_son_two'>";
				for (var i = 0; i < data.length; i++) {
					str += "<a data-id='"+data[i]['cat_id']+"' href='/zwj/controller/front/goods_cat.php?cat_id=" + data[i]['cat_id'] + "' class='category_son'>" + data[i]['cat_name'] + "</a>";
				}
				str+="</div>";
				$('.category').append(str);
			}
		});
	});


	$('.category').on('mouseleave','.category_son',function() {


	});*/


});