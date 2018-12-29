<?php
/* Smarty version 3.1.30, created on 2017-04-06 16:48:41
  from "D:\wamp\www\zwj\view\html\front\myorder.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e600e92fd4a3_63730258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b1d47a0301cfe2c7d38b0a5ab71b0a6049cc5b' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\myorder.html',
      1 => 1491468363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e600e92fd4a3_63730258 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
>
        
        $(function(){
            $('.tab-back').click(function(){
                var index=$(this).index();
                /*注意：以为百度编辑器也是一个table,所以为了区分要在三个table
                 (通用信息，详细描述，其他信息)上加上类名为a,否则得到的index(不是你想要的索引，不能实现你想要的效果*/
                $('table.a').eq(index).show().siblings('table.a').hide();
                $(this).css('background','#BBDDE5').siblings().css('background','none');
            });
            //取消订单
            $('.cancel_order').click(function(){
                var action_id=$(this).attr('action_id');
                var url='/zwj/controller/admin/order_status.php?order_status=delete&action_id='+action_id;
                $.ajax({
                    url:url,
                    type:'get',
                    success:function(data){
                        alert('成功取消订单');
                        window.location.href='/zwj/controller/front/myorder.php?status=1';
                    }
                });
            });

            $('.cancel_order1').click(function(){
                var action_id=$(this).attr('action_id');

                var url='/zwj/controller/admin/order_status.php?order_status=delete&action_id='+action_id;
                $.ajax({
                    url:url,
                    type:'get',
                    success:function(data){

                        alert('成功取消订单');
                        window.location.href='/zwj/controller/front/myorder.php?status=0';
                    }
                });
            });

            $('.delete_order1').click(function(){
                var action_id=$(this).attr('action_id');

                var url='/zwj/controller/admin/order_status.php?order_status=delete&action_id='+action_id;
                $.ajax({
                    url:url,
                    type:'get',
                    success:function(data){

                        alert('成功删除订单');
                        window.location.href='/zwj/controller/front/myorder.php?status=0';
                    }
                });
            });

            $('.assure_gain').click(function(){
                var action_id=$(this).attr('action_id');
                var url="/zwj/controller/front/assure.php?action_id="+action_id;
                $.ajax({
                    url:url,
                    type:'get',
                    success:function(data){
                        //alert(data);
                        alert('确认成功');
                        window.location.href='/zwj/controller/front/myorder.php?status=0';
                    }
                });
            })


            var status=$('.status').val();
            if(status=='0'){
                $('.tab-back').eq(0).trigger('click');
            }else if(status=='1'){
                $('.tab-back').eq(1).trigger('click');
            }else if(status=='2'){
                $('.tab-back').eq(2).trigger('click');
            }else if(status=='3'){
                $('.tab-back').eq(3).trigger('click');
            }


        });
        
    <?php echo '</script'; ?>
>

</head>
<body style="background:white;">
<input type="hidden" class="status" value="<?php echo $_GET['status'];?>
">
<h1>

		<span class="action-span1"><a href="#">BOOLSHOP
            管理中心</a> </span><span id="search_id" class="action-span1"> - 交易订单 </span>
    <div style="clear: both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div" >
    <!-- tab bar -->
    <div id="tabbar-div" >
        <p>
			<span class="tab-back" style="background:#BBDDE5">
					所有订单</span>
            <span class="tab-back" >待付款</span>
            <span class="tab-back" >待发货</span>
            <span class="tab-back" >待收货</span>
            <span class="tab-back" >已完成</span>
        </p>
    </div>
</div>
<!-- 交易订单表 -->
<table class="a" style="width:98%;">
    <tr bgcolor="gray" style="height:30px;line-height:30px;">
        <th>订单号</th>
        <th>下单时间</th>
        <th>收货人</th>
        <th>总金额</th>
        <th>应付金额</th>
        <th>订单状态</th>
        <th>&nbsp;操作&nbsp;</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'o');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
