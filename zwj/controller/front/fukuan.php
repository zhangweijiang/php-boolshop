<?php
/****
author: zwj
url: http://www.boolshop.com
 ****/
define('ACC',true);
require('../include/init.php');
$oa=new OrderActionModel();
$order_id=$_GET['order_id'];
$order_status=1;
$customer_id=$_SESSION['customer_id'];
$model=new Model();
$sql="select * from money where customer_id=$customer_id";
$money=$model->findbysql($sql)[0]['money'];
$sql="select * from order_info where order_id=$order_id";
$subtotal=$model->findbysql($sql)[0]['subtotal'];
if($money<$subtotal){
    echo '<script>alert("余额不足，请充值");location.href="/zwj/view/html/front/account_deposit.html"</script>';
}else{
    $sql="update money set money=money-$subtotal where customer_id=$customer_id";
    $model->findbysql($sql);
    $int=$oa->order_status($order_status,$order_id);
    echo '<script>alert("成功支付");location.href="/zwj/controller/front/myorder.php"</script>';
}
