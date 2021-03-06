<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:56:19
  from "D:\wamp\www\zwj\view\html\admin\goodsedit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6b31364b8d5_13608471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd987290dd29ece5e598d679220e82b69ff4cf35a' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodsedit.html',
      1 => 1489416977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6b31364b8d5_13608471 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_str_repeat')) require_once 'D:\\wamp\\www\\zwj\\lib\\smarty3\\libs\\plugins\\modifier.str_repeat.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BOOLSHOP 管理中心 - 编辑商品信息</title>
	<?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='../../lib/ueditor/editor_config.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='../../lib/ueditor/editor_all_min.js'><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="../../view/css/admin/general.css">
	<link rel="stylesheet" href="../../view/css/admin/main.css">
		<style>

span.goods_gallery_inc:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}
span.goods_gallery_dec:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}
span.goods_gallery_show:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}

span.goods_color_inc:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}
span.goods_color_dec:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}
span.goods_color_show:hover{
  cursor:pointer;
  color:rgb(251,112,45);
}

	</style>
	<?php echo '<script'; ?>
 type="text/javascript">
	
	$(function(){
		var goods_number2=$('.goods_number').val();
		var goods_color1=$('#goods_color_table').html();
		var attr_values1;
		$('#is_on_sale').click(function(){
			if($(this).is(':checked')){
				alert('您最好添加商品后发布商品数量再上架');
			}
		});
			$('.label a').click(function(e){
				var notice=$(this).parent('td').next('td').find('span');
				if(notice.css('display')=='none'){
					notice.css('display','block');
				}else{
					notice.css('display','none');
				}
				e.preventDefault();
			});
			var edit = new UE.ui.Editor({initialContent:'',initialFrameWidth:750});
			edit.render("goods_desc");

			$('.tab-back').click(function(){
			var index=$(this).index();
			/*注意：以为百度编辑器也是一个table,所以为了区分要在三个table
			(通用信息，详细描述，其他信息)上加上类名为a,否则得到的index(不是你想要的索引，不能实现你想要的效果*/
			$('table.a').eq(index).show().siblings('table.a').hide();
			$(this).css('background','#BBDDE5').siblings().css('background','none');
			});
			$('.promote_price').click(function(){
				if(this.checked){
				$(this).parent().next('td').find(':text').prop('disabled',false);
				$('.promote_time').find('input').prop('disabled',false);
				}else{
				$(this).parent().next('td').find(':text').prop('disabled',true);
				$('.promote_time').find('input').prop('disabled',true);
				}
			});
			$('.goods_type').change(function(){
				$(this).parent().parent().show().siblings('tr:not("first")').remove();

				$.ajax({
					url:'attribute_goodsattr_Act.php',
					type:'POST',
					dataType:'json',
					async:true,
					data:{'goods_type_id':$(this).val(),
					"goods_id":$('.goods_id').val()},
					success:function(data){
						for(var i=0;i<data.length;i++){
							if(data[i].attr_input_type==0){
								if(data[i].show_in_front==1){
							$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text"  style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><input type="text" name="attr_value[]" value="'+data[i].attr_value+'" class="attr_values"/><span>&nbsp;&nbsp;必填属性，属性值用英文分号分隔</span><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								}else{
									$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text"  style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><input type="text" name="attr_value[]" value="'+data[i].attr_value+'"/><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								}
							}else if(data[i].attr_input_type==1){
								if(data[i].show_in_front==1){
								/*注意要用split('\r\n'),用split('\n')会错，不能实现想要的效果*/
								var attr=data[i].attr_values.split("\r\n");
								$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text" style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><select name="attr_value[]" class="attr_values"><option value="0">请选择...</option></select><span>&nbsp;&nbsp;必填属性，属性值用英文分号分隔</span><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								for(var j=0;j<attr.length;j++){
									if(data[i].attr_value==attr[j]){
								$('.attr_values:last').append('<option selected="selected">'+attr[j]+'</option>');
									}else{
										$('.attr_values:last').append('<option>'+attr[j]+'</option>');
									}
								}
							   }else{
							   	/*注意要用split('\r\n'),用split('\n')会错，不能实现想要的效果*/
								var attr=data[i].attr_values.split("\r\n");
								$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text" style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><select name="attr_value[]" class="attr_values"><option value="0">请选择...</option></select><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								for(var j=0;j<attr.length;j++){
									if(data[i].attr_value==attr[j]){
								$('.attr_values:last').append('<option selected="selected">'+attr[j]+'</option>');
									}else{
										$('.attr_values:last').append('<option>'+attr[j]+'</option>');
									}
								}
							   }

							}else{
								if(data[i].show_in_front==1){
								$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text" style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><textarea name="attr_value[]" rows="4" cols="33">'+data[i].attr_value+'</textarea><span>&nbsp;&nbsp;必填属性，属性值用英文分号分隔</span><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								}else{
									$('#attribute').append('<tr><td class="label"><input type="hidden"  style="width:13px;" readonly="true" name="attr_id[]" value="'+data[i].attr_id+'"><input type="text" style="text-align:right;outline:none;border:0px;" readonly="true" name="attr_name[]" value="'+data[i].attr_name+'"></td><td><textarea name="attr_value[]" rows="4" cols="33">'+data[i].attr_value+'</textarea><input type="hidden" name="goods_attr_id[]" value="'+data[i].goods_attr_id+'"/><td></tr>');
								}
							}
						}
						attr_values1=$('.attr_values').val();
				
					}
				});
			});
		$('.ori_img').change(function(){
			$(this).next().attr('src','../../view/images/admin/yes.gif');
		});
		$('.goods_type').trigger('change');

		//商品相册的增减
		$('span.goods_gallery_inc').on('click',function(){
			$(this).parent().parent().parent().append('<tr><td align="center"><span class="goods_gallery_dec">[-]&nbsp;</span>图片描述&nbsp;<input type="text" name="goods_gallery_desc[]">&nbsp;上传文件&nbsp;<input type="file" name="goods_gallery_img[]"></td></tr>');
		});
	
		$('body').on("click","span.goods_gallery_dec",function(){
			$(this).parent().parent().remove();
		});
		var hide_arr=new Array();
		$('span.goods_gallery_show').click(function(){
			if(confirm('您确实要删除该图片吗？')){
				$(this).parent().find('input:text').prop('disabled',true);
				$(this).parent().hide();
				hide_arr.push($(this).parent().find('input.hidden').val());
			}
		});
		$('.reset').click(function(){
			$('span.goods_gallery_show').each(function(){
				$(this).parent().find('input:text').prop('disabled',false);
				$(this).parent().show();
				hide_arr=new Array();			
			});
		});
		
		$('.submit').click(function(e){
			var goods_color2=$('#goods_color_table').get(0).innerHTML;
			var goods_number1=$('.goods_number').val();
			var attr_values2=$('.attr_values').val();
			if(goods_color1==goods_color2&&attr_values1==attr_values2){
				if($.trim($('#goods_color_desc1').val())!=""){
					//删除goods_numberd对应的goods_id
					$.ajax({
						url:'goodsnumberdelete.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'goods_id':$('.goods_id').val()},
						success:function(data){
							$('.goods_number').val("0");
							//alert(data);
						}
					});
				}else if(goods_number2!=goods_number1){
						//删除goods_numberd对应的goods_id
					$.ajax({
						url:'goodsnumberdelete.php',
						type:'POST',
						dataType:'text',
						async:false,
						data:{'goods_id':$('.goods_id').val()},
						success:function(data){
							$('.goods_number').val(goods_number1);
							//alert(data);
						}
					});
				}
			}else{
				
				//删除goods_numberd对应的goods_id
				$.ajax({
					url:'goodsnumberdelete.php',
					type:'POST',
					dataType:'text',
					async:false,
					data:{'goods_id':$('.goods_id').val()},
					success:function(data){
						$('.goods_number').val("0");
						//alert(data);
					}
				});
			}
			//商品颜色有图片描述就不可以为空
				$('.goods_color_img').each(function(){
					if($.trim($(this).val())!=""){
						if($.trim($(this).prev().val())==""){
						alert('请在商品图片上填写相应的商品颜色描述');
						e.preventDefault();
						}
					}
				});
				//商品颜色有描述商品图片就不可以为空
				$('.goods_color_desc').each(function(){
					if($.trim($(this).val())!=""){
						if($.trim($(this).next().val())==""){
						alert('请在商品颜色描述上上传相应的商品图片');
						e.preventDefault();
						}
					}
				});
				$('.goods_color_desc_edit').each(function(){
					if($.trim($(this).val())==""){
						alert('请在商品颜色描述上上传相应的商品图片');
						e.preventDefault();
					}
				});

			var reg=/^.+$/;
                var goods_name=$.trim($('#goods_name').val());
                var ori_img=$.trim($('.ori_img').val());
			var shop_price=$.trim($('#shop_price1').val());
			var market_price=$.trim($('#market_price1').val());
               if(!reg.test(goods_name)){
               		e.preventDefault();
					alert('-商品名称不能为空');
				}else if($('.cat_id').val()==0){
					e.preventDefault();
					alert('-商品分类必须选择');
				}else if(shop_price==''){
				   e.preventDefault();
				   alert('本店价不能为空');
			   }else if(market_price==''){
				   e.preventDefault();
				   alert('市场价不能为空');
			   }else if(isNaN(shop_price)){
				   e.preventDefault();
				   alert('本店价必须为数字');
			   }else if(isNaN(market_price)){
				   e.preventDefault();
				   alert('市场价必须为数字');
			   }else if(parseInt(market_price)<=0){
				   e.preventDefault();
				   alert('市场价不能小于0');
			   }else if(parseInt(shop_price)<=0){
				   e.preventDefault();
				   alert('本店价不能小于0');
			   }else{
			//提交时删除商品相册事件
			$.ajax({
					url:'goodsgallerydelete.php',
					type:'POST',
					dataType:'text',
					async:false,
					data:{'goods_gallery_id':hide_arr},
					success:function(data){
						//alert(data);
					}
				});

			//提交时删除商品种类
			$.ajax({
					url:'goodscolordelete.php',
					type:'POST',
					dataType:'text',
					async:false,
					data:{'goods_color_id':color_hide_arr},
					success:function(data){
						//alert(data);
					}
				});
			}
		});


		//商品颜色的增减
		$('span.goods_color_inc').on('click',function(){
			$(this).parent().parent().parent().append('<tr><td align="center"><span class="goods_color_dec">[-]&nbsp;</span>图片描述&nbsp;<input type="text" name="goods_color_desc[]" class="goods_color_desc">&nbsp;上传文件&nbsp;<input type="file" name="goods_color_img[]" class="goods_color_img"></td></tr>');
		});
	
		$('body').on("click","span.goods_color_dec",function(){
			$(this).parent().parent().remove();
		});
		var color_hide_arr=new Array();
		$('span.goods_color_show').click(function(){
			if(confirm('您确实要删除该图片吗？')){
				$(this).parent().find('input:text').prop('disabled',true);
				$(this).parent().hide();
				color_hide_arr.push($(this).parent().find('input.hidden').val());
			}
		});
		$('.reset').click(function(){
			$('span.goods_color_show').each(function(){
				$(this).parent().find('input:text').prop('disabled',false);
				$(this).parent().show();
				color_hide_arr=new Array();			
			});
		});
		

	});

