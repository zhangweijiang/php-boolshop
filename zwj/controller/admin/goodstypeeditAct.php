<?php
/****
author: zwj
url: http://www.boolshop.com
****/



define('ACC',true);
require('../include/init.php');
$goodstype=new GoodsTypeModel();
$data=array();
$data=$goodstype->_facade($_POST);
$goodstype=$goodstype->update($data,$_POST['goods_type_id']);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
header('location:information.php?title=编辑商品类型成功&href1=goodstypelist.php&content1=返回商品类型列表&row=1');