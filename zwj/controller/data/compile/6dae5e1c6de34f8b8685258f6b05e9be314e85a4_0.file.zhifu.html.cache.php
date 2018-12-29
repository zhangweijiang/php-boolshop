<?php
/* Smarty version 3.1.30, created on 2017-04-16 19:57:22
  from "D:\wamp\www\zwj\view\html\front\zhifu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f35c22151b18_38479687',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '6dae5e1c6de34f8b8685258f6b05e9be314e85a4' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\zhifu.html',
      1 => 1492343200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f35c22151b18_38479687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '157458f35c220ffa84_78947184';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boolshop-提交订单</title>
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
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/zwj/view/css/front/index.css"> 
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/footer.css">
	<link rel="stylesheet" href="/zwj/view/css/front/shopping_cart.css">
	<link rel="stylesheet" href="/zwj/view/css/front/style.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	
	

	<h4 style="text-align:center;">您感谢您在本店购物！您的订单已提交成功，请记住您的订单号:<span style="color:red;" class="order_sn"><?php echo '/*%%SmartyNocache:157458f35c220ffa84_78947184%%*/<?php echo $_smarty_tpl->tpl_vars[\'order_sn\']->value;?>
/*/%%SmartyNocache:157458f35c220ffa84_78947184%%*/';?>
</span></h4>
	<span style="width:150px;height:38px;line-height:38px;text-align:center;color:white;font-size:16px;display:block;background:#ee0000;font-weight:bold;margin:33px auto;" class="zhifu">立即支付</span>
	<input type="hidden" value="<?php echo '/*%%SmartyNocache:157458f35c220ffa84_78947184%%*/<?php echo $_smarty_tpl->tpl_vars[\'order_id\']->value;?>
/*/%%SmartyNocache:157458f35c220ffa84_78947184%%*/';?>
" class="order_id">
	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php echo '<script'; ?>
>
	
	$('.zhifu').hover(function(){
		$(this).css('cursor','pointer');
	});
		$('.zhifu').click(function(){
			var order_id=$('.order_id').val();
			var order_sn=$('.order_sn').html();

			$.ajax({
				type:'post',
				dataType:'text',
				url:'/zwj/controller/front/zhifu_act.php',
				data:{'order_id':order_id},
				success:function(data){
					if(data=='noenough'){
						alert('余额不足，请充值');
						location.href="/zwj/controller/front/information.php";
					}else{
						alert('支付成功');
						window.location.href='/index.php';
					}

				}
			});
		});
	//后退监听事件
	history.pushState('','','');
	window.onpopstate = function(event) {

		//location.href='/zwj/controller/front/order.php?act=jiesuan';
		event.preventDefault();
		history.pushState('','','');

	};
	
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
