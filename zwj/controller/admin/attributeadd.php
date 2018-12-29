<?php
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
	header('location:/zwj/view/html/admin/admin_login.html');
}else {
	$goodstype = new GoodsTypeModel();
	$goodstype1 = $goodstype->select();
	if (isset($_GET['id'])) {
		$goodstypebyid = $goodstype->find($_GET['id']);
	} else {
		$_GET['id'] = 0;
		$goodstypebyid = $goodstype->find($_GET['id']);
	}
	$smarty = new mysmarty();
	$smarty->caching = false;
	$smarty->template_dir = ROOT . "view/html/admin/";
	$smarty->assign('goodstype', $goodstype1);
	$smarty->assign('goodstypebyid', $goodstypebyid);
	$smarty->display('attributeadd.html');
}