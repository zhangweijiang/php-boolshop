<?php
/* Smarty version 3.1.30, created on 2017-03-13 20:19:21
  from "D:\wamp\www\zwj\view\html\front\mycomment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c68e49325202_70816423',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'eb704a3267b501402877a4e85c7b51b4cf7916e6' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\mycomment.html',
      1 => 1488730428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c68e49325202_70816423 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_date_format\')) require_once \'D:\\\\wamp\\\\www\\\\zwj\\\\lib\\\\smarty3\\\\libs\\\\plugins\\\\modifier.date_format.php\';
?>/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';
$_smarty_tpl->compiled->nocache_hash = '3250058c68e49275563_89817102';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的留言</title>
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <style>
        
        ul{
            margin:0;
            padding:0;
        }
        ul>li{
            list-style: none;
            padding:0;
            margin:0;
            padding:13px 0;
            border-bottom: 1px dashed #d3d3d3;
        }

        
    </style>

</head>
<body>

<div style="width:950px;height:33px;line-height:33px;background: url('/zwj/view/images/front/bgbr_01.gif')">
    <div style="width:80px;height:33px;line-height:33px;background: url('/zwj/view/images/front/span.png');text-align:center;color:white;">我的评论</div>

</div>
<ul>
    <?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'commentdata\']->value, \'v\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->value) {
?>/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>

    <li><span style="font-weight:bold;">商品评论：</span><a href="/zwj/controller/front/goods.php?goods_id=<?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>
#comment" style="color:red;text-decoration:none" target="_parent"><?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>
</a><span>(<?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'v\']->value[\'comment_time\'],\'%Y-%m-%d %H:%M:%S\');?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>
)</span>

        <div class="clear" style="clear:both;"></div>
        <span><?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'content\'];?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>
</span><br>
        <span style="font-weight:bold;">回复：</span><br>
        <?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'response\'];?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>

    </li>
    <?php echo '/*%%SmartyNocache:3250058c68e49275563_89817102%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:3250058c68e49275563_89817102%%*/';?>

</ul>

</body>
</html><?php }
}
