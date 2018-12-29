<?php
//header( " Access-Control-Allow-Origin: * " );
//header( " Access-Control-Allow-Methods: POST,GET " );
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
	$cat = new CatModel();
	$cat = $cat->find_parent_id($_POST['parent_id']);
	foreach ($cat as $v) {
		if ($v['cat_name'] == $_POST['cat_name']) {
			$bool = "true";
		}
	}
	if (isset($_POST['ori_cat_name'])) {
		if ($_POST['ori_cat_name'] == $_POST['cat_name']) {
			$bool = false;
		}
	}
	echo $bool;
}