<?php
/* Smarty version 3.1.30, created on 2017-04-09 11:20:18
  from "D:\wamp\www\zwj\view\html\front\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e9a872a1c7d8_45097511',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7dc445f443041623891cc13a41b731c71ef2633d' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\goods.html',
      1 => 1491708016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e9a872a1c7d8_45097511 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_date_format\')) require_once \'D:\\\\wamp\\\\www\\\\zwj\\\\lib\\\\smarty3\\\\libs\\\\plugins\\\\modifier.date_format.php\';
?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';
$_smarty_tpl->compiled->nocache_hash = '3152658e9a87290b093_36289190';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城首页</title>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<!--<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/TweenMax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/plugins/ScrollToPlugin.min.js"><?php echo '</script'; ?>
> -->
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/TweenMax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/header.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/zoom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery.fly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/goods.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/pop.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/footer.css">
	<link rel="stylesheet" href="/zwj/view/css/front/goods.css">
	<link rel="stylesheet" href="/zwj/view/css/front/zoom.css">
	<link rel="stylesheet" href="/zwj/view/css/front/pop.css">
	<link rel="stylesheet" href="/zwj/view/css/front/login.css">
	<style>

	</style>
</head>
<body >
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<!-- 登陆窗口的弹出 -->
	<div id="tip" style="width:250px;height:50px;background:#336600;line-height:50px;text-align:center;color:white;font-size:18px;position:fixed;display:none;z-index:13">已成功加入购物车！</div>
	<a href="javascript:;" id="login_show"></a>
	<div class="clear"></div>
	<div class="popWindow hide" style="z-index:100;">
		<h3>布尔boolshop.com<span>关闭</span></h3>
		<input type="hidden" class="pop_type" value="3">
		<div class="content">
			<form action="#" method="post" enctype="multipart/form-data" id="form" >
			<div id="login">
				<p class="p_first">密码登录</p>
				<p class="p_notice uncorrect">
					<img src="/zwj/view/images/front/错误.png" alt="错误" >
					<span>&nbsp;&nbsp;你输入的密码和账户名不匹配，是否<a href="#">忘记密 &nbsp;&nbsp;码</a>或<a href="#">忘记会员名</a></span>
				</p>
				<p class="p_notice username">
					<img src="/zwj/view/images/front/错误.png" alt="错误" >
					<span>请输入账户名</span>
				</p>
				<p class="p_notice username_reg_error">
					<img src="/zwj/view/images/front/错误.png" alt="错误" >
					<span>账户名格式输入不正确</span>
				</p>
				<p class="p_notice password">
					<img src="/zwj/view/images/front/错误.png" alt="错误" >
					<span>请输入密码</span>
				</p>
				<p class="p_notice name_pwd">
					<img src="/zwj/view/images/front/错误.png" alt="错误" >
					<span>请输入账户名和密码</span>
				</p>
				<p><img src="/zwj/view/images/front/用户.png" alt="用户" ><input class="text" type="text" placeholder="&nbsp;&nbsp;手机号/会员名" name="username" id="username1">
				</p>
				<p><img src="/zwj/view/images/front/密码.png" alt="密码" ><input type="password" name="password" id="password">
				</p>
				<p ><input type="submit" value="登录"  id="submit" ></p>
				<p>
					<a id="a_first" href="pwd_edit.php">忘记密码</a>&nbsp;
					<a href="register.php">免费注册</a>
				</p>
			</div>
			</form>
		</div>
	</div>
	<div id="content">
		<div id="content_left">
			<div class="zoom">
		<div class="zoomMiddle">
			<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_img'];?>
" alt="">
			<div class="mask"></div>
		</div>

		<div class="zoomSmall">
			<span class="left disable">&lt;</span>
			<div class="wrapSmallImg">
				<ul>
					<li class="current">
						<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_img'];?>
" alt="">
					</li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsgallery']->value, 'gg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gg']->value) {
?>
					<li>
						<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gg']->value['goods_gallery_img'];?>
" alt="">
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
			<span class="right">&gt;</span>
		</div>	
		<div class="zoomLarge"><img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_img'];?>
" alt=""></div>
	</div>
		</div>
		<div id="content_middle">
			<div id="goods_name"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</div>
			<div id="bool">
				<div id="bool_content">
					<img src="/zwj/view/images/front/bool_gouwuquan.png" alt="">
					<span>全布尔商城实物物品通用</span>
				</div>
				<div style="font-size:14px;margin-left:7px;padding:7px 0 0 0;">价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rmb"></i>&nbsp;<span style="text-decoration:line-through;">
					<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>

				</span></div>	
				<div style="font-size:14px;margin-left:7px;padding:7px 0;">促销价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rmb" style="color:rgb(196,0,0)"></i>&nbsp;<span style="font-size:23px;color:rgb(196,0,0);font-weight:bold;" id="shop_price"><?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
</span></div>	
				<div style="font-size:14px;margin-left:7px;padding:3px 0 11px 0;">运费&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rmb"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['goods']->value['shipping_price'];?>
</div>	
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['attr_name']->value && $_smarty_tpl->tpl_vars['attr_name']->value[0]['attr_name'] != '') {?>
			<div id="goods_size">
				<ul>
					<li class="title" style="margin-left:-6px;"><?php echo $_smarty_tpl->tpl_vars['attr_name']->value[0]['attr_name'];?>
</li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr_value']->value, 'av');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['av']->value) {
?>
					<li ><span><?php echo $_smarty_tpl->tpl_vars['av']->value['attr_value'];?>
</span><img src="/zwj/view/images/front/color_select.jpg" alt="图片不存在" ></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
			<div class="clear"></div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['goodscolor']->value && $_smarty_tpl->tpl_vars['goodscolor']->value[0]['goods_color_img'] != '') {?>
			<div id="goods_color">
				<ul>
					<li class="title">颜色</li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodscolor']->value, 'gk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gk']->value) {
?>
					<li>
					<img src="/zwj/view/images/front/color_select.jpg" alt="图片不存在" class="color_select">
					<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gk']->value['goods_color_img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['gk']->value['goods_color_desc'];?>
" style="width:40px;height:40px;" class="color_img">
					
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
			<?php }?>
			<div class="clear"></div>
			<div id="goods_number">
				<ul>
					<li class="title">数量</li>
					<li style="width:40px;" class="goods_number_config"><input type="text" value="1" style="width:40px;border:0px;outline:0px;" id="shuliang"></li>
					<li style="width:0px;height:0px;" class="goods_number">
						<img src="/zwj/view/images/front/increase.png" alt="商品增加" style="display:block;" class="increase">
						<img src="/zwj/view/images/front/decrease.png" alt="商品减少" style="display:block;" class="decrease">
					</li>
					<li class="number">库存<span><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_number'];?>
</span>件</li>
				</ul>
			</div>
			
			<input type="hidden" value="<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_SESSION[\'username\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
" id="customer_name">
			
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
" id="goods_id">
			<div id="goumai" class="gouwu">立即购买</div>
			<div id="gouwuche" class="gouwu"><i class="fa  fa-shopping-cart"></i>&nbsp;加入购物车</div>
		</div>
		<div id="content_right">
			<div class="history">……………&nbsp;&nbsp;浏览历史&nbsp;&nbsp;……………</div>
			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php if ($_smarty_tpl->tpl_vars[\'goods_in\']->value) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'goods_in\']->value, \'gi\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'gi\']->value) {
?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

			<a href="goods.php?goods_id=<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'gi\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
">
			<div class="history_img" style="text-align:center;">			
				<img src="/zwj/<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'gi\']->value[\'goods_img\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
" alt="图片不存在"	style="width:160px;height:160px;">
				<div class="history_price"><i class="fa fa-rmb" ></i>&nbsp;<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'gi\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
</div>		
			</div></a>
			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php }?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

		</div>
	</div>
	<div id="goods_desc_attr">
		<span class="goods_desc">商品描述</span>
		<span class="goods_attr">商品属性</span>
	</div>
	<div id="goods_desc_content">
		<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>

	</div>
	<div id="goods_attr_content">
		<table style="margin:13px 13px;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_all_attr']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->iteration++;
$__foreach_v_4_saved = $_smarty_tpl->tpl_vars['v'];
?>
			<tr ><?php if ($_smarty_tpl->tpl_vars['v']->iteration%2 == 0) {?>
					<td style="padding:9px 5px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['attr_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value'];?>
</td>
				<?php }?>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</div>
	<div class="clear"></div>
	
	<div class="all_comment" style="margin-top:33px;width:1230px;height:40px;line-height:40px;background: #ddd;margin-left:45px;">
		<div style="width:150px;height:40px;text-indent: 13px;float:left;">用户评论</div>
		<div style="float:right;width:100px;">(共<span style="color:red;"><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'comment_num\']->value;?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
</span>条评论)</div>
		<div class="clear"></div>
	</div>
	<div class="comment_content" style="width:1230px;margin-left:45px;">
		<ul >
			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'comment\']->value, \'c\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'c\']->value) {
?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

			<li style="padding:13px 0;border-bottom:1px dashed gray;"><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'c\']->value[\'customer_name\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
(<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_time\'],\'%Y-%m-%d %H:%M:%S\');?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
)<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php if ($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_rank\'] == 1) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<img
					src="/zwj/view/images/front/stars1.gif" alt=""><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_rank\'] == 2) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<img
					src="/zwj/view/images/front/stars2.gif" alt=""><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_rank\'] == 3) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<img
					src="/zwj/view/images/front/stars3.gif" alt=""><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_rank\'] == 4) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<img
					src="/zwj/view/images/front/stars4.gif" alt=""><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'c\']->value[\'comment_rank\'] == 5) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<img
					src="/zwj/view/images/front/stars5.gif" alt=""><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php }?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

				<br><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'c\']->value[\'content\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
<br>回复：<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'c\']->value[\'response\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
</li>
			<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

		</ul>

	</div>
	
	<div class="clear" style="margin-top:33px;clear:both;"></div>

	<a  name="comment"></a>
	
	<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php if ($_smarty_tpl->tpl_vars[\'comment_status\']->value == 1) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>


	<div class="customer_comment" style="width:1000px;margin-left:45px;margin-top:33px;">
		<form action="/zwj/controller/front/comment_act.php"  method="post" name="commentForm" class="commentForm" >
			<table width="710" cellspacing="5" cellpadding="0" border="0">
				<tbody><tr>
					<td width="64" align="right">用户名：</td>
					<td width="631"><?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php if ($_SESSION[\'username\']) {?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';
echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_SESSION[\'username\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';
echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php }?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
</td>
				</tr>

				<tr>
					<td align="right">评价等级：</td>
					<td>
						<input type="radio" name="comment_rank" value="1" id="comment_rank1"> <img src="/zwj/view/images/front/stars1.gif">
						<input type="radio" name="comment_rank" value="2" id="comment_rank2"> <img src="/zwj/view/images/front/stars2.gif">
						<input type="radio" name="comment_rank" value="3" id="comment_rank3"> <img src="/zwj/view/images/front/stars3.gif">
						<input type="radio" name="comment_rank" value="4" id="comment_rank4"> <img src="/zwj/view/images/front/stars4.gif">
						<input type="radio" name="comment_rank" value="5" checked="checked" id="comment_rank5"> <img src="/zwj/view/images/front/stars5.gif">
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">评论内容：</td>
					<td>
						<textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
						<input type="hidden" name="goods_id" value="<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>
">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div style="padding-left:15px; text-align:left; float:left;margin-top:5px;">
							验证码：<input type="text" name="captcha" class="txt_style_1 captcha11" style="width:50px; margin-left:5px;" >
							<img align="absmiddle" src="/zwj/controller/front/captcha1.php" alt="captcha" onclick="this.src='/zwj/controller/front/captcha1.php?'+Math.random()">
						</div>
						<input type="submit" name="" value="提交评论" class="f_r btn_style_2" style="margin-left:400px;margin-top:3px;outline:0;background:#fca981;width:80px;height:23px;line-height:23px;text-align:center;color:white;border:0;">

					</td>
				</tr>

				</tbody></table>
		</form>
	</div>

	<?php echo '/*%%SmartyNocache:3152658e9a87290b093_36289190%%*/<?php }?>/*/%%SmartyNocache:3152658e9a87290b093_36289190%%*/';?>

	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php echo '<script'; ?>
>
		
		$(function(){
			$('.commentForm').submit(function(e){
				var comment_content=$.trim($('.inputBorder').val());
				var captcha= $.trim($('.captcha11').val());
				if(comment_content==''){
					alert('评论内容不能为空!');
					e.preventDefault();
				}else if(captcha==""){
					alert('验证码不能为空!');
					e.preventDefault();
				}else{

				}

			});
		})

		
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
