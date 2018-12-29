<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:25:28
  from "D:\wamp\www\zwj\view\html\front\search_goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e6f898780280_20770833',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '84d9c2b2833bd84f18e16ab8d57a0328f15d232c' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\search_goods.html',
      1 => 1491531927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6f898780280_20770833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1959858e6f89870af68_45884839';
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

	
	<div class="goods_all">
		<ul>
					<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'goods\']->value, \'g\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'g\']->value) {
?>/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>
">
						<img src="/zwj/<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'thumb_img\'];?>
/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>
" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span><?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>
</span>
							<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_new\'] == 1) {?>/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_best\'] == 1) {?>/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_hot\'] == 1) {?>/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php }?>/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

						</div>
						<div class="goods_name">
							<a href="#">
								<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

							</a>
						</div>
					</li>
					<?php echo '/*%%SmartyNocache:1959858e6f89870af68_45884839%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:1959858e6f89870af68_45884839%%*/';?>

				</ul>
	</div>
	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
