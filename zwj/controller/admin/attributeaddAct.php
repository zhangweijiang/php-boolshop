<?php
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$attr=new AttributeModel();
$int=$attr->add($_POST);
$attr1=$attr->insert_id();
$attr=$attr->find($attr1);
$attr=$attr['goods_type_id'];
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
if($int>0){
	header('location:information.php?title=添加属性成功&href1=attributelist.php&content1=返回属性列表&row=2&href2=attributeadd.php&content2=添加下一个属性&attr='.$attr);
}