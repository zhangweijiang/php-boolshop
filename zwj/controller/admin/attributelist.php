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
	$attr = new AttributeModel();
	$goodstype = new GoodsTypeModel();
	function attr($attr)
	{
		foreach ($attr as $k => $v) {
			if (is_array($v)) {
				$attr[$k] = attr($v);
			} else if (is_string($v)) {
				if ($k == "attr_input_type") {
					if ($v == 0) {
						$v = str_replace("0", "手工录入", $v);
					} else if ($v == 1) {
						$v = str_replace("1", "从列表中选择", $v);
					} else if ($v == 2) {
						$v = str_replace("2", "多行文本框", $v);
					}
				}
				$attr[$k] = $v;
			}
		}
		return $attr;
	}

	if (isset($_GET['goods_type_id'])) {
		$id = $_GET['goods_type_id'];
		$attr = $attr->getAllById($id);
		$goods_type_id = $goodstype->find($id);
	} else {
		$attr = $attr->getAll();
	}
	$attr = attr($attr);
	$goodstype1 = $goodstype->select();
	$smarty = new mysmarty();
	$smarty->caching = false;
	$smarty->template_dir = ROOT . "view/html/admin/";
	$smarty->assign('attribute', $attr);
	if (!isset($goods_type_id)) {
		$goods_type_id = null;
	}
	$smarty->assign('goodstypeid', $goods_type_id);
	$smarty->assign('goodstype', $goodstype1);
	$smarty->display('attributelist.html');
}