?>

    <tr align="center" style="height:50px;line-height:50px;">
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o']->value['order_sn'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o']->value['customer_name'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o']->value['reciver'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php if ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 0) {?>待付款<?php } elseif ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 1) {?>待发货<?php } elseif ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 2) {?>待收货<?php } else { ?>已收货<?php }?></td>
        <td style="border:1px solid #e8e8e8;"><?php if ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 0) {?><a onclick="return confirm('确定付款')" href="/zwj/controller/front/fukuan.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
"   style="color:#0d6acb;">付款</a>
            <a href="javascript:void(0)" class="cancel_order1" action_id="<?php echo $_smarty_tpl->tpl_vars['o']->value['action_id'];?>
" style="color:#0d6acb;">取消订单</a><?php } elseif ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 1) {?><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a><?php } elseif ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 2) {?><a href="javascript:void(0)" style="margin-bottom:9px;display:block;color:red;" class="assure_gain" action_id="<?php echo $_smarty_tpl->tpl_vars['o']->value['action_id'];?>
">确认收货</a><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a><?php } elseif ($_smarty_tpl->tpl_vars['o']->value['order_status'] == 3) {?><span  style="margin-bottom:9px;display:block;">交易完成</span><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a><br><a href="javascript:void(0);" style="color:#0d6acb;" class="delete_order1" action_id="<?php echo $_smarty_tpl->tpl_vars['o']->value['action_id'];?>
">删除订单</a><?php }?></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!-- 待付款表 -->

<table class="a" style="display:none;width:98%;">

    <tr bgcolor="gray" style="height:30px;line-height:30px;">
        <th>订单号</th>
        <th>下单时间</th>
        <th>收货人</th>
        <th>总金额</th>
        <th>应付金额</th>
        <th>订单状态</th>
        <th>&nbsp;操作&nbsp;</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order1']->value, 'o1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['o1']->value) {
?>

    <tr align="center" style="height:50px;line-height:50px;">
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o1']->value['order_sn'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o1']->value['customer_name'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o1']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o1']->value['reciver'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o1']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o1']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;">待付款</td>
        <td style="border:1px solid #e8e8e8;"><a onclick="return confirm('确定付款')" href="/zwj/controller/front/fukuan.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o1']->value['order_id'];?>
"   style="color:#0d6acb;">付款</a>
            <a href="javascript:void(0)" class="cancel_order" action_id="<?php echo $_smarty_tpl->tpl_vars['o1']->value['action_id'];?>
" style="color:#0d6acb;">取消订单</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!-- 待发货表 -->
<table class="a" style="display:none;width:98%;">
    <tr bgcolor="gray" style="height:30px;line-height:30px;">
        <th>订单号</th>
        <th>下单时间</th>
        <th>收货人</th>
        <th>总金额</th>
        <th>应付金额</th>
        <th>订单状态</th>
        <th>&nbsp;操作&nbsp;</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order2']->value, 'o2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['o2']->value) {
?>

    <tr align="center" style="height:50px;line-height:50px;">
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o2']->value['order_sn'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o2']->value['customer_name'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o2']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o2']->value['reciver'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o2']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o2']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;">待发货</td>
        <td style="border:1px solid #e8e8e8;"><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o2']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!-- 待收货表 -->
<table class="a" style="display:none;width:98%;">
    <tr bgcolor="gray" style="height:30px;line-height:30px;">
        <th>订单号</th>
        <th>下单时间</th>
        <th>收货人</th>
        <th>总金额</th>
        <th>应付金额</th>
        <th>订单状态</th>
        <th>&nbsp;操作&nbsp;</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order3']->value, 'o3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['o3']->value) {
?>

    <tr align="center" style="height:50px;line-height:50px;">
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o3']->value['order_sn'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o3']->value['customer_name'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o3']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o3']->value['reciver'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o3']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o3']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;">待收货</td>
        <td style="border:1px solid #e8e8e8;"><a href="javascript:void(0)" style="margin-bottom:9px;display:block;color:red;" class="assure_gain" action_id="<?php echo $_smarty_tpl->tpl_vars['o3']->value['action_id'];?>
">确认收货</a><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o3']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!-- 已完成表 -->
<table class="a" style="display:none;width:98%;">
    <tr bgcolor="gray" style="height:30px;line-height:30px;">
        <th>订单号</th>
        <th>下单时间</th>
        <th>收货人</th>
        <th>总金额</th>
        <th>应付金额</th>
        <th>订单状态</th>
        <th>&nbsp;操作&nbsp;</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order4']->value, 'o4');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['o4']->value) {
?>

    <tr align="center" style="height:50px;line-height:50px;">
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o4']->value['order_sn'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o4']->value['customer_name'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o4']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o4']->value['reciver'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o4']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;"><?php echo $_smarty_tpl->tpl_vars['o4']->value['subtotal'];?>
</td>
        <td style="border:1px solid #e8e8e8;">已收货</td>
        <td style="border:1px solid #e8e8e8;"><span  style="margin-bottom:9px;display:block;">交易完成</span><a href="/zwj/controller/admin/order_detail.php?order_id=<?php echo $_smarty_tpl->tpl_vars['o4']->value['order_id'];?>
" style="color:#0d6acb;">订单详情</a><br><a href="javascript:void(0);" style="color:#0d6acb;" class="delete_order1" action_id="<?php echo $_smarty_tpl->tpl_vars['o4']->value['action_id'];?>
">删除订单</a></td>
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
