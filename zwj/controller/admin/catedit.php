<?php
/****
author: zwj
url: http://www.boolshop.com
****/


/**
catedit.php
作用: 编辑栏目

思路:
接收cat_id

实例化model
调用model取出栏目信息

展示到表单
**/


define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else {
    $cat_id = $_GET['cat_id'] + 0;

    $cat = new CatModel();
    $catinfo = $cat->find($cat_id);
    $catlist = $cat->select();
    $catlist = $cat->getCatTree($catlist);
//print_r($catdesc);
    $goodstype = new GoodsTypeModel();
    $goodstype = $goodstype->select();
    $smarty = new mysmarty();
    $smarty->template_dir = ROOT . "view/html/admin/";
    $smarty->caching = false;
    $smarty->assign('catlist', $catlist);
    $smarty->assign('catinfo', $catinfo);
    $smarty->assign('goodstype', $goodstype);
    $smarty->display('catedit.html');
}

