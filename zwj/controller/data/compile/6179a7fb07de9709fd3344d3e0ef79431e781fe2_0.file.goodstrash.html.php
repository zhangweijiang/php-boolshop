<?php
/* Smarty version 3.1.30, created on 2017-03-14 20:59:54
  from "D:\wamp\www\zwj\view\html\admin\goodstrash.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7e94a7de242_00406513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6179a7fb07de9709fd3344d3e0ef79431e781fe2' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodstrash.html',
      1 => 1485586588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e94a7de242_00406513 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>BOOLSHOP 管理中心 - 商品回收站 </title>
<link rel="stylesheet" href="../../view/css/admin/general.css">
<link rel="stylesheet" href="../../view/css/admin/main.css">
<?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
</head>
<body>
<h1>
<span class="action-span"><a href="goodslist.php">商品列表</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品回收站 </span>
<div style="clear:both"></div>
</h1>
<div class="form-div">

  <form action="/zwj/controller/admin/keywordsSearch.php" name="searchForm" method="post">
    <img src="../../view/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      
    关键字 <input type="text" name="keywords" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
<form method="post" action="" name="listForm" >

  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="#">编号</a><img src="../../view/images/admin/sort_desc.gif"/>    </th>
    <th><a href="#">商品名称</a></th>
    <th><a href="#">货号</a></th>
    <th><a href="#">价格</a></th>
        <th>操作</th>
  <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodslist']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
      <tr>
    <td><input type="checkbox" name="checkboxes[]" value="32" />1</td>

    <td class="first-cell" style=""><span ><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
</span></td>
    <td><span ><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_sn'];?>
</span></td>
    <td align="right"><span ><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</span></td>
        <td align="center">
      <a class="operate return" href="goodsreturn.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" title="还原" >
        还原
      </a>
     
      <a class="operate delete" href="goodsdelete.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
"  title="删除">
        删除
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
      if(confirm('您确实要删除该商品吗?')){

      }else{
        e.preventDefault();
      }
    });
    
     $('.return').click(function(e){
      if(confirm('您确实要把该商品还原吗?')){

      }else{
        e.preventDefault();
      }
    });
  
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
