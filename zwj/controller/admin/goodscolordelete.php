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
	$goodscolor = new GoodscolorModel();
	$goods_color_id = $_POST['goods_color_id'];
	$int = 0;
	if (!empty($goods_color_id)) {
		foreach ($goods_color_id as $v) {
			echo $v;
			$int = $goodscolor->delete($v);
		}
	}
	$smarty = new mySmarty();
	$smarty->clearAllCache();
	echo $int;
}