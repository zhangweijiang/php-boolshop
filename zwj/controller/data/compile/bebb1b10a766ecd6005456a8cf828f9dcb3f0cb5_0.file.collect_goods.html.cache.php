<?php
/* Smarty version 3.1.30, created on 2017-04-06 15:09:54
  from "D:\wamp\www\zwj\view\html\front\collect_goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5e9c2b1b848_03128144',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'bebb1b10a766ecd6005456a8cf828f9dcb3f0cb5' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\collect_goods.html',
      1 => 1491462593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5e9c2b1b848_03128144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3141158e5e9c2a8afa6_03229324';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的收藏夹</title>
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
	<style>
		
			.trash{
				display:block;
				width:30px;
				height:30px;
				z-index:10;
				top:0;right:0;
				position:absolute;
				background-color:#787979;
				opacity:.5;
				line-height:30px;
				text-align:center;
			}
		.trash:hover{
			background: #ff4400;
			cursor:pointer;
			opacity:1;
		}
		
	</style>
	<?php echo '<script'; ?>
>
		
			$(function(){
				$('.trash').click(function(e){
					var a=confirm('确定删除');
					e.preventDefault();
					if(a==true){
						var collect_id=$(this).attr('data-id');
						$.ajax({
							url:"/zwj/controller/front/delete_collect_goods.php",
							type:'post',
							data:{'collect_id':collect_id},
							success:function(data){

								window.location.reload();
							}
						});
					}

				});
			})

		
	<?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	
	<div class="goods_all">
		<ul>
					<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'goods\']->value, \'g\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'g\']->value) {
?>/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>
" >
						<div class="trash" data-id="<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'collect_id\'];?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>
"><i class="fa fa-trash" style="font-size:18px;color:white;"></i></div>
						<img src="/zwj/<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'thumb_img\'];?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>
" alt="图片不存在" class="thumb_img" >
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span><?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>
</span>
							<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_new\'] == 1) {?>/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_best\'] == 1) {?>/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'g\']->value[\'is_hot\'] == 1) {?>/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php }?>/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

						</div>
						<div class="goods_name">
							<a href="#">
								<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

							</a>
						</div>
					</li>
					<?php echo '/*%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:3141158e5e9c2a8afa6_03229324%%*/';?>

				</ul>
	</div>
	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
