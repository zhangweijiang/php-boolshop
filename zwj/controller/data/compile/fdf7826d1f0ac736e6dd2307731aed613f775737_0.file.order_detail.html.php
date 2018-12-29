<?php
/* Smarty version 3.1.30, created on 2017-04-06 20:42:11
  from "D:\wamp\www\zwj\view\html\admin\order_detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e637a3019fd8_49584324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf7826d1f0ac736e6dd2307731aed613f775737' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\order_detail.html',
      1 => 1491482523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e637a3019fd8_49584324 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\zwj\\lib\\smarty3\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BOOLSHOP 管理中心</title>
	<?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='../../lib/ueditor/editor_config.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='../../lib/ueditor/editor_all_min.js'><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/zwj/view/css/admin/general.css">
	<link rel="stylesheet" href="/zwj/view/css/admin/main.css">
	
</head>
<body>
	
	<h1>
		
		<span class="action-span1"><a href="#">BOOLSHOP
				管理中心</a> </span>
		<div style="clear: both"></div>
	</h1>
	<div style="width:98%;background:gray;height:33px;line-height:33px;font-size:16px;font-weight:bold;">订单状态</div>
	<div style="width:95%;margin-left:20px;">
	<p>订单号：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_sn'];?>
</p>
	<p>订单总额：<span style="color:red;">&yen;<?php echo $_smarty_tpl->tpl_vars['order_info']->value['subtotal'];?>
</span></p>
	<p>订单状态：<?php if ($_smarty_tpl->tpl_vars['order_action']->value['order_status'] == 0) {?>待付款<?php } elseif ($_smarty_tpl->tpl_vars['order_action']->value['order_status'] == 1) {?>待发货<?php } elseif ($_smarty_tpl->tpl_vars['order_action']->value['order_status'] == 2) {?>待收货<?php } else { ?>交易完成<?php }?></p>
	</div>
	<div style="width:98%;background:gray;height:33px;line-height:33px;font-size:16px;font-weight:bold;">订单详情</div>
	<h3>订单信息</h3>
	<div style="width:95%;margin-left:20px;">
	<p>买家：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['customer_name'];?>
</p>
	<p>下单时间<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value,'%Y-%m-%d %H:%M:%S');?>
</p>
	</div>

	<h3>收货人及发货信息</h3>
	<div style="width:95%;margin-left:20px;">
	<p><span style="float:left;width:300px;">收货人姓名：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['reciver'];?>
</span><span style="float:right;width:300px;">所在地区：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['zone'];?>
</span></p>
	<div style="clear:both;"></div>
	<p><span style="float:left;width:300px;">邮政编码:<?php echo $_smarty_tpl->tpl_vars['order_info']->value['zipcode'];?>
</span><span style="float:right;width:300px;">电话号码：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['mobile'];?>
</span></p>
	<div style="clear:both;"></div>
	<p><span style="float:left;width:300px;">手机号码:<?php echo $_smarty_tpl->tpl_vars['order_info']->value['tel'];?>
</span><span style="float:right;width:300px;">详细地址：<?php echo $_smarty_tpl->tpl_vars['order_info']->value['address'];?>
</span></p>
	<div style="clear:both;"></div>
	<p>电子邮件:<?php echo $_smarty_tpl->tpl_vars['order_info']->value['email'];?>
</p>
	</div>
	<h3>商品信息</h3>
	<table style="width:98%;">
		<tr align="center" style="background:gray;height:30px;line-height:30px;font-weight:bold;font-size:15px;">
			<th>商品信息</th>
			<th>商品规格</th>
			<th>单价</th>
			<th>数量</th>
			<th>操作</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_goods']->value, 'og');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['og']->value) {
?>
		<tr align="center" >
			<td align="left" ><a  target="_parent" href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['og']->value['goods_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['og']->value['goods_color_img']) {?><img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['og']->value['goods_color_img'];?>
" alt="" style="width:60px;height:60px;float:left"><?php } else { ?><img src="/zwj/view/images/admin/no_picture.gif" alt="" style="width:60px;height:60px;float:left"><?php }?><span style="float:left;height:60px;line-height:60px;"></span><?php echo $_smarty_tpl->tpl_vars['og']->value['goods_name'];?>
</a></td>
			<td style="width:30%;"><?php if ($_smarty_tpl->tpl_vars['og']->value['goods_color_img']) {?>颜色:<?php echo $_smarty_tpl->tpl_vars['og']->value['goods_color_desc'];
}
if ($_smarty_tpl->tpl_vars['og']->value['attr_value']) {
echo $_smarty_tpl->tpl_vars['og']->value['attr_name'];?>
：<?php echo $_smarty_tpl->tpl_vars['og']->value['attr_value'];
}?></td>
			<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['og']->value['shop_price'];?>
</td>
			<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['og']->value['number'];?>
</td>
			<td style="width:15%;"><?php if ($_smarty_tpl->tpl_vars['og']->value['order_status'] == 3) {?><a style="color:red;" target="_parent" href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['og']->value['goods_id'];?>
">评价</a><?php }?></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<a href="/zwj/controller/admin/order.php" style="width:80px;height:33px;line-height:33px;text-align:center;color:white;background:gray;margin-top:13px;display:block;text-decoration:none;font-size:16px;font-weight:bold;">返回</a>
</body>
</html><?php }
}
