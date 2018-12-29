<?php
/* Smarty version 3.1.30, created on 2017-04-18 03:15:45
  from "D:\wamp\www\zwj\view\html\front\tijiaoorder.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f51461502a97_82236978',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '2c6d510eac8d03cdad8875b88227184405eb28d9' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\tijiaoorder.html',
      1 => 1492343993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f51461502a97_82236978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3177158f514614627f7_94011845';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boolshop-提交订单</title>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/city.js"><?php echo '</script'; ?>
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

	
	<form action="/zwj/controller/front/order.php" method="post" class="form3">
	 <div class="flowBox" style="width:1020px;">
	<h6><span>收货人信息</span></h6>
	<table width="100%" cellspacing="1" cellpadding="5" border="1" bgcolor="#dddddd" align="center" style="border:1px solid #808080;">
    
  <tbody><tr>
    <td bgcolor="#ffffff">
		所在地区：
	</td>
    <td bgcolor="#ffffff" colspan="3">
		<select id="province" style="width:100px;" name="province">
			<option value="0">省份（市）</option>
		</select>
		<select id="city" style="width:100px;" name="city">
			<option value="0">市（区）</option>
		</select>
		<select id="county" style="width:100px;" name="country">
			<option value="0">县、镇</option>
		</select>
    </td>
  </tr>
    <tr>
    <td bgcolor="#ffffff">收货人姓名:</td>
    <td bgcolor="#ffffff"><input type="text" value="" id="consignee_0" class="reciver1" name="reciver" required>
    (必填) </td>
    <td bgcolor="#ffffff">电子邮件地址:</td>
    <td bgcolor="#ffffff"><input type="email" value="" id="email_0" class="email1" name="email" >
    </td>
  </tr>
    
  <tr>
    <td bgcolor="#ffffff">详细地址:</td>
    <td bgcolor="#ffffff"><input type="text" value="" id="address_0" class="address1" name="address" required >
    (必填)</td>
    <td bgcolor="#ffffff">邮政编码:</td>
    <td bgcolor="#ffffff"><input type="text" value="" id="zipcode_0" class="zipcode1" name="zipcode" pattern="^\d{6}$"></td>
  </tr>
    <tr>
    <td bgcolor="#ffffff">手机号码:</td>
    <td bgcolor="#ffffff"><input type="text" value="" id="tel_0" class="tel1" name="tel" pattern="^1[34578]\d{9}$"  required>
    (必填)</td>
    <td bgcolor="#ffffff">电话号码:</td>
    <td bgcolor="#ffffff"><input type="text" value="" id="mobile_0" class="mobile1" name="mobile" pattern="^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$" ></td>
  </tr>
</tbody></table>
</div> 
	<div class="clear"></div>
	<div class="content" style="width:1020px;border:1px solid #808080;">
		<div style="width:1020px;background:#7a7f89;height:30px;line-height:30px;"><span style="float:left;width:86px;color:white;margin-left:13px;font-weight:bold;font-size:13px;">商品列表</span><a href="/zwj/controller/front/shopping_cart.php" style="float:right;width:45px;color:black;">修改</a></div>
		<table border="1" cellspacing="0" style="width:1000px;border:1px solid #808080;margin:13px auto;">
			<tr>
				<th align="center" style="width:20%;">商品名称</th>
				<th align="center" style="width:20%;">属性</th>
				<th align="center" style="width:15%;">价格</th>
				<th align="center" style="width:15%;">购买数量</th>
				<th align="center" style="width:15%;">小计</th>
			</tr>
			<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'gouwuche\']->value, \'g\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'g\']->value) {
?>/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>

			<tr>
				<td align="center"><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
"  name="goods_id[]" class="g_goods_id"><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
</td>
				<td align="center"><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_desc\']) {?>/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
<div>颜色：<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_desc\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
</div><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php }?>/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>

					<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php if ($_smarty_tpl->tpl_vars[\'g\']->value[\'attr_name\']) {?>/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
<div><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_name\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
:<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_value\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
</div><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php }?>/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
 <input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_desc\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="goods_color_desc[]"><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'goods_color_img\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="goods_color_img[]"><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_name\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="attr_name[]"><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'attr_value\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="attr_value[]"></td>
				<td align="center" >&yen;<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
元<input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="shop_price[]"></td>
				<td align="center"><span><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'number\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
</span><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'gouwuche_id\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="gouwuche_id[]"><input type="hidden" value="<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value[\'number\'];?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
" name="number[]"></td>
				<td align="center">&yen;<span class="xiaoji"><?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars[\'g\']->value[\'number\']*$_smarty_tpl->tpl_vars[\'g\']->value[\'shop_price\']));?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>
</span>元</td>
				
			</tr>
			<?php echo '/*%%SmartyNocache:3177158f514614627f7_94011845%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:3177158f514614627f7_94011845%%*/';?>

		</table>
		<div style="margin-left:13px;">购物金额总计&yen;<span class="zongji">0.00</span>元</div>
	</div>
	<input type="hidden" class="input_zongji" value="0.00" name='subtotal'>
	<input type="hidden" value="tijiao" name="act">
	<input type="submit" value="提交订单" style="width:120px;height:33px;line-height:33px;text-align:center;color:white;font-family:'Arial';font-size:18px;background:#8b0221;outline:0;border:0;border:1px solid #8b0211;border-radius:4px;margin:0 auto;display:block;">
</form>
	
	
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<!-- jQuery Validation plugin javascript -->

	<?php echo '<script'; ?>
>
	
	var zongji=0.00;
		$('span.xiaoji').each(function(){
			zongji=zongji+parseFloat($(this).html());
		});
		$('span.zongji').html(zongji.toFixed(2));
		$('.input_zongji').val(zongji.toFixed(2));
		$('.form3').submit(function(e){
			var reciver= $.trim($('.reciver1').val());
			var tel= $.trim($('.tel1').val());
			var address= $.trim($('.address1').val());
			if($('span.zongji').html()=="0.00") {
				alert('没有商品不能提交订单');
				e.preventDefault();
			}else if(reciver==''){
				alert('收货人姓名不能为空')
				e.preventDefault();
			}else if(address==''){
				alert('详细地址不能为空')
				e.preventDefault();
			}else if(tel==''){
				alert('手机号码不能为空')
				e.preventDefault();
			}

		});
	//后退监听事件
	history.pushState('','','');
	window.onpopstate = function(event) {

		event.preventDefault();
		history.pushState('','','');

	};


	
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		var cityAll=city.citylist;
		$.each(cityAll,function(i,n){
			$("#province").append('<option value="'+ n.p + '">' + n.p + '</option>');
		});
		$("#province,#city").change(function(){
			if($(this).attr("id") == "province"){
				$("#city").html("").append('<option value="0">市（区）</option>').next().html("").append('<option value="0">县、镇</option>');
			}else{
				$("#county").html("").append('<option value="0">县、镇</option>');
			}
			$.each(cityAll,function(j,k){
				if($("#province").val() == k.p){
					$.each(k.c,function(l,m){
						$("#city").append('<option value="'+ m.n + '">' + m.n + '</option>');
						if(m.a){
							$("#county").show();
							if($("#city").val() == m.n){
								$.each(m.a,function(e,f){
									$("#county").append('<option value="'+ f.s + '">' + f.s + '</option>');
								});
							}
						}else{
							$("#county").hide();

						}
					});
				}
			});
		});

	<?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
