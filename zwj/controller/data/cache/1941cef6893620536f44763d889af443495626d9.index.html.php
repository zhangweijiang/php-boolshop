<?php
/* Smarty version 3.1.30, created on 2018-12-29 10:04:17
  from "D:\www\php-boolshop\zwj\view\html\front\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c2746a1dc5e94_24208415',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '78bfcc9b9acf54eb9bd480b94fbb13b8ccda8e3f' => 
    array (
      0 => 'D:\\www\\php-boolshop\\zwj\\view\\html\\front\\index.html',
      1 => 1492353020,
      2 => 'file',
    ),
    'ed62dacd4eafc115d0fb678022ff77590ed0c4ce' => 
    array (
      0 => 'D:\\www\\php-boolshop\\zwj\\view\\html\\front\\header.html',
      1 => 1492767565,
      2 => 'file',
    ),
    '34af5758819db27871b906db33cff86a69a0bb05' => 
    array (
      0 => 'D:\\www\\php-boolshop\\zwj\\view\\html\\front\\footer.html',
      1 => 1473834007,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5c2746a1dc5e94_24208415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城首页</title>
   <!--	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"  />-->
	<script src="/zwj/view/js/front/jquery-3.1.0.js"></script>
	<!--<script src="http://cdn.bootcss.com/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="http://cdn.bootcss.com/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script> -->
	<script src="/zwj/view/js/front/ScrollToPlugin.min.js"></script>
	<script src="/zwj/view/js/front/TweenMax.min.js"></script>
	<script src="/zwj/view/js/front/index.js"></script>
	<script src="/zwj/view/js/front/header.js"></script>
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/zwj/view/css/front/index.css">
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/footer.css">
</head>
<body>

	<div id="header_serach" >
	<div class="logo">
			<img  style="width:200px;height:40px;margin:0;margin-right:100px;" src="/zwj/view/images/front/logo5.png" alt="图片不存在">
	</div>
	<div class="search" style="margin:3px 0;">
				<form action="/zwj/controller/front/search_goods.php" method="post">
					<div class="search_type" style="border-top-left-radius:6px; 
					border-bottom-left-radius: 6px;"><span style="float:left;">搜</span><input class='s' value="商品" style="width:30px;font-size:13px;font-family:'Arial';float:left;border:0;outline:0;" readonly name="search_type"/><i class="fa fa-chevron-down" style="float:left;margin-top:9px;"></i>
						<div style="border-top-left-radius:6px;" class="search_type_content">
							<li style="border-bottom:1px solid rgb(206,206,206);">商品</li>
							<li>店铺</li>
						</div>
					</div>
					<input type="text" autofocus="autofocus" style="width:560px;" class="goods_keywords" name="goods_keywords">
					<div class="search_icon" style="height:34px;border-top-right-radius:6px;
					border-bottom-right-radius:6px;background:red;"><input type="submit" style="width:70px;height:35px;position:absolute;background:none;outline:0;border:0;" value=""><i class="fa fa-search"></i></div>
				</form>
	</div>
</div>
	<div id="header">
		<ul class="nav header_left">
			
			<li style="margin-left:50px;margin-right:-33px;"><i class="fa fa-home" style="color:rgb(196,0,0);font-size:15px;position:relative;top:1px;"></i><a href="/index.php" >布尔首页</a></li>
			
			
			<?php if ($_SESSION['username']) {?>
			<li class="first">Hi,<a href="#" class="session_username"><?php echo $_SESSION['username'];?>
</a>
			</li>
			<li class="second" style="margin-left:53px;"><a href="/zwj/controller/front/information.php">用户中心</a></li>
			<li ><span>&nbsp;|&nbsp;</span></li>
			<li><a href="/zwj/controller/front/logout.php">退出</a></li>
			<?php } else { ?>
			<li class="first"><span>亲,欢迎光临本店</span></li>
			<li class="second"><a href="/zwj/controller/front/login.php">请登录</a></li>
			<li ><span>|</span></li>
			<li><a href="/zwj/controller/front/register.php">免费注册</a></li>
			<?php }?>
			
		</ul>
		<ul class="nav header_right">
			<!--<li class="bgwhite">
				<a href="#">我的购物</a><i class="fa fa-caret-down"></i>
				<ul class="nav_list">
					<li><a href="#" >已买到的宝贝</a></li>
					<li><a href="#">已卖出的宝贝</a></li>
				</ul>
			</li>-->
			<li><i class="fa fa-shopping-cart red"></i><a href="/zwj/controller/front/shopping_cart.php">购物车<?php if ($_smarty_tpl->tpl_vars['all_number']->value && $_SESSION['username']) {
echo $_smarty_tpl->tpl_vars['all_number']->value;
} else { ?>0<?php }?>件</a><i class="fa fa-caret-down"></i></li>
			<li><i class="fa fa-heart red"></i><a href="#">我关注的品牌</a><i class="fa fa-caret-down"></i></li>
			<li class="bgwhite">
				<i class="fa fa-star red "></i><a href="#">收藏夹</a><i class="fa fa-caret-down"></i>
				<ul class="nav_list">
					<li><a href="/zwj/controller/front/collect_goods.php" >收藏的宝贝</a></li>
					<li><a href="#">收藏的店铺</a></li>
				</ul>
			</li>
			<li><i class="fa fa-comment red"></i><a href="javascript:void(0)" class="chat_online">在线聊天</a></li>
			<li><i class="fa fa-phone red"></i><a href="#">联系客服</a></li>
			<li><i class="fa fa-list red"></i><a href="#">网站导航</a><i class="fa fa-caret-down"></i></li>
		</ul>
	</div>
	<div id="bool">
		<div class="logo">
			<img  src="/zwj/view/images/front/logo4.jpg" alt="图片不存在">
		</div>
		<div class="search">
			<form action="/zwj/controller/front/search_goods.php" method="post">
				<div class="search_type"><span style="float:left">搜</span><input class='s' value="商品" style="width:30px;font-size:13px;font-family:'Arial';float:left;border:0;outline:0;" readonly name="search_type"/><i class="fa fa-chevron-down" style="float:left;margin-top:9px;"></i>
					<div class="search_type_content">
						<li style="border-bottom:1px solid rgb(206,206,206);">商品</li>
						<li>店铺</li>
					</div>
				</div>
				<input type="text" autofocus="autofocus" class="goods_keywords" name="goods_keywords">
				<div class="search_icon"><input type="submit" style="width:70px;height:35px;position:absolute;background:none;outline:0;border:0;" value=""><i class="fa fa-search"></i></div>
			</form>
			<div id="hot">
			<ul>
							<li><a href="#">月饼</a></li>
							<li><span>|</span></li>
							<li><a href="#">针织衫</a></li>
							<li><span>|</span></li>
							<li><a href="#">笔记本</a></li>
							<li><span>|</span></li>
							<li><a href="#">iphone</a></li>
							<li><span>|</span></li>
							<li><a href="#">睡衣</a></li>
							<li><span>|</span></li>
							<li><a href="#">拉杆箱</a></li>
			</ul>
		</div>
		</div>
		<div class="clear"></div>		
	</div>

	<ul class="dice-menu">
	  <li>
	  	  <span class="fa fa-circle-o-notch" ></span>
	  	  <ul class="triangle_border" >
				<li class="rectangle">点击伸缩</li>
    	  	    <li class="triangle"></li>
		  </ul>
	  </li>
	  <li class='no'><br></li>
	  <li><img src="/zwj/view/images/front/index8.png" alt="图片不存在">
	      <span></span>
	      <ul class="triangle_border" >
				<li class="rectangle">我的特权</li>
	    	    <li class="triangle"></li>
	      </ul>
	  </li>
	  <li id="icon-cart"><img src="/zwj/view/images/front/index.png" alt="图片不存在">
	  	  <span>购物车<?php if ($_smarty_tpl->tpl_vars['all_number']->value && $_SESSION['username']) {
echo $_smarty_tpl->tpl_vars['all_number']->value;
} else { ?>0<?php }?>件</span>
	  	  <ul class="triangle_border" style="opacity:0">
				<li class="rectangle"></li>
    	  	    <li class="triangle"></li>
		  </ul>
	  </li>
	  <li>
	  	  <img src="/zwj/view/images/front/index5.png" alt="图片不存在">
		  <ul class="triangle_border" >
				<li class="rectangle">我的资产</li>
			    <li class="triangle"></li>
		  </ul>	  	  
	  </li>
	  <li>
	  	  <img src="/zwj/view/images/front/index6.png" alt="图片不存在">
		  <ul class="triangle_border" >
				<li class="rectangle">我的关注的品牌</li>
			    <li class="triangle"></li>
		  </ul>	  	  
	  </li>
	  <li>
	  	  <img src="/zwj/view/images/front/index4.png" alt="图片不存在">
		  <ul class="triangle_border" >
				<li class="rectangle">我的收藏</li>
			    <li class="triangle"></li>
		  </ul>
	  </li>
	  <li>
	  	  <img src="/zwj/view/images/front/index3.png" alt="图片不存在">
	  	  <ul class="triangle_border" >
				<li class="rectangle">我看过的</li>
	    		<li class="triangle"></li>
		  </ul>
	  </li>
	  <li>
	  	  <img src="/zwj/view/images/front/index2.png" alt="图片不存在">
		  <ul class="triangle_border" >
				<li class="rectangle">我要冲值</li>
			    <li class="triangle"></li>
		  </ul>
	  	</li>
	  <li class='no'><br><br></li>
	  <li>
	  	  <i class="fa fa-edit"></i>
	  	  <ul class="triangle_border" >
				<li class="rectangle">我要留言</li>
	    		<li class="triangle"></li>
		  </ul>
	  </li> 
	  <li>
	  	  <i class="fa fa-phone red"></i>
		  <ul class="triangle_border" >
				<li class="rectangle">联系客服</li>
	    		<li class="triangle"></li>
	      </ul>
	  </li> 
	  <li>
	  	  <img src="/zwj/view/images/front/index7.png" alt="图片不存在"> 
	  	   <ul class="triangle_border" style="position:absolute;top:-75px;margin-right:15px;width:104px;height:103px;">
				  <img src="/zwj/view/images/front/weixin.png" alt="图片不存在">
	      </ul> 
	  	 
	  </li>
	  <div id="rocket">
		  <span id="gotop1">
		    <img src="/zwj/view/images/front/rocked.png" alt="返回顶部小火箭">
		  </span>
	  </div>	
	</ul>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我的特权</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我的购物</span>
		</div>
		
		<div class="gouwuche_content" >
			<ul style="margin-top:11px;">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gouwuche']->value, 'gwcv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gwcv']->value) {
?>
				<li style="height:50px;color:#9e9e9e;font-size:14px;"><input type="checkbox" checked="checked" style="float:left;position:relative;top:18px;left:5px;" class="header_checked"><?php if ($_smarty_tpl->tpl_vars['gwcv']->value['goods_color_img']) {?><img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['goods_color_img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['goods_name'];?>
" style="width:50px;height:50px;float:left;display:block;margin-left:7px;"><?php } else { ?>
					<img src="/zwj/view/images/front/no_picture.gif"  style="width:50px;height:50px;float:left;display:block;margin-left:7px;"><?php }?>
					<div style="float:left;display:block;width:70px;" >
						<?php if ($_smarty_tpl->tpl_vars['gwcv']->value['goods_color_desc']) {?><span style="height:20px;width:70px;margin-top:5px;oveflow:hidden;" title="颜色:<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['goods_color_desc'];?>
"><?php echo $_smarty_tpl->tpl_vars['gwcv']->value['goods_color_desc'];?>
</span><?php } else { ?><span style="height:20px;width:70px;margin-top:5px;oveflow:hidden;"></span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['gwcv']->value['attr_name']) {?><span style="height:20px;width:70px;" title="<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['attr_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['attr_value'];?>
" ><?php echo $_smarty_tpl->tpl_vars['gwcv']->value['attr_value'];?>
</span><?php }?>
					</div>
					<div style="height:50px;margin-left:11px;float:left;width:-webkit-fit-content;width:-moz-fit-content;text-align:center;"><span style="float:left;width:16px;border:1px solid #e6e6e6;height:16px;margin-top:17px;line-height:16px;border-radius:13px;visibility:hidden;font-weight:bold;" class="gouwuche_show gouwuche_dec">-</span><span style="width:fit-content;width:-webkit-fit-content;width:-moz-fit-content;float:left;height:50px;line-height:50px;padding:0px 4px;" class="gouwuche_num"><?php echo $_smarty_tpl->tpl_vars['gwcv']->value['number'];?>
</span>
					<span style="float:left;width:16px;border:1px solid #e6e6e6;height:16px;margin-top:17px;line-height:16px;border-radius:13px;visibility:hidden;font-weight:bold" class="gouwuche_show gouwuche_inc">+</span>
					</div>
					<div style="width:-webkit-fit-content;width:-moz-fit-content;float:right;margin-right:11px;height:50px;font-family:Arial;width:fit-content;"><span style="display:block;height:13px;width:13px;border:1px solid #e6e6e6;border-radius:7px;line-height:13px;font-size:12px;float:right;visibility:hidden;" class="gouwuche_show gouwuche_close">×</span><span style="width:-webkit-fit-content;width:-moz-fit-content;display:block;height:20px;"><font>&yen;</font><font class="price_row"><?php echo $_smarty_tpl->tpl_vars['gwcv']->value['shop_price']*$_smarty_tpl->tpl_vars['gwcv']->value['number'];?>
</font></span></div>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['gouwuche_id'];?>
" class="gouwuche_id" name="gouwuche_id[]">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gwcv']->value['shop_price'];?>
" class="shop_price1">
				</li>
				
				<div class="clear" style="margin-bottom:7px;"></div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			</ul>
			<div class="clear"></div>
			<div id="gouwuche_bottom" style="height:78px;width:270px;position:fixed;bottom:0;font-family:Arial;font-size:13px;margin-left:13px;">
				<span style="float:left;color:#a7a7a7;width:133px;text-align:left;">已选&nbsp;<b>0</b>&nbsp;件</span><span style="float:right;color:#c50808;width:63px;" class="price_all1">&yen;<font>0.00</font></span><div class="clear" style="height:5px;"></div>
				<img src="/zwj/view/images/front/结算1.png" alt="" class="jiesuan2" style="display:block;margin-left:14px;">
			</div>
		</div>
		
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我的资产</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我关注的品牌</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我的收藏</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我看过的</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我要充值</span>
		</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>我要留言</span>
		</div>
		<div class="clear"></div>
		<br>
		<div class="message_content">
    				<form action="/zwj/controller/front/message_deal.php" method="post" name="form" id="form2">
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">留言标题：</span><input type="text" name="title" id="title" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">姓名：</span><input type="text" name="customer_name" id="username" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">电话：</span><input type="text" name="telephone" id="telephone" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">E-mail：</span><input type="text" name="email" id="email" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"> <span class="span_one" style="float:left;width:90px;">留言内容：</span><textarea name="content" id="content_of_message" cols="30" rows="10" style="float:left;width:140px;"></textarea><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="captcha" style="float:left;width:90px;">验证码：</span><input type="text" name="captcha" id="captcha" class="captcha_input" style="float:left;width:70px;height:20px;"/><img src="/zwj/controller/front/captcha.php" alt="验证码"  onclick="this.src='/zwj/controller/front/captcha.php?'+Math.random()" style="float:left;width:90px;margin-left:13px;"/></p>
					<p style="overflow:hidden;margin-bottom:13px;"><input type="reset" value="重填" class="reset" style="float:left;width:60px;margin-right:13px;margin-left:33px;height:20px;"/>
												<input type="submit" value="提交" class="submit" style="float:left;width:60px;height:20px;"/></p>
    				</form>
    			</div>
	</div>
	<div class="dice-menu-content">
		<div class="dice-menu-content-header">
			<i class="fa fa-angle-double-right"></i>
			<span>联系客服</span>
		</div>
	</div>

	<script>
$('#form2').submit(function(e){
		  	var flag=0;
		  	var reg=/^.+$/;
		  	var ph_reg = /^[1][345789]\d{9}$/;
		  	var email_reg=/^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/;
		  	var title=$.trim($('#title').val());
		  	var username=$.trim($('#username').val());
		  	var telephone=$.trim($('#telephone').val());
		  	var email=$.trim($('#email').val());
		  	var content=$.trim($('#content_of_message').val());
		  	if(!reg.test(title)){
		  		flag=1;
		  		$('#title').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(telephone)){
		  		flag=1;
		  		$('#telephone').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(username)){
		  		flag=1;
		  		$('#username').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(email)){
		  		flag=1;
		  		$('#email').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(content)){
		  		flag=1;
		  		$('#content').next().html('&nbsp;*必填');
		  	}
		  	if(flag==1){
		  		e.preventDefault();
		  	}else{
		  		if(!ph_reg.test(telephone)){
		  			$('#telephone').next().html('&nbsp;*手机号格式不正确');
		  			e.preventDefault();
		  		}else{
		  			$('#telephone').next().html('&nbsp;*');
		  			if(!email_reg.test(email)){
		  			$('#email').next().html('&nbsp;*email格式不正确');
		  			e.preventDefault();
		  		}else{
		  			
		  			}
		  		}
		  		
		  	}

		  	
		  });

	</script>






<script src="/zwj/view/js/jqueyUI/jquery-ui.js"></script>
<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
<link rel="stylesheet" href="/zwj/view/js/jqueyUI/jquery-ui.min.css">
<div id="dialog" title="客服电话：13358378959" style="display:none;">
	<div id="msgzone">

	</div>
	<br>
	<p>
		<textarea style="width:500px;height:60px;" class="chat_content"></textarea>
	</p>
	<br>
	<button onclick="xunwen();">发送</button>
</div>
<input type="hidden" value="<?php echo $_SESSION['username'];?>
" class="username13">


<style>
	.ui-dialog{
		left:410px;
	}
	#msgzone {
		border: solid 1px gray;
		width:500px;
		height:300px;
		overflow:scroll;
	}
</style>



<script>
	$(function(){


		$('.chat_online').click(function(){
			var username13= $.trim($('.username13').val());
			if(username13==""){
				window.location.href="/zwj/controller/front/login.php";
			}else{
				$( "#dialog" ).dialog({width:530});
			}

		});

		$( "button" )
				.button()
				.click(function( event ) {
					event.preventDefault();
				});

		// 长轮询
		//get_get_message_reply()
		//param request_type  请求类型 详解：
		//      get_message   获取信息
		//      comfrim_read  确认已经读取了信息
		function get_message_reply(url, rec, request_type, send_data) {
			var setting = {
				url: url,
				data: {
					'request_type': request_type,
					'rec':rec,
					'send_data': send_data,
				},
				type: 'post',
				dataType: 'json',
				success: function (response) {
					console.log(response);
					if (response.status == 1) {
						if (response.response_type == 'is_read') {
							//将消息写入到消息盒子
							var messages = response.info;
							var message_str = '';
							var id_arr = new Array();
							for (var i in messages) {
								id_arr.push(messages[i]['mid']);
								$('<p>客服对你说<br />' + messages[i].content + '</p>').appendTo($('#msgzone'));
							}

							//确认收到消息
							get_message_reply(url, rec, 'confirm_read', id_arr);

						} else if (response.response_type == 'is_connecting') {
							//继续获取消息
							get_message_reply(url, rec, 'get_message', '');
						}
					}
				}
			};
			$.ajax(setting);
		}
		var url = '/zwj/chat/custom_deal.php';
		var rec=$('.username13').val();
		get_message_reply(url, rec, 'get_message', '');


	});
	function xunwen() {
		var cont = $('.chat_content').val();
		var pos=$('.username13').val();


		$.post('/zwj/chat/sendmsg.php',{rec:'admin',content:cont,pos:pos},function(res) {

			//console.log(res);
			if(res.status==1) {
				$('<p>你对客服说<br />' + cont + '</p>').appendTo($('#msgzone'));
				$('.chat_content').val('');
			}else{
				console.log('发送失败!');
			}

		},'json');
	}

</script>



	
	<div class="content">
		<div class="cate_info" style="position:relative;">
			<ul>
								<li data-id="63">服装鞋帽<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="64">美容护肤<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="65">婴幼孕妇<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="66">数码家电<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="67">家居日用<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="68">食品特产<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="69">文体用品<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="70">手表配饰<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="71">虚拟商品<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
								<li data-id="112">图书音像<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
				
			</ul>
			<div class="category" style="display:none;position:absolute;top:0px;left:200px;z-index:100;width:500px;height:484px;background:#f6f6f6;border:1px solid #dcdcdc;"></div>
		</div>
		<div class="wrap">
			<ul>
			<li><a href="https://pages.tmall.com/wow/fushi/16636/zhubaoshipin?spm=875.7931836/B.2016006.d1.wKwkEN&acm=07055-1.1003.2.1130159&aldid=Rf13tbNA&scm=1003.2.07055-1.OTHER_1472614650948_1130159&pos=1"><img src="/zwj/view/images/front/lunbo1.jpg" alt="图片不存在"></a></li>
			<li><a href="https://pages.tmall.com/wow/tmall-3c/16502/hrmkppr?spm=875.7931836/A.2016006.d5.JzGI2W&pvid=c976241a-4c5e-486b-97ce-13e2a32e47be&activity_id=15170&acm=07055.1003.1.1136072&item_id=-1&trackInfo=20160815100101;-1;15170;-1;-1;-1;1007.13728.49328.100200300000000;c976241a-4c5e-486b-97ce-13e2a32e47be&aldid=aTrOOFYh&scm=1003.1.20160815.OTHER_22_1134311&pos=2"><img src="/zwj/view/images/front/lunbo2.jpg" alt="图片不存在"></a></li>
			<li><a href="https://list.tmall.com/search_product.htm?q=%CF%E3%C6%AE%C6%AE%C4%CC%B2%E8&type=p&spm=a220m.1000858.a2227oh.d100&xl=%CF%E3%C6%AE%C6%AE_1&from=.list.pc_1_suggest"><img src="/zwj/view/images/front/lunbo3.png" alt="图片不存在"></a></li>
			<li><a href="https://ju.taobao.com/tg/brand_items.htm?act_sign_id=19990012&seller_id=648476316&ali_trackid=17_06291a78f7f4f046fd341258a2c82f4a&spm=875.7931836/A.2016006.d2.wwBFSU"><img src="/zwj/view/images/front/lunbo4.png" alt="图片不存在"></a></li>
			<li><a href="https://intel-brand.tmall.com/p/rd903216.htm?ali_trackid=17_1acc7c8c72d495154cdb6c43613ecf1d&spm=875.7931836/A.2016006.d4.wwBFSU"><img src="/zwj/view/images/front/lunbo5.png" alt="图片不存在"></a></li>
		</ul>
		<ol>
			<li >
				<img src="/zwj/view/images/front/circle2.png" alt="图片不存在">

			</li>
			<li>
				<img src="/zwj/view/images/front/circle1.png" alt="图片不存在">
			</li>
			<li>
				<img src="/zwj/view/images/front/circle1.png" alt="图片不存在">
			</li>
			<li>
				<img src="/zwj/view/images/front/circle1.png" alt="图片不存在">
			</li>
			<li>
				<img src="/zwj/view/images/front/circle1.png" alt="图片不存在">
			</li>
		</ol>
		<div class="prev">
			<img src="/zwj/view/images/front/prev.png" alt="图片不存在">
		</div>
		<div class="next">
			<img src="/zwj/view/images/front/next.png" alt="图片不存在">
		</div>
		</div>

		<div class="login_right">
			<img src="/zwj/view/images/front/login.png" alt="图片不存在" style="margin:13px auto;display:block;">
			<ul>
				
				<?php if ($_SESSION['username']) {?>
				<li style="color:white">亲爱的<?php echo $_SESSION['username'];?>
欢迎回来</li>
				<?php } else { ?>
				<li class="hello" style="color:white;">Hi~你好！</li>
				<li style="border:1px solid rgb(221,139,39);width:50px;padding:3px 18px;border-radius:20px;margin-left:14px;background:rgb(221,39,39);"><a href="/zwj/controller/front/login.php"><img src="/zwj/view/images/front/登陆.png" alt="图片不存在"style="display:block;float:left;margin-top:3px;">请登录</a></li>
				<li><a href="/zwj/controller/front/register.php">免费注册></a></li>
				<?php }?>
				
			</ul>
			<ul style="margin-left:-11px;margin-top:20px;">
				<li style="width:70px;color:white;">
					<img src="/zwj/view/images/front/退货保障.png" alt="图片不存在" style="display:block;float:left">退货保障
				</li>
				<li style="width:70px;color:white;">
					<img src="/zwj/view/images/front/天猫分期.png" alt="图片不存在" style="display:block;float:left">花呗分期
				</li>
				<li style="width:70px;color:white;">
					<img src="/zwj/view/images/front/退货保障.png" alt="图片不存在" style="display:block;float:left">急速退款
				</li>
				<li style="margin-left:38px;margin-top:5px;">
					<a href="#">更多特权></a>
				</li>
			</ul>
			<div class="huodong">推荐活动</div>
			<a class="guanggao" href="https://pages.tmall.com/wh/tmall/jifen/act/point-exchange?spm=875.7931836/A.2016070.d1.T8UWMt&acm=2016030417.1003.2.1125370&aldid=lpWp3nkw&scm=1003.2.2016030417.OTHER_1475712919862_1125370&pos=1#9230"></a>
			<div style="text-align:center;color:white;margin-top:13px;">家用小电筒<br>1100积分</div>
		</div>
	</div>
	<div class="is_new">
		<div class="is_new_head">
			<img src="/zwj/view/images/front/newtitle.gif" alt="图片不存在">
			<div class="click"><a href="/zwj/controller/front/goods_status.php?goods_status=is_new">更多请点击 >></a></div>
		</div>
		<div class="is_new_content">
			<div class="is_new_content_left">
				<a href="https://pages.tmall.com/wow/act/16649/nvzhuang?spm=875.7931836/B.2016006.2.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=15844&acm=07055.1003.1.1136072&item_id=536161557130&trackInfo=20160815100201;5387665;15844;536161557130;3;15844_536161557130;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_4_1139225&pos=6">
				<img src="/zwj/view/images/front/is_new1.png" alt="is_new1.jpg" style="margin:14px 0">
				</a>
				<a href="https://www.tmall.com/wh/tmall/import/act/guojia-fr?spm=875.7931836/B.2016006.3.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=12328&acm=07055.1003.1.1136072&item_id=528200070490&trackInfo=20160815100201;3490330;12328;528200070490;3;12328_528200070490;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_5_1137935&pos=7">
				<img src="/zwj/view/images/front/is_new2.png" alt="is_new2.jpg" style="margin:14px 0">
				</a>
			</div>
			<div class="is_new_content_right">
				<ul>
										<li><a href="/zwj/controller/front/goods.php?goods_id=8">
						<img src="/zwj/controller/data/images/201610/04/thumb_dx8m2n.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">238.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士薄款夹克2016新款春秋装中年羊毛呢外套30-40-50岁爸爸装</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=9">
						<img src="/zwj/controller/data/images/201610/04/thumb_7aw96b.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">228.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士外套青年连帽风衣修身韩版潮男装纯色上衣休闲薄款夹克男</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=7">
						<img src="/zwj/controller/data/images/201610/05/thumb_h9ziyp.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">268.99</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">2016新款秋冬男士夹克外套中年薄款毛呢商务休闲男装大码爸爸装潮</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=10">
						<img src="/zwj/controller/data/images/201610/04/thumb_yp7bxu.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">299.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">艾格Weekend2016秋新品绣花贴布复古牛仔外套16022106647</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=35">
						<img src="/zwj/controller/data/images/201704/18/thumb_ay6w2s.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">26888.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">Apple/苹果MacBookPro15.4英寸笔记本电脑I7 16G 512G 带TouchBar</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=36">
						<img src="/zwj/controller/data/images/201704/18/thumb_a2md5x.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">6999.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">【12期免息|3-7天发完】Apple/苹果 iPhone 7 Plus 全网通红色</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=38">
						<img src="/zwj/controller/data/images/201704/18/thumb_iabu97.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">48.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">正品迪塔手表男女士休闲钢带情侣腕防水石英女表男表学生时尚潮流 </a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=39">
						<img src="/zwj/controller/data/images/201704/18/thumb_rckh92.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;">298.00</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">汉客镇店之宝硬箱 万向轮拉杆箱20寸旅行箱24寸行李箱男女登机箱 </a>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>


<div class="is_new">
		<div class="is_new_head">
			<img src="/zwj/view/images/front/besttitle.png" alt="图片不存在">
			<div class="click"><a href="/zwj/controller/front/goods_status.php?goods_status=is_best">更多请点击 >></a></div>
		</div>
		<div class="is_new_content">
			<div class="is_new_content_left">
				<a href="https://pages.tmall.com/wow/tmsx/act/hhcf?spm=875.7931836/B.2016006.8.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=16420&acm=07055.1003.1.1136072&item_id=521227045612&trackInfo=20160815100201;5572003;16420;521227045612;3;16420_521227045612;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_7_1147853&pos=8">
				<img src="/zwj/view/images/front/is_best1.jpg" alt="is_new1.jpg" style="margin:14px 0">
				</a>
				<a href="https://pages.tmall.com/wow/tmsx/act/dingjiliaoli?spm=875.7931836/B.2016006.9.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=16877&acm=07055.1003.1.1136072&item_id=12454667990&trackInfo=20160815100201;5837341;16877;12454667990;3;16877_12454667990;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_10_1144552&pos=9">
				<img src="/zwj/view/images/front/is_best2.jpg" alt="is_new2.jpg" style="margin:14px 0">
				</a>
			</div>
			<div class="is_new_content_right">
				<ul>
										<li><a href="/zwj/controller/front/goods.php?goods_id=8">
						<img src="./zwj/controller/data/images/201610/04/thumb_dx8m2n.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>238.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士薄款夹克2016新款春秋装中年羊毛呢外套30-40-50岁爸爸装</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=9">
						<img src="./zwj/controller/data/images/201610/04/thumb_7aw96b.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>228.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士外套青年连帽风衣修身韩版潮男装纯色上衣休闲薄款夹克男</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=7">
						<img src="./zwj/controller/data/images/201610/05/thumb_h9ziyp.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>268.99</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">2016新款秋冬男士夹克外套中年薄款毛呢商务休闲男装大码爸爸装潮</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=10">
						<img src="./zwj/controller/data/images/201610/04/thumb_yp7bxu.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>299.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">艾格Weekend2016秋新品绣花贴布复古牛仔外套16022106647</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=36">
						<img src="./zwj/controller/data/images/201704/18/thumb_a2md5x.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>6999.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">【12期免息|3-7天发完】Apple/苹果 iPhone 7 Plus 全网通红色</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=39">
						<img src="./zwj/controller/data/images/201704/18/thumb_rckh92.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>298.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">汉客镇店之宝硬箱 万向轮拉杆箱20寸旅行箱24寸行李箱男女登机箱 </a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=41">
						<img src="./zwj/controller/data/images/201704/20/thumb_e5q76t.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>133.00</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">苹果电脑</a>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>


	<div class="is_new">
		<div class="is_new_head">
			<img src="/zwj/view/images/front/hottitle.png" alt="图片不存在">
			<div class="click"><a href="/zwj/controller/front/goods_status.php?goods_status=is_hot">更多请点击 >></a></div>
		</div>
		<div class="is_new_content">
			<div class="is_new_content_left">
				<a href="https://pages.tmall.com/wow/aliyu/16517/guojiabaozang?spm=875.7931836/B.2016006.15.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=16885&acm=07055.1003.1.1136072&item_id=539056822701&trackInfo=20160815100201;5837552;16885;539056822701;3;16885_539056822701;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_15_1145964&pos=12">
				<img src="/zwj/view/images/front/is_hot1.jpg" alt="is_hot1.jpg" style="margin:14px 0">
				</a>
				<a href="https://pages.tmall.com/wow/tmall-3c/16342/awesomecollection?spm=875.7931836/B.2016006.16.absaE5&pvid=168582d7-1a66-4681-b68e-20fa27868c4e&activity_id=14764&acm=07055.1003.1.1136072&item_id=528407734608&trackInfo=20160815100201;4833060;14764;528407734608;3;14764_528407734608;1007.13728.49788.100200300000000;168582d7-1a66-4681-b68e-20fa27868c4e&aldid=h5yRLG8u&scm=1003.1.20160815.OTHER_17_1141747&pos=13">
				<img src="/zwj/view/images/front/is_hot2.png" alt="is_hot2.png" style="margin:14px 0">
				</a>
			</div>
			<div class="is_new_content_right">
				<ul>
										<li><a href="/zwj/controller/front/goods.php?goods_id=8">
						<img src="./zwj/controller/data/images/201610/04/thumb_dx8m2n.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>238.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士薄款夹克2016新款春秋装中年羊毛呢外套30-40-50岁爸爸装</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=9">
						<img src="./zwj/controller/data/images/201610/04/thumb_7aw96b.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>228.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">秋季男士外套青年连帽风衣修身韩版潮男装纯色上衣休闲薄款夹克男</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=7">
						<img src="./zwj/controller/data/images/201610/05/thumb_h9ziyp.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>268.99</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">2016新款秋冬男士夹克外套中年薄款毛呢商务休闲男装大码爸爸装潮</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=35">
						<img src="./zwj/controller/data/images/201704/18/thumb_ay6w2s.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>26888.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">Apple/苹果MacBookPro15.4英寸笔记本电脑I7 16G 512G 带TouchBar</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=36">
						<img src="./zwj/controller/data/images/201704/18/thumb_a2md5x.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>6999.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">【12期免息|3-7天发完】Apple/苹果 iPhone 7 Plus 全网通红色</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=39">
						<img src="./zwj/controller/data/images/201704/18/thumb_rckh92.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>298.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">汉客镇店之宝硬箱 万向轮拉杆箱20寸旅行箱24寸行李箱男女登机箱 </a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=11">
						<img src="./zwj/controller/data/images/201610/04/thumb_bj7tcx.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>179.00</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#">七匹狼长袖t恤2016秋季新品男士纯棉polo衫中年男装纯色翻领T</a>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="goods_all">
		<ul>
										<li><a href="/zwj/controller/front/goods.php?goods_id=41">
						<img src="/zwj/controller/data/images/201704/20/thumb_e5q76t.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>133.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								苹果电脑
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=11">
						<img src="/zwj/controller/data/images/201610/04/thumb_bj7tcx.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>179.00</span>
														<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								七匹狼长袖t恤2016秋季新品男士纯棉polo衫中年男装纯色翻领T
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=40">
						<img src="/zwj/controller/data/images/201704/20/thumb_qhfvna.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>132.00</span>
													</div>
						<div class="goods_name">
							<a href="#">
								苹果电脑
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=39">
						<img src="/zwj/controller/data/images/201704/18/thumb_rckh92.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>298.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								汉客镇店之宝硬箱 万向轮拉杆箱20寸旅行箱24寸行李箱男女登机箱 
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=38">
						<img src="/zwj/controller/data/images/201704/18/thumb_iabu97.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>48.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								正品迪塔手表男女士休闲钢带情侣腕防水石英女表男表学生时尚潮流 
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=36">
						<img src="/zwj/controller/data/images/201704/18/thumb_a2md5x.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>6999.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								【12期免息|3-7天发完】Apple/苹果 iPhone 7 Plus 全网通红色
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=35">
						<img src="/zwj/controller/data/images/201704/18/thumb_ay6w2s.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>26888.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								Apple/苹果MacBookPro15.4英寸笔记本电脑I7 16G 512G 带TouchBar
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=10">
						<img src="/zwj/controller/data/images/201610/04/thumb_yp7bxu.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>299.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								艾格Weekend2016秋新品绣花贴布复古牛仔外套16022106647
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=7">
						<img src="/zwj/controller/data/images/201610/05/thumb_h9ziyp.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>268.99</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								2016新款秋冬男士夹克外套中年薄款毛呢商务休闲男装大码爸爸装潮
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=9">
						<img src="/zwj/controller/data/images/201610/04/thumb_7aw96b.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>228.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								秋季男士外套青年连帽风衣修身韩版潮男装纯色上衣休闲薄款夹克男
							</a>
						</div>
					</li>
										<li><a href="/zwj/controller/front/goods.php?goods_id=8">
						<img src="/zwj/controller/data/images/201610/04/thumb_dx8m2n.jpg" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span>238.00</span>
														<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
													</div>
						<div class="goods_name">
							<a href="#">
								秋季男士薄款夹克2016新款春秋装中年羊毛呢外套30-40-50岁爸爸装
							</a>
						</div>
					</li>
					
				</ul>
	</div>
	<div id="footer_img" >
	<img src="/zwj/view/images/front/bottom.jpg" alt="图片不存在">
	<span>133-5837-8959</span></div>
<div id="footer">
	<ul class="footer_nav">
		<li ><a href="#" class="first">新手上路</a></li>
		<li><a href="#">售后流程</a></li>
		<li><a href="#">购物流程</a></li>
		<li><a href="#">订购方式</a></li>
	</ul>
	<ul class="footer_nav">
		<li ><a href="#" class="first">手机常识</a></li>
		<li><a href="#">如何分辨原装电池</a></li>
		<li><a href="#">如何分辨水货手机</a></li>
		<li><a href="#">如何享受全国联保</a></li>
	</ul>
	<ul class="footer_nav">
		<li ><a href="#" class="first">配送与支付</a></li>
		<li><a href="#">货到付款区域</a></li>
		<li><a href="#">配送支付智能查询</a></li>
		<li><a href="#">支付方式说明</a></li>
	</ul>
	<ul class="footer_nav">
		<li ><a href="#" class="first">会员中心</a></li>
		<li><a href="#">资金管理</a></li>
		<li><a href="#">我的收藏</a></li>
		<li><a href="#">我的订单</a></li>
	</ul>
	<ul class="footer_nav_wx">
		<li>关注微信</li>
		<li><img src="/zwj/view/images/front/weixin.png" alt="图片不存在"></li>
	</ul>
</div>

</body>
</html><?php }
}
