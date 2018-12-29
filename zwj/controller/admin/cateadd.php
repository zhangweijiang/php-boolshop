<?php
/****
author: zwj
url: http://www.boolshop.com
****/



define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else{
$cat = new CatModel();
$catlist = $cat->select();
$catlist = $cat->getCatTree($catlist);
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->select();
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('catlist',$catlist);
$smarty->assign('goodstype',$goodstype);
$smarty->display('cateadd.html');
}