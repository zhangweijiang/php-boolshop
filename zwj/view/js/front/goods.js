$(function(){
	$('#goods_size>ul>li').not('#goods_size>ul>li.title').hover(function(){
		$(this).css('border','2px solid rgb(196,0,0)');
		$(this).css('padding','0');
		
	},function(){
		$(this).css('border','1px solid rgb(184,183,189)');
		$(this).css('padding','1px');

	});
	$('#goods_color>ul>li').not('#goods_color>ul>li.title').hover(function(){
		$(this).css('border','2px solid rgb(196,0,0)');
		$(this).css('padding','0');
	},function(){
		$(this).css('border','1px solid rgb(184,183,189)');
		$(this).css('padding','1px');
	});
	$('#goods_size>ul>li').not('#goods_size>ul>li.title').click(function(e){
		
		var goods_id=$('#goods_id').val();
	    var attr_value=$(this).find('span').html();
	    var attr_name_and_goods_color=false;
	    var goods_color_img;
		if($(this).find('img').css('display')=="none"){
			$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
				if($(this).find('img.color_select').css('display')=="block"){
					attr_name_and_goods_color=true;
					goods_color_img=$(this).find('img.color_img').attr('src');
					}
			});
			if(attr_name_and_goods_color==true){
				$.ajax({
					url:'/zwj/controller/front/goodsnumber_attr_name_and_goods_color.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'act':'attr_name','goods_id':goods_id,'attr_value':attr_value,'goods_color_img':goods_color_img},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
					}
				});
				$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
						if($(this).find('img.color_select').css('display')=="none"){
							$(this).css({'opacity':1,'border':'1px solid rgb(184,183,189)','z-index':1});
						}
				});
				$.ajax({
						url:'/zwj/controller/front/goodsnumber_goods_color_none.php',
						type:'POST',
						dataType:'json',
						async:true,
						data:{'goods_id':goods_id,'attr_value':attr_value},
						success:function(data){
							$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
								for(var i=0;i<data.length;i++){
									if($(this).find('img.color_img').attr("src")=="/zwj/"+data[i]['goods_color_img']){
										$(this).css({'border':'1px dashed rgb(184,183,189)',
													 'opacity':'.5','z-index':-1});
										
									}
								}
								
							});
							
						}
					  });
			}else{
				
				$.ajax({
					url:'/zwj/controller/front/goodsnumber_attr_name.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_id':goods_id,'attr_value':attr_value},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
					}
				  });
					$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189',
									'opacity':1,'z-index':1});
					});
					$.ajax({
						url:'/zwj/controller/front/goodsnumber_goods_color_none.php',
						type:'POST',
						dataType:'json',
						async:true,
						data:{'goods_id':goods_id,'attr_value':attr_value},
						success:function(data){
							
							$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
								for(var i=0;i<data.length;i++){
									if($(this).find('img.color_img').attr("src")=="/zwj/"+data[i]['goods_color_img']){
										$(this).css({'border':'1px dashed rgb(184,183,189)',
													 'opacity':'.5','z-index':-1});

										break;
										
									}else{
										
										 $(this).css({'border':'1px solid rgb(184,183,189)','opacity':1,'z-index':1});
									}
								}

							});
							
						}
					  });

			}
			$(this).siblings().not('#goods_size>ul>li.title').bind('mouseleave',function(){
				$(this).css('border','1px solid rgb(184,183,189)');
				$(this).css('padding','1px');	
			});
			$(this).find('img').show();
			$(this).siblings().not('#goods_size>ul>li.title').find('img').hide();
			$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
				if($(this).css('opacity')=='0.5'){
					
				}else{
					$(this).css({'border':'1px solid rgb(184,183,189)','padding':'1px'})
				}
			});
			
			$(this).unbind('mouseleave');
			$(this).css('border','2px solid rgb(196,0,0)');
			$(this).css('padding','0');
			
		}else{

			var goods_color_img;
			$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
				if($(this).find('img.color_select').css('display')=="block"){
					attr_name_and_goods_color=true;
					goods_color_img=$(this).find('img.color_img').attr('src');
					}
			});
			if(attr_name_and_goods_color==true){
					$.ajax({
					url:'/zwj/controller/front/goodsnumber_goods_color.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_id':goods_id,'goods_color_img':goods_color_img},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
					}
				});
				$(this).bind({mouseleave:function(){
				$(this).css('border','1px solid rgb(184,183,189)');
				$(this).css('padding','1px');
			 	}
			});	
			$(this).find('img').hide();
			$(this).siblings().find('img').hide();
			$(this).css('border','1px solid rgb(184,183,189)');
			$(this).css('padding','1px');
			$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
				if($(this).find('img.color_select').css('display')=="none"){
					$(this).css({'border':'1px solid rgb(184,183,189)',
								'opacity':1,'z-index':1});
				}
			});
			}else{
					$.ajax({
						url:'/zwj/controller/front/goodsnumber_sum.php',
						type:'POST',
						dataType:'json',
						async:true,
						data:{'goods_id':goods_id},
						success:function(data){
							var num=data[0]['sum']
							$('li.number').find('span').html(num);
							$('.goods_number>img.decrease').css('cursor','pointer');
							$('.goods_number>img.increase').css('cursor','pointer');
							$('#shuliang').val("1");
							}
						});
					$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189'
							,'opacity':1,'z-index':1});
						$(this).find('img').hide();
					});
					$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189'
							,'opacity':1,'z-index':1});
					});
			}
			

		}

	});
	$('#goods_color>ul>li').not('#goods_color>ul>li.title').click(function(){
		var goods_id=$('#goods_id').val();
	    var attr_value;
	    var attr_name_and_goods_color1=false;
	    var goods_color_img=$(this).find('img.color_img').attr('src');
		if($(this).find('img.color_select').css('display')=="none"){
			$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
				if($(this).find('img').css('display')=="block"){
					attr_name_and_goods_color1=true;
					attr_value=$(this).find('span').html();
					
					}
			});
			if(attr_name_and_goods_color1==true){
				
				$.ajax({
					url:'/zwj/controller/front/goodsnumber_attr_name_and_goods_color.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_id':goods_id,'attr_value':attr_value,'goods_color_img':goods_color_img},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
					}
				});
				$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
						if($(this).find('img').css('display')=="none"){
							$(this).css({'opacity':1,'border':'1px solid rgb(184,183,189)','z-index':1});
						}
				});
				$.ajax({
						url:'/zwj/controller/front/goodsnumber_attr_name_none.php',
						type:'POST',
						dataType:'json',
						async:true,
						data:{'goods_id':goods_id,'goods_color_img':goods_color_img},
						success:function(data){
							$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
								for(var i=0;i<data.length;i++){
									if($(this).find('span').html()==data[i]['attr_value']){
										$(this).css({'border':'1px dashed rgb(184,183,189)',
													 'opacity':'.5','z-index':-1});
										
									}
								}
								
							});
							
						}
					  });
			}else{
				
				$.ajax({
					url:'/zwj/controller/front/goodsnumber_goods_color.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'act':'attr_name','goods_id':goods_id,'goods_color_img':goods_color_img},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
					}
				});
					$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189',
									'opacity':1,'z-index':1});
					});
					$.ajax({
						url:'/zwj/controller/front/goodsnumber_attr_name_none.php',
						type:'POST',
						dataType:'json',
						async:true,
						data:{'goods_id':goods_id,'goods_color_img':goods_color_img},
						success:function(data){
							$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
								for(var i=0;i<data.length;i++){
									if($(this).find('span').html()==data[i]['attr_value']){
										$(this).css({'border':'1px dashed rgb(184,183,189)',
													 'opacity':'.5','z-index':-1});

										break;
										
									}else{
										
										 $(this).css({'border':'1px solid rgb(184,183,189)','opacity':1,'z-index':1});
									}
								}

							});
							
						}
					  });
			}
			$(this).siblings().not('#goods_color>ul>li.title').bind('mouseleave',function(){
				$(this).css('border','1px solid rgb(184,183,189)');
				$(this).css('padding','1px');	
			});
				
		$(this).find('img.color_select').show();
		$(this).siblings().not('#goods_color>ul>li.title').find('img.color_select').hide();
		var img_color=$(this).find('img:last').attr('src');
		$('.zoomMiddle').find('img').attr('src',img_color);
		$('.zoomLarge>img').attr('src',img_color);
		$('.wrapSmallImg ul li.current').removeClass('current');
		$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
			if($(this).css('opacity')=="0.5"){

			}else{
				$(this).css({'border':'1px solid rgb(184,183,189)','padding':'1px'});
			}
		});
		// $(this).siblings().not('#goods_color>ul>li.title').css('border','1px solid rgb(184,183,189)');
		// $(this).siblings().not('#goods_color>ul>li.title').css('padding','1px');
		$(this).unbind('mouseleave');
		$(this).css('border','2px solid rgb(196,0,0)');
		$(this).css('padding','0');
		}else{
			var attr_value;
			$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
				if($(this).find('img').css('display')=="block"){
					attr_name_and_goods_color1=true;
					attr_value=$(this).find('span').html();
					}
			});
			if(attr_name_and_goods_color1==true){
					$.ajax({
					url:'/zwj/controller/front/goodsnumber_attr_name.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_id':goods_id,'attr_value':attr_value},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
						}
					});
					$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
						if($(this).find('img').css('display')=="none"){
							$(this).css({'border':'1px solid rgb(184,183,189)',
										'opacity':1,'z-index':1});
						}
					});

			}else{	
					$('#goods_size>ul>li').not('#goods_size>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189'
							,'opacity':1,'z-index':1});
					});
					$('#goods_color>ul>li').not('#goods_color>ul>li.title').each(function(){
						$(this).css({'border':'1px solid rgb(184,183,189'
							,'opacity':1,'z-index':1});
					});

					$.ajax({
					url:'/zwj/controller/front/goodsnumber_sum.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_id':goods_id},
					success:function(data){
						var num=data[0]['sum']
						$('li.number').find('span').html(num);
						$('.goods_number>img.decrease').css('cursor','pointer');
						$('.goods_number>img.increase').css('cursor','pointer');
						$('#shuliang').val("1");
						}
					});

			}

			$(this).bind({mouseleave:function(){
				$(this).css('border','1px solid rgb(184,183,189)');
				$(this).css('padding','1px');
			 	}
			});	
			$(this).find('img.color_select').hide();
			$(this).siblings().find('img.color_select').hide();
			$(this).css('border','1px solid rgb(184,183,189)');
			$(this).css('padding','1px');
		}
	});
	$('.goods_desc').click(function(){
		$('#goods_desc_content').css('display','block');
		$('#goods_attr_content').css('display','none');
		$(this).css('background-color','white');
		$('.goods_attr').css('background-color','#EEEEEE');
	});
	$('.goods_attr').click(function(){
		$('#goods_desc_content').css('display','none');
		$('#goods_attr_content').css('display','block');
		$(this).css('background-color','white');
		$('.goods_desc').css('background-color','#EEEEEE');
	});
	$('.goods_number>img.increase').click(function(){
		var num=$(this).parent().prev().children().val();
		var max_num=$(this).parent().next().find('span').html();
		max_num=parseInt(max_num);
		if(num<max_num){
		num++;
			if(num==max_num){
				$('.goods_number>img.increase').css('cursor','not-allowed');
				$('.goods_number>img.decrease').css('cursor','pointer');
				$(this).parent().prev().children().val(num);
			}else{
				$('.goods_number>img.decrease').css('cursor','pointer');
				$(this).parent().prev().children().val(num);
			}
	    }else{
	    alert('您的商品数量超过库存数量');
	    $('.goods_number>img.increase').css('cursor','not-allowed');
		$(this).parent().prev().children().val(num);
	    }

	});

	$('.goods_number>img.decrease').click(function(){
		var num=$(this).parent().prev().children().val();
		num--;
		$('.goods_number>img.increase').css('cursor','pointer');
		if(num<=1){
			num=1;	
				$(this).css('cursor','not-allowed');
		}
		$(this).parent().prev().children().val(num);
		
	});


	$('.goods_number_config>input').change(function(){
		var num=$(this).val();
		var max_num=$(this).parent().next().next().find('span').html();
		max_num=parseInt(max_num);
		$('.goods_number>img.decrease').css('cursor','pointer');
		if(num>max_num){
			num=max_num;
			alert('您所填写的商品数量超过库存数量');
	    	$('.goods_number>img.increase').css('cursor','not-allowed');
	    	$(this).val(num);
		}else{
			$('.goods_number>img.increase').css('cursor','pointer');
	    	$(this).val(num);
		}
		if(isNaN(num)||num<=1){
			num=1;
			$('.goods_number>img.decrease').css('cursor','not-allowed');
			$(this).val(num);
		}

	});
	
	
	$('#gouwuche').click(function(event){
		if($('.number').find('span').html()=="0"){
			alert('该商品库存量为0，不能购买');
		}else{
			var goods_size_flag=false;
			var goods_color_flag=false;
			// 判断尺码是否选中
			$('#goods_size>ul>li').not('#goods_size>ul>li.title')
			.each(function(){
				if($(this).find('img').css('display')=='block'){
					goods_size_flag=true;
				}
			});
			// 判断颜色是否选中
			$('#goods_color>ul>li').not('#goods_color>ul>li.title')
			.each(function(){
				if($(this).find('img.color_select').css('display')=='block'){
					goods_color_flag=true;
				}
			});
			if(document.getElementById('goods_color')==null){
				goods_color_flag=true;
			}
			if(document.getElementById('goods_size')==null){
				goods_size_flag=true;
			}
			if(goods_size_flag==false){
				if(goods_color_flag==false){
					alert('请选择尺码和颜色');
				}else{
					alert('请选择尺码');
				}
			}else if(goods_color_flag==false){
				alert('请选择颜色');
			}else{
				$.ajax({
						url:'/zwj/controller/front/user_exists.php',
						type:'POST',
						dataType:'text',
						async:true,
						success:function(data){
							if(data=='true'){
								 $('.dice-menu').animate({'right':'0'});
								 $('.dice-menu-content').animate({'right':'-300px'});

								var offset = $("#icon-cart").offset();
								// 加入购物车动画飞入效果
								 
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
									left: event.pageX,//抛物体起点横坐标
									top: event.pageY //抛物体起点纵坐标
									},
									end: {
									left: $(document).width()-50,//抛物体终点横坐标
									top: offset.top + 10, //抛物体终点纵坐标
									},
									onEnd: function() {
										
									var tip_width=$(document).width()-290;
									$('#tip').css({'left':tip_width,'top':'202px'});
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
									var session_username=$('.session_username').html();
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
												   'act':'buy',
												   'customer_name':customer_name},
											success:function(data){
												
												setTimeout('location.reload()',300);
												}
											});
									}
									});
								
							}else{
								$('#login_show').trigger('click')
								$('.pop_type').val(0);
								
							}
						}
					});
			}
		}
	});	
	
