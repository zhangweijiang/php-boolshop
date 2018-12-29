<?php
/* Smarty version 3.1.30, created on 2017-03-13 22:18:04
  from "D:\wamp\www\zwj\view\html\admin\information.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6aa1cbd0a71_95584831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bd1ee7c1864b817d41fbeb106a195829276d573' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\information.html',
      1 => 1487947598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6aa1cbd0a71_95584831 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>BOOLSHOP 管理中心 - 系统信息-编辑商品 </title>
<link rel="stylesheet" href="../../view/css/admin/general.css">
<link rel="stylesheet" href="../../view/css/admin/main.css">
</head>
<body>
<h1>
<span class="action-span1"><a href="#">BOOLSHOP管理中心</a> </span><span id="search_id" class="action-span1"> - 系统信息 </span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
  <div id="content" style="width:800px;margin-left:70px;">
 <img src="../../view/images/admin/information.gif" alt="图片不存在">
  <font style="padding-left:20px;padding-top:5px;color:black;font-size:13px;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</font>
  <div style="margin-left:58px;">如果您不做出选择，将在 3 秒后跳转到第一个链接地址。</div>
  <?php if ($_smarty_tpl->tpl_vars['href3']->value) {?>
  <div style="margin-left:58px;margin-top:7px;">
    <img src="../../view/images/admin/arrow.gif" alt="图片不存在">
    <a href="<?php echo $_smarty_tpl->tpl_vars['href3']->value;?>
?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
&act=add" class="href" style="padding-left:7px;padding-top:3px;cursor:pointer">
      发布商品数量
    </a>
  </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['href4']->value) {?>
  <div style="margin-left:58px;margin-top:7px;">
    <img src="../../view/images/admin/arrow.gif" alt="图片不存在">
    <a href="<?php echo $_smarty_tpl->tpl_vars['href4']->value;?>
?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
" class="href" style="padding-left:7px;padding-top:3px;cursor:pointer">
      编辑商品数量
    </a>
  </div>
  <?php }?>
  <div style="margin-left:58px;margin-top:7px;">
    <img src="../../view/images/admin/arrow.gif" alt="图片不存在">
    <a href="<?php echo $_smarty_tpl->tpl_vars['href1']->value;?>
" class="href" style="padding-left:7px;padding-top:3px;cursor:pointer">
      <?php echo $_smarty_tpl->tpl_vars['content1']->value;?>


    </a>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['row']->value == 2) {?>
  <div style="margin-left:58px;margin-top:7px;">
    <img src="../../view/images/admin/arrow.gif" alt="图片不存在">
    <a href="<?php echo $_smarty_tpl->tpl_vars['href2']->value;?>
" class="href" style="padding-left:7px;padding-top:3px;cursor:pointer">
      <?php echo $_smarty_tpl->tpl_vars['content2']->value;?>

    </a>
  </div>
  <?php }?>
  </div>
</div>
<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html><?php }
}
