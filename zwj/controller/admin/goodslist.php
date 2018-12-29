<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");


/*
实例化GoodsModel
调用select方法
循环显示在view上
*/


$goods = new GoodsModel();
$goodslist = $goods->getGoodsAll();
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
$smarty->display('goodslist.html');

