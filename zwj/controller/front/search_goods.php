<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$smarty = new mySmarty();
$smarty->assign('header',ROOT.'view/html/front/header.html');
$smarty->assign('footer',ROOT.'view/html/front/footer.html');
//header里面的购物车
	$gouwuche=new GouwucheModel();
	$username=$_SESSION['username'];
	$sql="select * from gouwuche where customer_name='$username'";
	$gouwuche_result=$gouwuche->findbysql($sql);
	$smarty->assign('gouwuche',$gouwuche_result);
	$smarty->assign('all_number',count($gouwuche_result));
	$search_type=$_POST['search_type'];
	if($search_type=='商品'){
		$goods_keywords=$_POST['goods_keywords'];
		if($goods_keywords==""){
			$smarty->display('search_goods_none.html');
			exit;
		}
		$goodsmodel=new GoodsModel();
		$sql="select * from goods where goods_name like '%$goods_keywords%' and is_on_sale=1 and is_delete=0";
		$goods=$goodsmodel->findbysql($sql);
		if(!empty($goods)){
			$smarty->assign('goods',$goods);
		    $smarty->display('search_goods.html');
		}else{
			$smarty->display('search_goods_none.html');
		}
	}else{
		echo 4;
	}