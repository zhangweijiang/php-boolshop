<?php
/* Smarty version 3.1.30, created on 2017-04-07 15:28:35
  from "D:\wamp\www\zwj\view\html\front\goods_none.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e73fa3606271_76100401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0910b1996e69c8b3a35e79a4169370f6394a68db' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\goods_none.html',
      1 => 1485432590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e73fa3606271_76100401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2927658e73fa3594dd2_75551366';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品页面不存在</title>
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
 src="/zwj/view/js/front/goods.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/footer.css">
	<link rel="stylesheet" href="/zwj/view/css/front/goods.css">
	<link rel="stylesheet" href="/zwj/view/css/front/zoom.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<p style="font-size:20px;font-family:'微软雅黑';text-align:center;">很抱歉，您访问的页面不存在</p>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</body>
</html><?php }
}
