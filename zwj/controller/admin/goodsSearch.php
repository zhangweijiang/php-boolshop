<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$data=$_POST;
$goods=new GoodsModel();
if($_POST['intro_type']==""){
	unset($_POST['intro_type']);
}else{
	$_POST[$_POST['intro_type']]=1;
	unset($_POST['intro_type']);
}
if($_POST['provider_name']==""){
	unset($_POST['provider_name']);
}
if($_POST['is_on_sale']==""){
	unset($_POST['is_on_sale']);
}
if($_POST['keywords']==""){
	unset($_POST['keywords']);
}
if($_POST['brand_id']==""){
    unset($_POST['brand_id']);
}


$goodslist=$goods->catGoodsAll($_POST,$_POST['cat_id']);
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('goodslist',$goodslist);
//所有分类
$cat = new CatModel();
$catlist = $cat->select();
$catlist = $cat->getCatTree($catlist);
$smarty->assign('catlist',$catlist);
//所有品牌
$brand=new BrandModel();
$brand=$brand->select();
$smarty->assign('brand',$brand);
$smarty->assign('data',$data);
$smarty->display('goodslist.html');
?>