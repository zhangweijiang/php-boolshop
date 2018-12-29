<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$attr=new AttributeModel();
$attr=$attr->getAllByGoodsTypeId($_POST['goods_type_id']);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
echo json_encode($attr);
