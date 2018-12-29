<?php
/* Smarty version 3.1.30, created on 2017-03-13 20:54:45
  from "D:\wamp\www\zwj\view\html\front\information.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c69695c36833_02892200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2e2ca44d27533ba23d53eb4360a5754347349c' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\information.html',
      1 => 1489409684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c69695c36833_02892200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '925058c69695bd4d97_90916433';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>boolshop-用户信息</title>
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/TweenMax.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/gsap/1.19.0/plugins/ScrollToPlugin.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/TweenMax.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/zwj/view/js/front/header.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/zwj/view/css/front/reset.css">
    <link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
    <!-- <link href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/zwj/view/css/front/index.css">
    <link rel="stylesheet" href="/zwj/view/css/front/header.css">
    <link rel="stylesheet" href="/zwj/view/css/front/footer.css">
    <link rel="stylesheet" href="/zwj/view/css/front/shopping_cart.css">
    <link rel="stylesheet" href="/zwj/view/css/front/style.css">
    <style>
        
        .information_left>ul>li>a{
            display: block;
            width:200px;
            height:33px;
            line-height:33px;
            border-bottom:1px dashed #d8deda;
            text-indent: 20px;
        }
        
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="information_left" style="border:1px solid #d8d8d8;width:200px;float:left;margin-left:65px;">
    <ul>
        <li><a href="/zwj/view/html/front/welcome.html" target="right">欢迎页</a></li>
        <li><a href="/zwj/controller/front/user_info.php" target="right">用户信息</a></li>
        <li><a href="/zwj/controller/front/myorder.php" target="right">我的订单</a></li>
        <li><a href="/zwj/controller/front/mymessage.php" target="right">我的留言</a></li>
        <li><a href="/zwj/controller/front/mycomment.php" target="right">我的评论</a></li>
        <li><a href="/zwj/controller/front/money.php" target="right">资金管理</a></li>
    </ul>
</div>

<iframe src="/zwj/view/html/front/welcome.html" frameborder="0" name="right" id="myiframe" style="width:1000px;height:500px;border:1px solid #d8d8d8;margin-left:13px;"></iframe>

<div class="clear"></div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html><?php }
}
