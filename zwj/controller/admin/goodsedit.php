<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods_id=$_GET['goods_id'];
$smarty=new mysmarty();
$goods=new GoodsModel();
$goods=$goods->find($goods_id);
$cat = new CatModel();
$catlist = $cat->select();
$brand=new BrandModel();
$brand=$brand->select();
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->select();
$catlist = $cat->getCatTree($catlist);
$time=time();
$start_date=date("Y-m-d",$time);
$end_date=date("Y-m-d",time()+30*24*3600);
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('goods',$goods);
$smarty->assign('goodstype',$goodstype);
$smarty->assign('catlist',$catlist);
$smarty->assign('brand',$brand);
$smarty->assign('start_date',$start_date);
$smarty->assign('end_date',$end_date);
$goods_gallery=new GoodsgalleryModel();
$goods_gallery=$goods_gallery->find($goods_id);
$smarty->assign('goods_gallery',$goods_gallery);
$goods_color=new GoodscolorModel();
$goods_color=$goods_color->find($goods_id);
$smarty->assign('goods_color',$goods_color);
$smarty->display('goodsedit.html');