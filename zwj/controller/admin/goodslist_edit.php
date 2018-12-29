<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$_POST[$_POST['name']]=$_POST['value'];
unset($_POST['name']);
unset($_POST['value']);
$model=new GoodsModel();
$int=$model->update($_POST,$_POST['goods_id']);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
echo $int;


?>