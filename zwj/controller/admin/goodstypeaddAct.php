<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->add($_POST);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
if($goodstype>0){
	header('location:information.php?title=新建商品类型成功&href1=goodstypelist.php&content1=返回商品类型列表&row=1');
}