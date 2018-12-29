<?php
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$attr=new AttributeModel();
if(!isset($_POST['show_in_front'])){
	$_POST['show_in_front']=0;
}
if($_POST['attr_input_type']!='1'){
	if($_POST['attr_values']!==""){
		$_POST['attr_values']="";
	}
}
$int=$attr->update($_POST,$_POST["attr_id"]);
$attr=$attr->find($_POST["attr_id"]);
$attr=$attr['goods_type_id'];
header('location:information.php?title=编辑属性成功&href1=attributelist.php&content1=返回属性列表&row=1&attr='.$attr);