<?php
/* Smarty version 3.1.30, created on 2017-04-16 22:30:22
  from "D:\wamp\www\zwj\view\html\front\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f37ffe1f6053_39170003',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'f773f13b8d55d73d84bc98d8ffdbbc0d98b19ac5' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\index.html',
      1 => 1492353020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f37ffe1f6053_39170003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2936158f37ffe126fa1_57457412';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城首页</title>
   <!--	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"  />-->
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

	<div class="content">
		<div class="cate_info" style="position:relative;">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
				<li data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cat_name'];?>
<i class="fa fa-chevron-right" style="position:relative;left:80px;"></i></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
				
				<?php echo '/*%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/<?php if ($_SESSION[\'username\']) {?>/*/%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/';?>

				<li style="color:white">亲爱的<?php echo '/*%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/<?php echo $_SESSION[\'username\'];?>
/*/%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/';?>
欢迎回来</li>
				<?php echo '/*%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/<?php } else { ?>/*/%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/';?>

				<li class="hello" style="color:white;">Hi~你好！</li>
				<li style="border:1px solid rgb(221,139,39);width:50px;padding:3px 18px;border-radius:20px;margin-left:14px;background:rgb(221,39,39);"><a href="/zwj/controller/front/login.php"><img src="/zwj/view/images/front/登陆.png" alt="图片不存在"style="display:block;float:left;margin-top:3px;">请登录</a></li>
				<li><a href="/zwj/controller/front/register.php">免费注册></a></li>
				<?php echo '/*%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/<?php }?>/*/%%SmartyNocache:2936158f37ffe126fa1_57457412%%*/';?>

				
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsnew']->value, 'gn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gn']->value) {
?>
					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_id'];?>
">
						<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gn']->value['thumb_img'];?>
" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['gn']->value['shop_price'];?>
</span>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_name'];?>
</a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsbest']->value, 'gb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gb']->value) {
?>
					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['gb']->value['goods_id'];?>
">
						<img src="./zwj/<?php echo $_smarty_tpl->tpl_vars['gb']->value['thumb_img'];?>
" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span><?php echo $_smarty_tpl->tpl_vars['gb']->value['shop_price'];?>
</span>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['gb']->value['goods_name'];?>
</a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodshot']->value, 'gh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gh']->value) {
?>
					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['gh']->value['goods_id'];?>
">
						<img src="./zwj/<?php echo $_smarty_tpl->tpl_vars['gh']->value['thumb_img'];?>
" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span><?php echo $_smarty_tpl->tpl_vars['gh']->value['shop_price'];?>
</span>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
						</div>
						<div class="goods_name">
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['gh']->value['goods_name'];?>
</a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
		</div>
	</div>
	<div class="goods_all">
		<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
					<li><a href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
">
						<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['g']->value['thumb_img'];?>
" alt="图片不存在" class="thumb_img">
						</a>
						<div class="shop_price">
							<img src="/zwj/view/images/front/钱.png" alt="图片不存在">
							<span><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['g']->value['is_new'] == 1) {?>
							<img src="/zwj/view/images/front/new.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php } elseif ($_smarty_tpl->tpl_vars['g']->value['is_best'] == 1) {?>
							<img src="/zwj/view/images/front/best.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php } elseif ($_smarty_tpl->tpl_vars['g']->value['is_hot'] == 1) {?>
							<img src="/zwj/view/images/front/hot.png" alt="图片不存在" style="float:right;margin-top:2px;">
							<?php }?>
						</div>
						<div class="goods_name">
							<a href="#">
								<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>

							</a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
	</div>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</body>
</html><?php }
}