<?php echo '</script'; ?>
>
</head>
<body>
	<h1>
		<span class="action-span"><a href="goodslist.php">商品列表</a></span>
		<span class="action-span1"><a href="index.php?act=main">BOOLSHOP
				管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑商品信息 </span>
		<div style="clear: both"></div>
	</h1>

	<!-- start goods form -->
	<div class="tab-div">
		<!-- tab bar -->
		<div id="tabbar-div">
			<p>
			<span class="tab-back" style="background:#BBDDE5">
					通用信息</span> 
					<span class="tab-back" >详细描述</span>
					 <span class="tab-back" >其他信息</span>
					 <span class="tab-back" >商品属性</span>
					<span class="tab-back" >商品相册</span>
					<span class="tab-back" >商品颜色</span>
			</p>
		</div>

		<!-- tab body -->
		<div id="tabbody-div">
			<form enctype="multipart/form-data" action="goodseditAct.php"
				method="post" name="theForm">
				<!-- 通用信息 -->
				<table width="90%"  align="center" class='a'>
					<tr>
						<td class="label">商品名称：</td>
						<td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
"
							style="float: left; color:;" size="30"  id="goods_name"/></td>
					</tr>
					<tr>
						<td class="label"><a href="#" title="点击此处查看提示信息"><img
								src="../../view/images/admin/notice.gif" width="16" height="16"
								border="0" alt="点击此处查看提示信息"></a> 商品货号：</td>
						<td>
							<input type="text" name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" size="20" /> 
							<span class="notice-span"
							style="display: block" id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号
							</span>
						</td>
					</tr>
					<tr>
						<td class="label">商品分类：</td>
						<td><select name="cat_id">
								<option value="0">请选择...</option>
								 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
								 <?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id'] == $_smarty_tpl->tpl_vars['goods']->value['cat_id']) {?>
								 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" selected="selected">
								 	<?php echo smarty_modifier_str_repeat($_smarty_tpl->tpl_vars['v']->value['lev'],"&nbsp;&nbsp;");?>

								 	<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>

								 </option>
								 <?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
