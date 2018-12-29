<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:24:06
  from "D:\wamp\www\zwj\view\html\admin\goodstypelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6ab86dcf407_83582862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad64a7fcf4868b09c962e3655554368a3836819' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodstypelist.html',
      1 => 1474705165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6ab86dcf407_83582862 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>BOOLSHOP 管理中心 - 商品类型列表 </title>
<link rel="stylesheet" href="../../view/css/admin/general.css">
<link rel="stylesheet" href="../../view/css/admin/main.css">
<?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
</head>
<body>

<h1>
<span class="action-span"><a href="goodstypeadd.php">新建商品类型</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品类型 </span>
<div style="clear:both"></div>
</h1>


<form method="post" action="" name="listForm" >

  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th width="33">
      <input type="checkbox" />
      <a href="#">编号</a><img src="../../view/images/admin/sort_desc.gif"/> 
   </th>

    <th><a href="#">商品类型名称</a></th>
    <th><a href="#">属性分组</a></th>
    <th><a href="#">属性数</a></th>
    <th><a href="#">状态</a></th>
        <th>操作</th>
  </tr>
  <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
    <td>
        <input type="checkbox" name="checkboxes[]" value="32" /><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_type_id'];?>
</td>

    <td align="center" class="first-cell" style="">
      <span ><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_type_name'];?>
</span>
    </td>
    <td align="center"><span ><?php echo $_smarty_tpl->tpl_vars['g']->value['attr_group'];?>
</span></td>
    <td align="center"><span ><?php echo $_smarty_tpl->tpl_vars['g']->value['attr_count'];?>
</span></td>
    <td align="center"><img src="../../view/images/admin/yes.gif"  /></td>
        <td align="center">
      <a class="operate" href="attributelist.php?goods_type_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_type_id'];?>
" title="属性列表">属性列表</a>
      <span>|</span>
      <a class="operate" href="goodstypeedit.php?goods_type_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_type_id'];?>
" title="编辑">编辑</a>
      <span>|</span>
      <a class="operate delete" href="goodstypedelete.php?goods_type_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_type_id'];?>
"  title="移除">移除</a>
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
      if(confirm('确定要删除该条记录吗?')){

      }else{
        e.preventDefault();
      }
    });
    
    
  
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
