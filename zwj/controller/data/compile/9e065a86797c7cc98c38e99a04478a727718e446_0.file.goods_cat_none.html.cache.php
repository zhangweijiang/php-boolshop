<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:02:27
  from "D:\wamp\www\zwj\view\html\front\goods_cat_none.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e7014328e258_75706141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e065a86797c7cc98c38e99a04478a727718e446' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\goods_cat_none.html',
      1 => 1491534145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e7014328e258_75706141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1145758e7014323c1b0_21001932';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品</title>
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
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	
	<h3 style="margin:0 auto;width:333px;">该分类还没有添加商品</h3>
	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