">
									<?php echo smarty_modifier_str_repeat($_smarty_tpl->tpl_vars['v']->value['lev'],"&nbsp;&nbsp;");?>

									<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>

								</option>
								<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
						</select></td>
					</tr>
					<tr>
						<td class="label">商品品牌：</td>
						<td><select name="brand_id">
								<option value="0">请选择...</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['b']->value['brand_id'] == $_smarty_tpl->tpl_vars['goods']->value['brand_id']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_id'];?>
" selected="selected">
										<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_name'];?>

									</option>
									<?php } else { ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_id'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_name'];?>

									</option>
									<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							
						</select></td>
					</tr>
					<tr>
						<td class="label">选择供货商：</td>
						<td><select name="provider_name">
								<option value="0">不指定供货商属于本店商品
								</option>
								<?php if ($_smarty_tpl->tpl_vars['goods']->value['provider_name'] == "北京供货商") {?>
								<option value="北京供货商" selected="selected">北京供货商</option>
								<option value="上海供货商" >上海供货商</option>
								<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['provider_name'] == "上海供货商") {?>
								<option value="北京供货商" >北京供货商</option>
								<option value="上海供货商" selected="selected">上海供货商</option>
								<?php } else { ?>
								<option value="北京供货商" >北京供货商</option>
								<option value="上海供货商">上海供货商</option>
								<?php }?>
						</select></td>
					</tr>
					<tr>
						<td class="label"><input type="checkbox" class="promote_price" name="promote_checked">促销价：</td>
						<td><input type="text" name="promote_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_price'];?>
