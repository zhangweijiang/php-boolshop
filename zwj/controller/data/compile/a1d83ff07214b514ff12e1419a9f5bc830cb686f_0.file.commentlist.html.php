<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:24:07
  from "D:\wamp\www\zwj\view\html\admin\commentlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6ab878550d6_30109567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d83ff07214b514ff12e1419a9f5bc830cb686f' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\commentlist.html',
      1 => 1488728278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6ab878550d6_30109567 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\zwj\\lib\\smarty3\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOOLSHOP 管理中心 - 交易订单</title>
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
<input type="hidden" class="status" value="<?php echo $_GET['status'];?>
">
<h1>

		<span class="action-span1"><a href="#">BOOLSHOP
            管理中心</a> </span><span id="search_id" class="action-span1"> -用户评论 </span>
    <div style="clear: both"></div>
</h1>
<table border="1" cellspacing="0" width="98%">
    <tr align="center">
        <td>编号</td>
        <td>用户名</td>
        <td>评论对象</td>
        <td>评论等级</td>
        <td>评论时间</td>
        <td>操作</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr align="center">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['comment_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['customer_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['comment_rank'] == 1) {?><img src="/zwj/view/images/admin/stars1.gif" alt="">
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['comment_rank'] == 2) {?><img src="/zwj/view/images/admin/stars2.gif" alt="">
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['comment_rank'] == 3) {?><img src="/zwj/view/images/admin/stars3.gif" alt="">
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['comment_rank'] == 4) {?><img src="/zwj/view/images/admin/stars4.gif" alt="">
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['comment_rank'] == 5) {?><img src="/zwj/view/images/admin/stars5.gif" alt="">
            <?php }?>
        </td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['comment_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td><a href="/zwj/controller/admin/comment_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['comment_id'];?>
" style="color:#41a5e1">查看详情</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href="/zwj/controller/admin/comment_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['comment_id'];?>
" style="color:#41a5e1" onclick="return confirm('您确定要删除这条记录吗？')">移除</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

</body>
</html><?php }
}
