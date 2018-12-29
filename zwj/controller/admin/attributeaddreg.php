<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
if($_SESSION['login_state']!==true){
	header('location:/zwj/view/html/admin/admin_login.html');
}else {
	$bool = "false";
	$attr = new AttributeModel();
	$attr = $attr->getAllByGoodsTypeId($_POST['goods_type_id']);
	foreach ($attr as $v) {
		if ($v['attr_name'] == $_POST['attr_name']) {
			$bool = "true";
		}
	}
	if (isset($_POST['ori_attr_name'])) {
		if ($_POST['ori_attr_name'] == $_POST['attr_name']) {
			$bool = false;
		}
	}
	echo $bool;
}