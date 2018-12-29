<?php
/* Smarty version 3.1.30, created on 2017-03-14 20:41:32
  from "D:\wamp\www\zwj\view\html\admin\comment_detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7e4fce37d61_16565694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a7dd9d4fd9a5fd52f2071232ba14035478e71c' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\comment_detail.html',
      1 => 1488730253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e4fce37d61_16565694 (Smarty_Internal_Template $_smarty_tpl) {
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
    <span class="action-span"><a href="/zwj/controller/admin/commentlist.php">用户评论</a></span>
		<span class="action-span1"><a href="#">BOOLSHOP
            管理中心</a> </span><span id="search_id" class="action-span1"> -评论详情 </span>
    <div style="clear: both"></div>
</h1>
<form action="/zwj/controller/admin/commet_detail_act.php" id="comment_form" method="post">
    <p>用户名：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['customer_name'];?>
" readonly></p>
    <p>回复内容：<textarea name="response" id="response" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['result']->value['response'];?>
</textarea></p>
    <input type="hidden" name="comment_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['comment_id'];?>
">
    <p><input type="submit" value="确定">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></p>
</form>
<?php echo '<script'; ?>
>
    
        $('#comment_form').submit(function(e){
            var content= $.trim($('#response').val());
            if(content==''){
                alert('回复内容不能为空');
                e.preventDefault();
            }
        });

    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