//购买的点击事件
$('#goumai').click(function(event){
		if($('.number').find('span').html()=="0"){
			alert('该商品库存量为0，不能购买');
		}else{
			var goods_size_flag=false;
			var goods_color_flag=false;
			// 判断尺码是否选中
			$('#goods_size>ul>li').not('#goods_size>ul>li.title')
			.each(function(){
				if($(this).find('img').css('display')=='block'){
					goods_size_flag=true;
				}
			});
			// 判断颜色是否选中
			$('#goods_color>ul>li').not('#goods_color>ul>li.title')
			.each(function(){
				if($(this).find('img.color_select').css('display')=='block'){
					goods_color_flag=true;
				}
			});
			if(document.getElementById('goods_color')==null){
				goods_color_flag=true;
			}
			if(document.getElementById('goods_size')==null){
				goods_size_flag=true;
			}
			if(goods_size_flag==false){
				if(goods_color_flag==false){
					alert('请选择尺码和颜色');
				}else{
					alert('请选择尺码');
				}
			}else if(goods_color_flag==false){
				alert('请选择颜色');
			}else{
				$.ajax({
						url:'/zwj/controller/front/user_exists.php',
						type:'POST',
						dataType:'text',
						async:true,
						success:function(data){
							if(data=='true'){
								 
										
									
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
									var session_username=$('.session_username').html();
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
												   'act':'buy',
												   'customer_name':customer_name},
											success:function(data){
												window.location.href='/zwj/controller/front/shopping_cart.php';
												}
											});
									
								
							}else{
								$('#login_show').trigger('click');
								//0表示点击购物车弹出的登录框，1表示点击购买弹出的登录框
								$('.pop_type').val(1);
							}
						}
					});
			}
		}
	});	
});