"
							style="float: left; color:;" size="30" disabled="disabled"/>
						</td>
					</tr>
					<tr>
						<td class="label">促销日期：</td>
						<td class="promote_time">
							<input type="date" name="promote_start_date" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
"  size="30" disabled="disabled"/>
							--
							<input type="date" name="promote_end_date" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
"  size="30" disabled="disabled"/>
						</td>
					</tr>
					<tr>
						<td class="label">本店售价：</td>
						<td><input type="text" id="shop_price1" name="shop_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
" size="20" /></td>
					</tr>
					<tr>
						<td class="label">市场售价：</td>
						<td><input type="text" id="market_price1" name="market_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
"
							size="20" /></td>
					</tr>

					<tr>
						<td class="label">上传商品图片：</td>
						<td><input type="file" name="ori_img" size="35" class="ori_img" />
						<?php if ($_smarty_tpl->tpl_vars['goods']->value['ori_img'] == '') {?>
						<img src="../../view/images/admin/no.gif" alt="图片不存在">
						<?php } else { ?>
						<img src="../../view/images/admin/yes.gif" alt="图片不存在">
						<?php }?>
						</td>
					</tr>
				</table>

				<!-- 详细描述 -->
				<table width="90%"  style="display: none" class='a'>
					<tr>
						<td><textarea id="goods_desc" name="goods_desc">
							<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>

						</textarea>
					</td>
					</tr>
				</table>

				<!-- 其他信息 -->
				<table width="90%" style="display: none"
					align="center" class='a'>
					<tr>
						<td class="label">商品重量：</td>
						<td><input type="text" name="goods_weight" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_weight'];?>
