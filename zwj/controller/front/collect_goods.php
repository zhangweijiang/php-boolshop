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
	//获得collect_goods里面的所有goods_id
	$collect_goods=new CollectGoodsModel();
	$collect_goods_result=$collect_goods->select();
	$collect_goods_id=null;
	foreach($collect_goods_result as $v){
		$collect_goods_id=$collect_goods_id.$v['goods_id'].',';
	}
	$collect_goods_id=substr($collect_goods_id,0,-1);
	$goodsmodel=new GoodsModel();
	$sql="select * from goods join collect_goods where goods.goods_id=collect_goods.goods_id and goods.goods_id in($collect_goods_id) and is_on_sale=1 and is_delete=0";
	$goods=$goodsmodel->findbysql($sql);
	$smarty->assign('goods',$goods);
    $smarty->display('collect_goods.html');