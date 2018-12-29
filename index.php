<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('/zwj/controller/include/init.php');
$smarty = new mySmarty();
if(!$smarty->isCached('index.html')){
	$goodsmodel=new GoodsModel();
	$goodsnew=$goodsmodel->getNew();
	$goodsbest=$goodsmodel->getBest();
	$goodshot=$goodsmodel->getHot();
	$goods=$goodsmodel->getGoods();
	$smarty->assign('header',ROOT.'view/html/front/header.html');
	$smarty->assign('footer',ROOT.'view/html/front/footer.html');
	$smarty->assign('goodsnew',$goodsnew);
	$smarty->assign('goodsbest',$goodsbest);
	$smarty->assign('goodshot',$goodshot);
	$smarty->assign('goods',$goods);
}
	//header里面的购物车
	$gouwuche=new GouwucheModel();
	$username=$_SESSION['username'];
	$sql="select * from gouwuche where customer_name='$username'";
	$gouwuche_result=$gouwuche->findbysql($sql);
	$smarty->assign('all_number',count($gouwuche_result));
	$smarty->assign('gouwuche',$gouwuche_result);
	//分类的显示
	$model_cat=new Model();
	$sql="select * from category where parent_id=0";
	$cat_list=$model_cat->findbysql($sql);
	$smarty->assign('cat_list',$cat_list);
	$smarty->display('index.html');


?>