" size="20" />
							<select name="weight_unit"><option value="1" selected>千克</option>
								<option value="0.001">克</option></select></td>
					</tr>
					<tr>
						<td class="label"><a href="#" title="点击此处查看提示信息"><img
								src="../../view/images/admin/notice.gif" width="16" height="16"
								border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>

						<td><input type="text" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_number'];?>
"
							size="20" class="goods_number"/>
							<span class="notice-span"
								style="display: block" id="noticeGoodsSN">库存在商品为虚货或商品存在货品时为不可编辑状态，库存数值取决于其虚货数量或货品数量
							</span>
						</td>
					</tr>
					<tr>
						<td class="label">库存警告数量：</td>
						<td><input type="text" name="warn_number" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['warn_number'];?>
"
							size="20" /></td>
					</tr>
					<tr>
						<td class="label">加入推荐：</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_best'] == 1) {?>
							<input type="checkbox" name="is_best" value="1" checked="checked"/>
							<?php } else { ?>
							<input type="checkbox" name="is_best" value="1" />
							<?php }?>
							精品 
							<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_new'] == 1) {?>
							<input type="checkbox" name="is_new" value="1" checked="checked"/>
							<?php } else { ?>
							<input type="checkbox" name="is_new" value="1" />
							<?php }?>
							新品 
							<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_hot'] == 1) {?>
							<input type="checkbox" name="is_hot" value="1" checked="checked"/>
							<?php } else { ?>
							<input type="checkbox" name="is_hot" value="1" />
							<?php }?>
							热销</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_on_sale'] == 1) {?>
					<tr id="alone_sale_1">
						<td class="label" id="alone_sale_2">上架：</td>
						<td id="alone_sale_3"><input type="checkbox"
							name="is_on_sale" value="1" checked="checked" />
							打勾表示允许销售，否则不允许销售。</td>
					</tr>
					<?php } else { ?>
						<tr id="alone_sale_1">
						<td class="label" id="alone_sale_2">上架：</td>
						<td id="alone_sale_3"><input type="checkbox"
							name="is_on_sale" value="1" id="is_on_sale"/>
							打勾表示允许销售，否则不允许销售。</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_alone_sale'] == 1) {?>
					<tr>
						<td class="label">能作为普通商品销售：</td>
						<td><input type="checkbox" name="is_alone_sale" value="1"
							size="20" checked="checked"/>
							<span> 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。</span>
						</td>
					</tr>
					<?php } else { ?>
					<tr>
						<td class="label">能作为普通商品销售：</td>
						<td><input type="checkbox" name="is_alone_sale" value="1"
							size="20" />
							<span> 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。</span>
						</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['goods']->value['is_shipping'] == 1) {?>
					<tr>
						<td class="label">是否为免运费商品：</td>
						<td><input type="checkbox" name="is_shipping" value="1"
							size="20" checked="checked"/>
							<span> 打勾表示此商品不会产生运费花销，否则按照正常运费计算。</span>
						</td>
					</tr>
					<?php } else { ?>
					<tr>
						<td class="label">是否为免运费商品：</td>
						<td><input type="checkbox" name="is_shipping" value="1"
							size="20" />
							<span> 打勾表示此商品不会产生运费花销，否则按照正常运费计算。</span>
						</td>
					</tr>
					<?php }?>
					<tr>
						<td class="label">商品关键词：</td>
						<td><input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['keywords'];?>
" size="40" />
							用空格分隔</td>
					</tr>
					<tr>
						<td class="label">商品简单描述：</td>
						<td><textarea name="goods_brief" cols="40" rows="3"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_brief'];?>
</textarea>
						</td>
					</tr>
					<tr>
						<td class="label"><a href="#" title="点击此处查看提示信息"><img
								src="../../view/images/admin/notice.gif" width="16" height="16"
								border="0" alt="点击此处查看提示信息"></a>
							商家备注：</td>
						<td><textarea name="seller_note" cols="40" rows="3"><?php echo $_smarty_tpl->tpl_vars['goods']->value['seller_note'];?>
