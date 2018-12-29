<?php
/* Smarty version 3.1.30, created on 2017-04-20 12:57:53
  from "D:\wamp\www\zwj\view\html\front\header1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f83fd1a21dc9_94766664',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'baf6843ba5a3ce56fd61ea16c15844da697cb7b0' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\header1.html',
      1 => 1492655694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f83fd1a21dc9_94766664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1667158f83fd18686d7_84821638';
?>
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
			
			
			<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_SESSION[\'username\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

			<li class="first">Hi,<a href="#" class="session_username"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_SESSION[\'username\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
</a>
			</li>
			<li class="second" style="margin-left:53px;"><a href="/zwj/controller/front/information.php">用户中心</a></li>
			<li ><span>&nbsp;|&nbsp;</span></li>
			<li><a href="/zwj/controller/front/logout.php">退出</a></li>
			<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php } else { ?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

			<li class="first"><span>亲,欢迎光临本店</span></li>
			<li class="second"><a href="/zwj/controller/front/login.php">请登录</a></li>
			<li ><span>|</span></li>
			<li><a href="/zwj/controller/front/register.php">免费注册</a></li>
			<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

			
		</ul>
		<ul class="nav header_right">
			<li class="bgwhite">
				<a href="#">我的购物</a><i class="fa fa-caret-down"></i>
				<ul class="nav_list">
					<li><a href="#" >已买到的宝贝</a></li>
					<li><a href="#">已卖出的宝贝</a></li>
				</ul>
			</li>
			<li><i class="fa fa-shopping-cart red"></i><a href="/zwj/controller/front/shopping_cart.php">购物车<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_smarty_tpl->tpl_vars[\'all_number\']->value && $_SESSION[\'username\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';
echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'all_number\']->value;?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';
echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php } else { ?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
0<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
件</a><i class="fa fa-caret-down"></i></li>
			<li><i class="fa fa-heart red"></i><a href="#">我关注的品牌</a><i class="fa fa-caret-down"></i></li>
			<li class="bgwhite">
				<i class="fa fa-star red "></i><a href="#">收藏夹</a><i class="fa fa-caret-down"></i>
				<ul class="nav_list">
					<li><a href="/zwj/controller/front/collect_goods.php" >收藏的宝贝</a></li>
					<li><a href="#">收藏的店铺</a></li>
				</ul>
			</li>
			<li><i class="fa fa-comment red"></i><a href="#">在线聊天</a></li>
			<li><i class="fa fa-phone red"></i><a href="#">联系客服</a></li>
			<li><i class="fa fa-list red"></i><a href="#">网站导航</a><i class="fa fa-caret-down"></i></li>
		</ul>
	</div>
	<!--<div id="bool">
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
	  	  <span>购物车<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_smarty_tpl->tpl_vars[\'all_number\']->value && $_SESSION[\'username\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';
echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'all_number\']->value;?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';
echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php } else { ?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
0<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
件</span>
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
				<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'gouwuche\']->value, \'gwcv\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'gwcv\']->value) {
?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

				<li style="height:50px;color:#9e9e9e;font-size:14px;"><input type="checkbox" checked="checked" style="float:left;position:relative;top:18px;left:5px;" class="header_checked"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_color_img\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
<img src="/zwj/<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_color_img\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
" title="<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
" style="width:50px;height:50px;float:left;display:block;margin-left:7px;"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php } else { ?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

					<img src="/zwj/view/images/front/no_picture.gif"  style="width:50px;height:50px;float:left;display:block;margin-left:7px;"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

					<div style="float:left;display:block;width:70px;" >
						<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_color_desc\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
<span style="height:20px;width:70px;margin-top:5px;oveflow:hidden;" title="颜色:<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_color_desc\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'goods_color_desc\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
</span><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php } else { ?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
<span style="height:20px;width:70px;margin-top:5px;oveflow:hidden;"></span><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

						<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php if ($_smarty_tpl->tpl_vars[\'gwcv\']->value[\'attr_name\']) {?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
<span style="height:20px;width:70px;" title="<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'attr_name\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
:<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'attr_value\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
" ><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'attr_value\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
</span><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php }?>/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>

					</div>
					<div style="height:50px;margin-left:11px;float:left;width:-webkit-fit-content;width:-moz-fit-content;text-align:center;"><span style="float:left;width:16px;border:1px solid #e6e6e6;height:16px;margin-top:17px;line-height:16px;border-radius:13px;visibility:hidden;font-weight:bold;" class="gouwuche_show gouwuche_dec">-</span><span style="width:fit-content;width:-webkit-fit-content;width:-moz-fit-content;float:left;height:50px;line-height:50px;padding:0px 4px;" class="gouwuche_num"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'number\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
</span>
					<span style="float:left;width:16px;border:1px solid #e6e6e6;height:16px;margin-top:17px;line-height:16px;border-radius:13px;visibility:hidden;font-weight:bold" class="gouwuche_show gouwuche_inc">+</span>
					</div>
					<div style="width:-webkit-fit-content;width:-moz-fit-content;float:right;margin-right:11px;height:50px;font-family:Arial;width:fit-content;"><span style="display:block;height:13px;width:13px;border:1px solid #e6e6e6;border-radius:7px;line-height:13px;font-size:12px;float:right;visibility:hidden;" class="gouwuche_show gouwuche_close">×</span><span style="width:-webkit-fit-content;width:-moz-fit-content;display:block;height:20px;"><font>&yen;</font><font class="price_row"><?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
</font></span></div>
					<input type="hidden" value="<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php echo $_smarty_tpl->tpl_vars[\'gwcv\']->value[\'gouwuche_id\'];?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>
" class="gouwuche_id" name="gouwuche_id[]">
				</li>
				
				<div class="clear" style="margin-bottom:7px;"></div>
				<?php echo '/*%%SmartyNocache:1667158f83fd18686d7_84821638%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:1667158f83fd18686d7_84821638%%*/';?>


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
    				<form action="/zwj/controller/front/message_deal.php" method="post" name="form1" id="form1">
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">留言标题：</span><input type="text" name="title" id="title" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">姓名：</span><input type="text" name="username" id="username" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">电话：</span><input type="text" name="telephone" id="telephone" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="span_one" style="float:left;width:90px;">E-mail：</span><input type="text" name="email" id="email" style="float:left;width:140px;height:20px;"/><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"> <span class="span_one" style="float:left;width:90px;">留言内容：</span><textarea name="content" id="content_of_message" cols="30" rows="10" style="float:left;width:140px;"></textarea><span class="span_two" style="float:left;width:33px;">&nbsp;*</span></p>
    					<p style="overflow:hidden;margin-bottom:13px;"><span class="captcha" style="float:left;width:90px;">验证码：</span><input type="text" name="captcha" id="captcha" class="captcha_input" style="float:left;width:70px;height:20px;"/><img src="/zwj/controller/front/captcha.php" alt="验证码"  onclick="this.src='/zwj/controller/front/captcha.php?'+Math.random()" style="float:left;width:90px;margin-left:13px;"/></p>
					<p style="overflow:hidden;margin-bottom:13px;"><input type="reset" value="重填" class="reset" style="float:left;width:60px;margin-right:13px;margin-left:33px;height:20px;"/>
						<?php if ($_SESSION['username']) {?><input type="hidden" value="<?php echo $_SESSION['username'];?>
" name="customer_name"><?php }?>
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
	<?php echo '<script'; ?>
>

$('#form1').submit(function(e){
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

	<?php echo '</script'; ?>
>-->

	<?php }
}
