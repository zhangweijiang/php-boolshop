<?php
/****
author: zwj
url: http://www.boolshop.com
 ****/
define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$smarty->caching=false;
$og=new OGModel();
$customer_id=$_SESSION['customer_id'];
//所有订单
$sql="select * from order_info join order_action on order_info.order_id=order_action.order_id where customer_id=$customer_id order by order_status asc,add_time desc";
$order=$og->findbysql($sql);
$smarty->assign('order',$order);
//待付款
$sql="select * from order_info join order_action on order_info.order_id=order_action.order_id where order_status=0 and customer_id=$customer_id order by add_time desc";
$order1=$og->findbysql($sql);
$smarty->assign('order1',$order1);
//待收货
$sql="select * from order_info join order_action on order_info.order_id=order_action.order_id where order_status=1 and customer_id=$customer_id order by add_time desc";
$order2=$og->findbysql($sql);
$smarty->assign('order2',$order2);
//待发货
$sql="select * from order_info join order_action on order_info.order_id=order_action.order_id where order_status=2 and customer_id=$customer_id order by add_time desc";
$order3=$og->findbysql($sql);
$smarty->assign('order3',$order3);
//已完成
$sql="select * from order_info join order_action on order_info.order_id=order_action.order_id where order_status=3 and customer_id=$customer_id order by add_time desc";
$order4=$og->findbysql($sql);
$smarty->assign('order4',$order4);
$smarty->display('myorder.html');