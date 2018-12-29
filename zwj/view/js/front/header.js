$(function(){
	var session_username=$('.session_username').html();
	/*start 头部事件*/
	var head_this=null;
	var head_timeid=null;
	var head_index=null
	$('.bgwhite').hover(function(){
	 head_this=$(this);
	 head_index=head_this.index('.bgwhite');
		head_timeid = setTimeout(function(){
			head_this.css('background-color','white');
			$('.nav_list').eq(head_index).show();
		},300);
	},function(){
		//clearTimeout的作用是清除定时器
		clearTimeout(head_timeid);
		head_this.css('background-color','');
		$('.nav_list').eq(head_index).hide();

	});
		/*end头部事件*/

	/*start 头部搜索栏显示事件*/
	$(document).scroll(function(e,d){
		var scolltopHeight=$(document).scrollTop();
		if(scolltopHeight>600){
			$('#header_serach').show();
		}else{
			$('#header_serach').hide();
		}
	});
	/*end 头部搜索栏显示事件*/

	/*start搜索栏的事件*/
	$('.search_type').hover(
		function(){
			$('.search_type_content').show();
			$('.search_type_content li').click(function(){
				var content=$(this).html();
				$(this).parent().parent().find('input.s').val(content);
				$('.search_type_content').hide();
			});
		},function(){
			$('.search_type_content').hide();
		});
	/*end搜索栏的事件*/

	/*start可伸展的jQuery侧边栏固定浮动菜单的事件*/
	var dice_menu_height=$(window).height()-$('.dice-menu').height();
	var li_no=$('<li class="no"></li>');
	li_no.css('height',dice_menu_height);
	li_no.appendTo($('ul.dice-menu'));
	$('.dice-menu li:first').click(function(){
		$(this).siblings().slideToggle('fast');
	});	
	var timeId = null;
	var _index=null;
	$('.dice-menu>li:not(".no")').hover(function(){
		 _this=$(this);
		_index=_this.index('.dice-menu>li:not(".no")');
		timeId = setTimeout(function(){
	 	var height=_this.offset();
		_this.css('opacity','.7');
		$('.triangle_border').eq(_index).show();
		$('.triangle_border').eq(_index).animate({right:'22px'},300);
	},300);},
		function(){
		//clearTimeout的作用是清除定时器
		clearTimeout(timeId);
		_this.css('opacity','1');
		var _index1=_index;
		$('.triangle_border').eq(_index).animate({'right':'52px'},300,
			function(){
					$('.triangle_border').eq(_index1).hide();
					
			});
	});

	var index_click=null;
	$('.dice-menu>li:not(".no")').not(':first').not(':last').click(function(){
		var li_list=$(this);
		$.ajax({	
					url:'/zwj/controller/front/user_exists.php',
					type:'POST',
					dataType:'text',
					async:true,
					success:function(data){
						if(data=='true'){
							//登陆
							if($('.dice-menu').css('right')=="0px"){
								
								index_click=li_list.index('.dice-menu>li:not(".no")');
								$('.dice-menu-content').eq(index_click-1).
								show().siblings('.dice-menu-content').hide();
								$('.dice-menu').animate({'right':'300px'});
								$('.dice-menu-content').animate({'right':'0px'});
							}else{
								if(index_click==li_list.index('.dice-menu>li:not(".no")')){
								$('.dice-menu').animate({'right':'0px'});
								$('.dice-menu-content').animate({'right':'-300px'});
									}else{
										index_click=li_list.index('.dice-menu>li:not(".no")');
										$('.dice-menu-content').eq(index_click-1).css('top','100%');
										$('.dice-menu-content').eq(index_click-1).
									    show().siblings('.dice-menu-content').hide();
									    $('.dice-menu-content').eq(index_click-1).animate({'top':'0px'});
									}
							}
						}else{
							window.location.href="/zwj/controller/front/login.php";
							
						}
					}
				});
		
		
	});
	$('.dice-menu-content i').click(function(){
			$('.dice-menu').animate({'right':'0'});
			$('.dice-menu-content').animate({'right':'-300px'});
	});
	/*end可伸展的jQuery侧边栏固定浮动菜单的事件*/
//火箭点击的事件
	$("#gotop1").click(function(e) {
 	TweenMax.to(window, 1.5, {scrollTo:0, ease: Expo.easeInOut});
 	var huojian = new TimelineLite();
	huojian.to("#gotop1", 1, {rotationY:720, scale:0.6, y:"+=40",
	 ease:  Power4.easeOut})
	.to("#gotop1", 1, {y:-1000, opacity:0, ease:  Power4.easeOut}, 0.6)
	.to("#gotop1", 1, {y:0, rotationY:0, opacity:1, scale:1, 
	ease: Expo.easeOut, clearProps: "all"}, "1.4");
	}); 
	//结束火箭点击事件
	//购物车里的增加和减少按钮显示
	$('div.gouwuche_content>ul>li').hover(function(){
		
		$(this).find('.gouwuche_show').css('cursor','pointer');
		$(this).find('.gouwuche_show').css('visibility','visible');
	},function(){
		
		$(this).find('.gouwuche_show').css('visibility','hidden');
	});
	$('.gouwuche_inc').click(function(){
			var gouwuche_this=$(this);
			var gouwuche_num=parseInt($(this).prev('span.gouwuche_num').html());
			var gouwuche_id=$(this).parent().parent().find('input.gouwuche_id').val();
			
			$.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'act':'select','gouwuche_id':gouwuche_id},
					success:function(data){
						var num=parseInt(data['sum']);
						if(gouwuche_num>=num){
							alert('您所要购买商品数量超过库存数量！');
							gouwuche_this.css({'position':'relative','z-index':-1,opacity:.5});
							
						}else{
							gouwuche_this.prev().prev().css({'z-index':1,opacity:1});
							gouwuche_num=gouwuche_num+1;
							$.ajax({	
								url:'/zwj/controller/front/gouwuche_num.php',
								type:'POST',
								dataType:'text',
								async:false,
								data:{'act':'inc','gouwuche_id':gouwuche_id},
								success:function(data){
									//alert(data);
									gouwuche_this.prev().html(gouwuche_num);
									var price_row=parseFloat(gouwuche_this.parent().parent().find('.shop_price1').val());
									gouwuche_this.parent().parent().find('.price_row').html((price_row*gouwuche_num).toFixed(2));
									if(gouwuche_this.parent().parent().find('.header_checked').is(':checked')){
										var price_all1=parseFloat($('.price_all1').find('font').html());
										$('.price_all1').find('font').html(price_all1+price_row);
									}
									if(gouwuche_num==num){
											gouwuche_this.css('background-color','white');
											gouwuche_this.css({'position':'relative','z-index':-1,opacity:.5});
										}
									}
								});
							/*if(gouwuche_num==num){
								gouwuche_this.css('background-color','white');
								gouwuche_this.css({'z-index':-1,opacity:.5});
							}*/
							//gouwuche_this.prev().html(gouwuche_num);
						}
					}
				});
		});

	$('.gouwuche_dec').click(function(){
	
		var _this=$(this);
			var gouwuche_id=$(this).parent().parent().find('input.gouwuche_id').val();	
			var gouwuche_num=parseInt($(this).next('span.gouwuche_num').html());
			if(gouwuche_num>1){
				
						$.ajax({	
								url:'/zwj/controller/front/gouwuche_num.php',
								type:'POST',
								dataType:'text',
								async:false,
								data:{'act':'dec','gouwuche_id':gouwuche_id},
								success:function(data){
									//alert(data);
									gouwuche_num=gouwuche_num-1;
									if(gouwuche_num==1){
											_this.css('background-color','white');
											_this.css({'position':'relative','z-index':-1,'opacity':.5});
										}
										_this.next().next().css({'z-index':1,'opacity':1});
										_this.next('span.gouwuche_num').html(gouwuche_num);
									var price_row=parseFloat(_this.parent().parent().find('.shop_price1').val());
									_this.parent().parent().find('.price_row').html((price_row*gouwuche_num).toFixed(2));
									if(_this.parent().parent().find('.header_checked').is(':checked')){
										var price_all1=parseFloat($('.price_all1').find('font').html());
										$('.price_all1').find('font').html(price_all1-price_row);
									}

									}
								});

			}else{

				gouwuche_num=1;
				$(this).css({'position':'relative','z-index':-1,'opacity':.5});
				$(this).next('span.gouwuche_num').html(gouwuche_num);
				
			}
			
		});
	$('.gouwuche_close').click(function(){
		var gouwuche_id=$(this).parent().parent().find('input.gouwuche_id').val();	
			$.ajax({	
						url:'/zwj/controller/front/gouwuche_num.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'act':'del','gouwuche_id':gouwuche_id},
						success:function(data){
									window.location.reload();
							}
						});
	});

	$('div.gouwuche_content>ul>li').each(function(){

		  var shop_price;
			var gouwuche_this=$(this);
			var gouwuche_num=parseInt($(this).find('span.gouwuche_num').html());
			var gouwuche_id=$(this).next('input.gouwuche_id').val();
			$.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'json',
					async:false,
					data:{'session_username':session_username,'act':'select1','gouwuche_id':gouwuche_id},
					success:function(data){
						shop_price=data['shop_price'];
						var price=data['number']*data['shop_price'];
						gouwuche_this.find('font.price_row').html(price.toFixed(2));
							}
					});	
			$.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'json',
					async:false,
					data:{'act':'select','gouwuche_id':gouwuche_id},
					success:function(data){
						//alert(data);
						var num=parseInt(data['sum']);
						if(gouwuche_num>=num){
							gouwuche_this.find('.gouwuche_inc').css({'position':'relative','z-index':-1,'opacity':.5});
							gouwuche_this.find('span.gouwuche_num').html(num);
							var price=shop_price*num;
							gouwuche_this.find('font.price_row').html(price.toFixed(2));
						}
					}
				});
				
			var gouwuche_num1=parseInt($(this).find('span.gouwuche_num').html());
			if(gouwuche_num1<=1){
				$(this).find('.gouwuche_dec').css({'position':'relative','z-index':-1,'opacity':.5});
			}
	});
	$('.gouwuche_inc').hover(function(){
		if($(this).css('opacity')!='0.5'){
			$(this).css('background-color','#bfbfbf');
		}else{
			$(this).css('background-color','white');
		}
	},function(){
		$(this).css('background-color','white');
	});
	$('.gouwuche_dec').hover(function(){
		if($(this).css('opacity')!='0.5'){
			$(this).css('background-color','#bfbfbf');
		}else{
			$(this).css('background-color','white');
		}
	},function(){
		$(this).css('background-color','white');
	});
	$('.gouwuche_close').hover(function(){		
		$(this).css('background-color','#bfbfbf');
	},function(){
		$(this).css('background-color','white');
	});


	var num_checked=0;
	var price_all1=0.00;
	$('.gouwuche_content>ul>li>input:checked').each(function(){
		if($(this).is(':checked')){
			num_checked++;
			
		}
	});
	$('#gouwuche_bottom>span>b').html(num_checked);
	$('.gouwuche_num').bind('DOMNodeInserted',function(){

		var _this=$(this);
		var gouwuche_id=_this.parent().parent().next('input.gouwuche_id').val();
		var price1=parseFloat(_this.parent().parent().find('font.price_row').html());
			if(price1>=0){	
				$.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'json',
					async:false,
					data:{'session_username':session_username,'act':'select1','gouwuche_id':gouwuche_id},
					success:function(data){
						var price=data['number']*data['shop_price'];
						_this.parent().parent().find('font.price_row').html(price.toFixed(2));
						
						var price2=price-price1;//判断点的是增加还是减少,大于零添加
						
							if(_this.parent().parent().find('input:checkbox').is(':checked')){
									var price3=parseFloat($('#gouwuche_bottom').find('font').html());
									if(price2>0){
										var price4=price3+parseFloat(data['shop_price']);
										$('#gouwuche_bottom').find('font').html(price4.toFixed(2));
									}else{
										var price4=price3-parseFloat(data['shop_price']);
										$('#gouwuche_bottom').find('font').html(price4.toFixed(2));
									}
									
								}
							}			
					});	
			}
	});
	$('.gouwuche_content>ul>li>input:checked').click(function(){
		if($(this).is(':checked')){
			var num=parseInt($('#gouwuche_bottom>span>b').html());
			$('#gouwuche_bottom>span>b').html(num+1);
			var gouwuche_bottom=parseFloat($('#gouwuche_bottom').find('font').html());
			var price=parseFloat($(this).parent().find('font.price_row').html());
			$('#gouwuche_bottom').find('font').html((gouwuche_bottom+price).toFixed(2));
		}else{
			var num=parseInt($('#gouwuche_bottom>span>b').html());
			$('#gouwuche_bottom>span>b').html(num-1);
			var gouwuche_bottom=parseFloat($('#gouwuche_bottom').find('font').html());
			var price=parseFloat($(this).parent().find('font.price_row').html());
			$('#gouwuche_bottom').find('font').html((gouwuche_bottom-price).toFixed(2));
		}
	});
				$.ajax({	
					url:'/zwj/controller/front/gouwuche_num.php',
					type:'POST',
					dataType:'text',
					async:true,
					data:{'session_username':session_username,'act':'sum_price'},
					success:function(data){
							
						$('#gouwuche_bottom').find('font').html((parseFloat(data)).toFixed(2));
							}
					});	
//结算的点击事件
	$('.jiesuan2').hover(function(){
		$(this).css('cursor','pointer');
	})
	$('.jiesuan2').click(function(){
		var check_status=0;
		/*0表示所有checkbox都没选中，1表示至少有一个checkbox选中*/
		var gouwuche_id_arr=new Array();
		$('.header_checked').each(function(){
			if($(this).is(':checked')){
				var gouwuche_id=$(this).parent().find('.gouwuche_id').val();
				check_status=1;
				gouwuche_id_arr.push(gouwuche_id);
			}
		});

		if(check_status==1){
		window.location.href='/zwj/controller/front/order.php?act=jiesuan&gouwuche_id='+gouwuche_id_arr;
		}else{
			alert('请选择您要结算的商品');
		}
	});
		
});