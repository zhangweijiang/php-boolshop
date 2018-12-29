<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require('../include/init.php');
$goodstype=new GoodsTypeModel();
$goods_type_id=$_GET['goods_type_id'];
$attr=new AttributeModel();
$attr=$attr->deletebygoodstypeid($goods_type_id);
$goodstype=$goodstype->delete($goods_type_id);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
header('location:goodstypelist.php');
