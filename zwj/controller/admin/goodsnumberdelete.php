<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods_id=$_POST['goods_id'];
$goodsnumber=new GoodsnumberModel();
$int=$goodsnumber->deletebygoodid($goods_id);
$smarty=new mySmarty();  
$smarty->clearAllCache();
echo $int;
?>