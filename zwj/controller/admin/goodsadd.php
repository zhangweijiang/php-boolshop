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
    $cat = new CatModel();
    $catlist = $cat->select();
    $catlist = $cat->getCatTree($catlist);
    $goodstype = new GoodsTypeModel();
    $goodstype = $goodstype->select();
    $brand = new BrandModel();
    $brand = $brand->select();
    $time = time();
    $start_date = date("Y-m-d", $time);
    $end_date = date("Y-m-d", time() + 30 * 24 * 3600);
    $smarty = new mysmarty();
    $smarty->caching = false;
    $smarty->template_dir = ROOT . "view/html/admin/";
    $smarty->assign('catlist', $catlist);
    $smarty->assign('goodstype', $goodstype);
    $smarty->assign('brand', $brand);
    $smarty->assign('start_date', $start_date);
    $smarty->assign('end_date', $end_date);
    $smarty->display('goodsadd.html');
}








?>