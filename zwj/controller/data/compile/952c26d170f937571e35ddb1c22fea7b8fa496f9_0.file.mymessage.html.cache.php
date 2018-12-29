<?php
/* Smarty version 3.1.30, created on 2017-03-13 20:41:54
  from "D:\wamp\www\zwj\view\html\front\mymessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c69392560063_37207504',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '952c26d170f937571e35ddb1c22fea7b8fa496f9' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\mymessage.html',
      1 => 1489408911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c69392560063_37207504 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_date_format\')) require_once \'D:\\\\wamp\\\\www\\\\zwj\\\\lib\\\\smarty3\\\\libs\\\\plugins\\\\modifier.date_format.php\';
?>/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';
$_smarty_tpl->compiled->nocache_hash = '254258c693924f68d6_75640505';
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
    <?php echo '<script'; ?>
>
        
            $(function(){
                $('.message_del').click(function(){

                    var id=$(this).next().val();

                    $.ajax({
                        url:'/zwj/controller/front/message_delete.php',
                        type:'get',
                        datatype:'text',
                        data:{id:id},
                        success:function(data){
                            alert('删除成功');
                            window.location.reload();
                        },

                    });
                });

            });
        

    <?php echo '</script'; ?>
>
</head>
<body>

<div style="width:950px;height:33px;line-height:33px;background: url('/zwj/view/images/front/bgbr_01.gif')">
    <div style="width:80px;height:33px;line-height:33px;background: url('/zwj/view/images/front/span.png');text-align:center;color:white;">我要留言</div>

</div>
<ul><?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php if ($_smarty_tpl->tpl_vars[\'messagedata\']->value) {?>/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>

    <?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'messagedata\']->value, \'v\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->value) {
?>/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>

        <li><span style="float:left;width:800px;">标题：<?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'title\'];?>
/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>
(<?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'v\']->value[\'add_time\'],\'%Y-%m-%d %H:%M:%S\');?>
/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>
)</span><a href="javascript:void(0);" class="message_del" style="float:right;width:80px;display: block;font-size:14px;" >删除</a><input
                type="hidden" value="<?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'id\'];?>
/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>
">
        <div class="clear" style="clear:both;"></div>
            <span>内容：<?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'content\'];?>
/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>
</span>
        </li>
    <?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>

    <?php echo '/*%%SmartyNocache:254258c693924f68d6_75640505%%*/<?php }?>/*/%%SmartyNocache:254258c693924f68d6_75640505%%*/';?>

</ul>

</body>
</html><?php }
}
