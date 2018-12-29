<?php
/* Smarty version 3.1.30, created on 2017-03-14 20:59:22
  from "D:\wamp\www\zwj\view\html\admin\attributelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7e92a7afed7_72220029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a0d53cf56ae23105effb397a10a3c202f8b5fc0' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\attributelist.html',
      1 => 1485861591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e92a7afed7_72220029 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<h1>
<span class="action-span"><a href="attributeadd.php?id=<?php echo $_smarty_tpl->tpl_vars['goodstypeid']->value['goods_type_id'];?>
">添加属性</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
  <form action="" name="searchForm">
    <img src="../../view/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <span>按商品类型显示：</span>     
    <select name="goods_type_id">
    <option value="所有商品类型">所有商品类型</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'gp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gp']->value) {
?>
             <?php if ($_smarty_tpl->tpl_vars['gp']->value['goods_type_id'] == $_smarty_tpl->tpl_vars['goodstypeid']->value['goods_type_id']) {?>
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
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
<form method="post" action="" name="listForm" >
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th style="width:120px;">
      <input type="checkbox" />
      <a href="#">编号</a><img src="../../view/images/admin/sort_desc.gif"/> 
   </th>

    <th><a href="#">属性名称</a></th>
    <th><a href="#">商品类型</a></th>
    <th><a href="#">属性值得录入方式</a></th>
    <th><a href="#">可选值列表</a></th>
    <th><a href="#">必填属性</a></th>
        <th>操作</th>
  </tr>
  <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value, 'attr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
?>
    <td align="center">
        <input type="checkbox" name="checkboxes[]"  />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['attr']->value['attr_id'];?>
" style="width:34px;border:none;" readonly="true" name="attr_id" class="attr_id"/>
    </td>

    <td align="center" class="first-cell" style="">
      <span ><?php echo $_smarty_tpl->tpl_vars['attr']->value['attr_name'];?>
</span>
    </td>
    <td align="center"><span ><?php echo $_smarty_tpl->tpl_vars['attr']->value['goods_type_name'];?>
</span></td>
    <td align="center"><span ><?php echo $_smarty_tpl->tpl_vars['attr']->value['attr_input_type'];?>
</span></td>
    <td align="center"><span ><?php echo $_smarty_tpl->tpl_vars['attr']->value['attr_values'];?>
</span></td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['attr']->value['show_in_front'] == '1') {?><span>必填</span><?php }?></td>
    <td align="center">
      <a class="operate" href="attributeedit.php?id=<?php echo $_smarty_tpl->tpl_vars['attr']->value['attr_id'];?>
" title="编辑"><img src="../../view/images/admin/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a class="operate delete" href="#"   title="移除">
        <img src="../../view/images/admin/icon_drop.gif"/>
      </a>
    </td>
  </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>

<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
      
        
          上页&nbsp;&nbsp;1</b>&lt;&lt; [1]&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=2& title='第2页'>[2]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=3& title='第3页'>[3]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=4& title='第4页'>[4]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=5& title='第5页'>[5]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=8& title='第8页'>&gt;&gt;8</a>&nbsp;<a href=admin.php?c=goods&a=goodsList&page=2&  title='下一页'>[下一页]</a>
    
    </td>
  </tr>

</table>

</div>
</form>

<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
<?php echo '<script'; ?>
>
  
    $('.delete').click(function(e){
      var id=$(this).parent('td').parent('tr')
      .find('input.attr_id').val();
      if(confirm('确定要删除该条记录吗?')){
      $.ajax({
          url:'attributedelete.php',
          type:'POST',
          async:true,
          data:{'id':id},
          success:function(data){
            if(data==1){
              history.go(0);
            } 
          }
        });
       e.preventDefault();
      }else{
        e.preventDefault();
      }
    });
    
    
  
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
