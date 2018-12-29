<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:31:30
  from "D:\wamp\www\zwj\view\html\admin\goodsnumber.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6ad422f3636_65219448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a02a8e695f10f447201cbe9cd4ac3d5b829dfd36' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodsnumber.html',
      1 => 1489415469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6ad422f3636_65219448 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>BOOLSHOP 管理中心 - 商品属性 </title>
<link rel="stylesheet" href="../../view/css/admin/general.css">
<link rel="stylesheet" href="../../view/css/admin/main.css">
<?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

  $(function(){
    $('.number').change(function(){
      var num=0;
        if(isNaN($(this).val())){
            alert('请输入正确的商品数量');
            $(this).val("0");
            $('.number').each(function(){
            if($.trim($(this).val())==""){
              num+=0;
            }else{
              num+=parseInt($(this).val());
            }
          });
        }else{
          $('.number').each(function(){
            if($.trim($(this).val())==""){
              num+=0;
            }else{
              num+=parseInt($(this).val());
            }
          });
           
          }
          $("#goods_number").val(num);
      });
  });
  
<?php echo '</script'; ?>
>
</head>
<body>
<h1>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品数量 </span>
<div style="clear:both"></div>
</h1>
<?php if ($_smarty_tpl->tpl_vars['act']->value == "add") {?>
<div class="form-div">
  <form action="/zwj/controller/admin/goodsnumber.php" name="searchForm" method="get">
    <input type="hidden" value="add" name="act">
    <img src="../../view/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <span>按商品编号显示：</span>     
    <select name="goods_id">
    <option value="0">请选择...</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsallid']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['goods_id']->value == $_smarty_tpl->tpl_vars['v']->value['goods_id']) {?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</option>
      <?php } else { ?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</option>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
<form action="/zwj/controller/admin/goodsnumberact.php?act=add" method="post">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsnumber']->value, 'gn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gn']->value) {
?>
  <p style="border:1px solid transparent;heigth:40px;line-height:40px;">
    <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name']) {?>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['attr_name'];?>
" style="float:left;margin-top:10px;margin-right:11px;" readonly name="attr_name[]">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gn']->value[0]) {?>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value[0];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="attr_value[]" readonly>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="goods_color_desc[]" readonly>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_img']) {?>
    <img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="width:40px;height:40px;float:left;margin-right:11px;">
    <input type="hidden" name="goods_color_img[]" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
">
    <?php }?>
    商品数量:<input type="text" name="number[]" style="margin-left:11px;" class="number" value="0"><br>
  </p>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name'] || $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
  <p>商品总数量：<input type="text" name="goods_number" id="goods_number" readonly value="0"><br></p>
  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
" name="goods_id">

  <tr >
    <td class="label" >上架：</td>
    <td ><input type="checkbox"
                                 name="is_on_sale" value="1"  checked="checked"/>
      打勾表示允许销售，否则不允许销售。</td>
  </tr>
  <br><br>

  <input type="submit" value="提交">
  <?php } else { ?>
  <p>该商品没有上传商品图片和必填属性</p>
  <?php }?>
  
</form>
<?php } else { ?>
  <div class="form-div">
    <form action="/zwj/controller/admin/goodsnumber.php" name="searchForm" method="get">
      <img src="../../view/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      <span>按商品编号显示：</span>     
      <select name="goods_id">
      <option value="0">请选择...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsallid']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['goods_id']->value == $_smarty_tpl->tpl_vars['v']->value['goods_id']) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</option>
        <?php } else { ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</option>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </select>
      <input type="submit" value=" 搜索 " class="button" />
    </form>
  </div>
  <form action="/zwj/controller/admin/goodsnumberact.php" method="post">
    <?php if ($_smarty_tpl->tpl_vars['goodsnumber1']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsnumber1']->value, 'gn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gn']->value) {
?>
        <p style="border:1px solid transparent;heigth:40px;line-height:40px;">
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name']) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['attr_name'];?>
" style="float:left;margin-top:10px;margin-right:11px;" readonly name="attr_name[]">
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_value']) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['attr_value'];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="attr_value[]" readonly>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="goods_color_desc[]" readonly>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_img']) {?>
          <img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="width:40px;height:40px;float:left;margin-right:11px;">
          <input type="hidden" name="goods_color_img[]" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
">
          <?php }?>
          商品数量:<input type="text" name="number[]" style="margin-left:11px;" class="number" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['number'];?>
"><br>
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_number_id'];?>
" name="goods_number_id[]">
        </p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name'] || $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
        <p>商品总数量：<input type="text" name="goods_number" id="goods_number" readonly value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"><br></p>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
" name="goods_id">

    <tr >
      <td class="label" >上架：</td>
      <td ><input type="checkbox"
                                   name="is_on_sale" value="1"  checked="checked"/>
        打勾表示允许销售，否则不允许销售。</td>
    </tr>
    <br><br>

        <input type="submit" value="提交">
        <?php } else { ?>
        <p>该商品没有上传商品图片和必填属性</p>
        <?php }?> 
      <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsnumber']->value, 'gn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gn']->value) {
?>
        <p style="border:1px solid transparent;heigth:40px;line-height:40px;">
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name']) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['attr_name'];?>
" style="float:left;margin-top:10px;margin-right:11px;" readonly name="attr_name[]">
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value[0]) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value[0];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="attr_value[]" readonly>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="float:left;margin-top:10px;margin-right:11px;" name="goods_color_desc[]" readonly>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['goods_color_img']) {?>
          <img src="/zwj/<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc'];?>
" style="width:40px;height:40px;float:left;margin-right:11px;">
          <input type="hidden" name="goods_color_img[]" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['goods_color_img'];?>
">
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gn']->value['number']) {?>
          商品数量:<input type="text" name="number[]" style="margin-left:11px;" class="number" value="<?php echo $_smarty_tpl->tpl_vars['gn']->value['number'];?>
" ><br>
          <?php } else { ?>
          商品数量:<input type="text" name="number[]" style="margin-left:11px;" class="number" value="0" ><br>
          <?php }?>
        </p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['gn']->value['attr_name'] || $_smarty_tpl->tpl_vars['gn']->value['goods_color_desc']) {?>
        <p>商品总数量：<input type="text" name="goods_number" id="goods_number" readonly value="0"><br></p>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
" name="goods_id">
        <input type="hidden" value="add" name='act'>

    <tr id="alone_sale_1">
      <td class="label" id="alone_sale_2">上架：</td>
      <td id="alone_sale_3"><input type="checkbox"
                                   name="is_on_sale" value="1" id="is_on_sale" checked="checked"/>
        打勾表示允许销售，否则不允许销售。</td>
    </tr>
    <br><br>

        <input type="submit" value="提交">
        <?php } else { ?>
        <p>该商品没有上传商品图片和必填属性</p>
        <?php }?> 
    <?php }?>

  </form>
<?php }?>
<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html><?php }
}
