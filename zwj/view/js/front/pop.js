$(function(){
	var oBtn = $('#login_show');
	var popWindow = $('.popWindow');
	var oClose = $('.popWindow h3 span');

	//浏览器可视区域的宽度
	var browserWidth1 = $(window).width();

	//浏览器可视区域的高度
	var browserHeight1 = $(window).height();

	//浏览器纵向滚动条距离上边界的值
	var browserScrollTop1 =null;

	//浏览器横向滚动条距离左边界的值
	var browserScrollLeft1 = null;
	
	
	
	//弹出窗口的宽度
	var popWindowWidth = popWindow.outerWidth(true);
	//弹出窗口的高度
	var popWindowHeight = popWindow.outerHeight(true);

	//left的值＝浏览器可视区域的宽度／2－弹出窗口的宽度／2+浏览器横向滚动条距离左边界的值
	var positionLeft = browserWidth1/2 - popWindowWidth/2+browserScrollLeft1;

	//top的值＝浏览器可视区域的高度／2－弹出窗口的高度／2+浏览器纵向滚动条距离上边界的值
	var positionTop = browserHeight1/2 - popWindowHeight/2+browserScrollTop1;


	var oMask = '<div class="mask1" style="z-index:13;"></div>'
	//遮照层的宽度
	var maskWidth = $(document).width();

	//遮照层的高度
	var maskHeight = $(document).height();

	

	oBtn.click(function(){
		popWindow.show().animate({
					'left':positionLeft+'px',
					'top':positionTop+'px'
		},100);

		$('body').append(oMask);
		$('.mask1').width(maskWidth).height(maskHeight);

	});


	$(window).resize(function(){	
		if(popWindow.is(':visible')){
			browserWidth1 = $(window).width();
			browserHeight1 = $(window).height();
			positionLeft = browserWidth1/2 - popWindowWidth/2+browserScrollLeft1;
			positionTop = browserHeight1/2 - popWindowHeight/2+browserScrollTop1;

			popWindow.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},100).dequeue();		
		}
	});

	$(window).scroll(function(){
		if(popWindow.is(':visible')){
			browserScrollTop1 = $(window).scrollTop();
			browserScrollLeft1 = $(window).scrollLeft();
			positionLeft = browserWidth1/2 - popWindowWidth/2+browserScrollLeft1;
			positionTop = browserHeight1/2 - popWindowHeight/2+browserScrollTop1;
			popWindow.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},100).dequeue();
		}

	});

	

	oClose.click(function(){
		popWindow.hide();
		$('.mask1').remove();
	});
	// 登陆的js
	$('#form').submit(function(e){
				var username_reg=/^(([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,20})|([1][345789]\d{9})$/;
				 var reg=/^.+$/;
                var username=$.trim($('#username1').val());
                var password=$.trim($('#password').val());
            	
                if(!reg.test(username)){
                	if(!reg.test(password)){
                		
                		e.preventDefault();
                		$('p.p_first').hide();
                		$('p.name_pwd').show().siblings('p.p_notice').hide();
                	}else{
                		
                		e.preventDefault();
                		$('p.p_first').hide();
                		$('p.username').show().siblings('p.p_notice').hide();
                	}        
                }else if(!username_reg.test(username)){

                	e.preventDefault();
                	$('p.p_first').hide();
                	$('p.username_reg_error').show().siblings('p.p_notice').hide();

                }else if(!reg.test(password)){
                	e.preventDefault();
                	$('p.p_first').hide();
                	$('p.password').show().siblings('p.p_notice').hide();
                }else{
                		e.preventDefault();
                		$.ajax({
	                    url:'loginAct.php',
	                    type:'POST',
	                    dataType:'text',
	                    async:false,
	                    crossDomain: true == !(document.all),
	                    data:{"username":username,
	                          "password":password
	                     	  },
	                     success:function(data){
	                     	if(data=="true"){
	                     		if($('.pop_type').val()=='0'){
	                     		$('.popWindow h3 span').trigger('click');
	                     		var offset = $("#icon-cart").offset();
							// 加入购物车动画飞入效果
								var gouwuche=$('#gouwuche').offset();
								//获取当前点击图片链接
								var img_fly;
								$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
									if($(this).find('img.color_select').css('display')=="block"){
										img_fly=$(this).find('img.color_img').attr('src');
									}
								});
								
								var flyer = $('<img style="width:33px;height:33px;" class="flyer-img" src="' + img_fly + '">'); 
								//抛物体对象
								flyer.fly({
								start: {
								left: gouwuche.left + 10,//抛物体起点横坐标
								top: gouwuche.top + 10 //抛物体起点纵坐标
								},
								end: {
								left: offset.left + 10,//抛物体终点横坐标
								top: offset.top + 10, //抛物体终点纵坐标
								},
								onEnd: function() {
								var tip_width=$(document).width()-290;
								$('#tip').css({left:tip_width,top:'202px'});
								$("#tip").show().fadeOut(1000);
								//成功加入购物车动画效果
								this.destory(); //销毁抛物体
								var goods_id=$('#goods_id').val();
									var customer_name=$('#customer_name').val();
									var number=$('#shuliang').val();
									var goods_name=$('#goods_name').html();
									var shop_price=$('#shop_price').html();
									var goods_color_img;
									var goods_color_desc;
									var attr_name=$('#goods_size>ul>li.title').html();
									var attr_value;
									$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
										if($(this).find('img.color_select').css('display')=="block"){
											goods_color_img=$(this).find('img.color_img').attr('src');
											goods_color_desc=$(this).find('img.color_img').attr('title');
										}
									});
									$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
										if($(this).find('img').css('display')=="block"){

											attr_value=$(this).find('span').html();
										}
									});
									
									if(goods_color_img==undefined){
										goods_color_img="";
										goods_color_desc="";
									}else{
										goods_color_img=goods_color_img.replace('/zwj/','');
									}
									if(attr_name==undefined){
										attr_name="";
										attr_value="";
									}
										$.ajax({
											url:'/zwj/controller/front/flow.php',
											type:'POST',
											dataType:'text',
											async:true,
											data:{'goods_id':goods_id,
												  'goods_name':goods_name,
												  'customer_name':customer_name,
												  'number':number,
												  'shop_price':shop_price,
												  'goods_color_img':goods_color_img,
												  'goods_color_desc':goods_color_desc,
												  'attr_name':attr_name,
												  'attr_value':attr_value,
												   'act':'buy'},
											success:function(data){
												//alert(data);
												setTimeout('location.reload()',300);
												}
											});
								
										}
									});
								}else{

									var goods_id=$('#goods_id').val();
									var customer_name=$('#customer_name').val();
									var number=$('#shuliang').val();
									var goods_name=$('#goods_name').html();
									var shop_price=$('#shop_price').html();
									var goods_color_img;
									var goods_color_desc;
									var attr_name=$('#goods_size>ul>li.title').html();
									var attr_value;
									$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
										if($(this).find('img.color_select').css('display')=="block"){
											goods_color_img=$(this).find('img.color_img').attr('src');
											goods_color_desc=$(this).find('img.color_img').attr('title');
										}
									});
									$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
										if($(this).find('img').css('display')=="block"){

											attr_value=$(this).find('span').html();
										}
									});
									
									if(goods_color_img==undefined){
										goods_color_img="";
										goods_color_desc="";
									}else{
										goods_color_img=goods_color_img.replace('/zwj/','');
									}
									if(attr_name==undefined){
										attr_name="";
										attr_value="";
									}
										$.ajax({
											url:'/zwj/controller/front/flow.php',
											type:'POST',
											dataType:'text',
											async:true,
											data:{'goods_id':goods_id,
												  'goods_name':goods_name,
												  'customer_name':customer_name,
												  'number':number,
												  'shop_price':shop_price,
												  'goods_color_img':goods_color_img,
												  'goods_color_desc':goods_color_desc,
												  'attr_name':attr_name,
												  'attr_value':attr_value,
												   'act':'buy'},
											success:function(data){
												//alert(data);
												window.location.href='/zwj/controller/front/shopping_cart.php';
												}
											});


								}
	                     	}else{
	                     		e.preventDefault();
	                     		$('#password').val("");
	                     		$('p.p_first').hide();
	                     		$('p.uncorrect').show().siblings('p.p_notice').hide();
	                     	}
	                  	}
                	});
                }
			});
});