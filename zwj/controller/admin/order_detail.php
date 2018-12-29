<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$order_id=$_GET['order_id'];
$order_detail=new Model();
//获取order_info表信息
$sql="select * from order_info where order_id=$order_id";
$order_info=$order_detail->findbysql($sql);
$smarty->assign('order_info',$order_info[0]);
//获取order_action表信息
$sql="select * from order_action where order_id=$order_id";
$order_action=$order_detail->findbysql($sql);
$smarty->assign('order_action',$order_action[0]);
//获取order_goods表信息
$sql="select * from order_goods join order_action on order_action.order_id=order_goods.order_id join goods on order_goods.goods_id=goods.goods_id where order_goods.order_id=$order_id";
$order_goods=$order_detail->findbysql($sql);
$smarty->assign('order_goods',$order_goods);
$smarty->display('order_detail.html');