<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:23:50
  from "D:\wamp\www\zwj\view\html\admin\catelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6ab762e6747_79737168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d63547bdc7b251cf7e0aa10ed3c8863e27f3144' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\catelist.html',
      1 => 1474705196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6ab762e6747_79737168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BOOLSHOP 管理中心 - 商品分类 </title>
    <link rel="stylesheet" href="../../view/css/admin/general.css">
    <link rel="stylesheet" href="../../view/css/admin/main.css">
</head>
<body>

<h1>
<span class="action-span"><a href="cateadd.php">添加分类</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品分类 </span>
<div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>分类名称</th>
    <th>商品数量</th>
    <th>数量单位</th>
    <th>导航栏</th>
    <th>是否显示</th>

    <th>价格分级</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr align="center" class="0" id="0_1" id = 'tr_4'>
    <td align="left" class="first-cell" style = 'padding-left="1"'>
            <img src="../../view/images/admin/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
em" />

            <span><a href="#" ><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    <td width="10%"><img src="../../view/images/admin/yes.gif" /></td>
    <td width="10%"><img src="../../view/images/admin/yes.gif" /></td>
    <td><span>0</span></td>

    <td width="10%" align="right"><span>50</span></td>
    <td width="24%" align="center">
      <a class="operate" href="#"title="转移商品">转移商品</a> |
      <a class="operate" href="catedit.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" title="编辑">编辑</a> |
     <a class="operate" href="catedel.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"  onclick="if(!confirm('确实要删除吗?')){return false;};" title="移除">移除</a>
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
</div>
</form>

<div id="footer">
共执行 1 个查询，用时 0.015927 秒，Gzip 已禁用，内存占用 1.999 MB<br />

版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利
。</div>

</body>
</html><?php }
}