</textarea><br />
							<span class="notice-span" style="display: block"
							id="noticeSellerNote">仅供商家自己看的信息</span></td>
					</tr>
				</table>
			<table width="90%" id="attribute" align="center" style="display: none" class='a'>
					<tr>
						<td class="label"><a href="#" title="点击此处查看提示信息"><img
								src="../../view/images/admin/notice.gif" width="16" height="16"
								border="0" alt="点击此处查看提示信息"></a> 商品类型：</td>
						<td>
							<select name="goods_type_id" class="goods_type">
								<option value="0">请选择商品类型</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'gp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gp']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['gp']->value['goods_type_id'] == $_smarty_tpl->tpl_vars['goods']->value['goods_type_id']) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_id'];?>
" selected="selected">
									<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_name'];?>

								</option>
								<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_id'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_name'];?>

								</option>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select>
							<span class="notice-span"
							style="display: block" id="noticeGoodsSN">请选择商品的所属类型，进而完善此商品的属性
							</span>
						</td>
					</tr>
			</table>
			<!-- 商品相册-->
				<table width="90%"  style="display: none" class='a'>
					
					<tr>
						<td >
							<div style="width:600px;overflow:hidden;position:relative;left:230px;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_gallery']->value, 'gg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gg']->value) {
?>
							<div style="width:76px;height:106px;float:left;overflow:hidden;margin-right:7px;border:1px solid gray;margin-top:7px;">
							<span class="goods_gallery_show" style="padding:2px;disoplay:block;margin-left:25px;">
								[&nbsp;-&nbsp;]
							</span>
							<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gg']->value['goods_gallery_thumb_img'];?>
" alt="" style="display:block;width:71px;height:71px;">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gg']->value['goods_gallery_desc'];?>
" style="display:block;width:71px;outline:0;margin-left:1px;border:1.5px solid rgb(218,218,218);" name="goods_gallery_desc_edit[]">
							<input type="hidden" name="goods_gallery_id[]" value="<?php echo $_smarty_tpl->tpl_vars['gg']->value['goods_gallery_id'];?>
" class='hidden'>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</div>
							
						</td>
					</tr>
					
					<tr>
						<td align="center">
							<span class="goods_gallery_inc">[+]&nbsp;</span>图片描述&nbsp;<input type="text" name="goods_gallery_desc[]">
							上传文件&nbsp;<input type="file" name="goods_gallery_img[]">
						</td>
					</tr>
				</table>

				<!-- 商品颜色-->
				<table width="90%"  style="display: none" class='a goods_color' id="goods_color_table">
					
					<tr>
						<td >
							<div style="width:600px;overflow:hidden;position:relative;left:230px;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_color']->value, 'gk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gk']->value) {
?>
							<div style="width:76px;height:106px;float:left;overflow:hidden;margin-right:7px;border:1px solid gray;margin-top:7px;">
							<span class="goods_color_show" style="padding:2px;disoplay:block;margin-left:25px;">
								[&nbsp;-&nbsp;]
							</span>
							<img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gk']->value['goods_color_thumb_img'];?>
" alt="123" style="display:block;width:71px;height:71px;">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gk']->value['goods_color_desc'];?>
" style="display:block;width:71px;outline:0;margin-left:1px;border:1.5px solid rgb(218,218,218);" name="goods_color_desc_edit[]" class="goods_color_desc_edit">
							<input type="hidden" name="goods_color_id[]" value="<?php echo $_smarty_tpl->tpl_vars['gk']->value['goods_color_id'];?>
" class='hidden'>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</div>
							
						</td>
					</tr>
					
					<tr>
						<td align="center">
							<span class="goods_color_inc">[+]&nbsp;</span>图片描述&nbsp;<input type="text" name="goods_color_desc[]" class="goods_color_desc" id="goods_color_desc1">
							上传文件&nbsp;<input type="file" name="goods_color_img[]" class="goods_color_img">
						</td>
					</tr>
				</table>

				<div class="button-div">
					<input type="hidden" class="goods_id" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
" />
					<input type="submit" value=" 确定 " class="submit" /> 
					<input type="reset" value=" 重置 " class="reset" />
				</div>
				<input type="hidden" name="act" value="insert" />
			</form>
		</div>
	</div>
</body>
</html><?php }
}
