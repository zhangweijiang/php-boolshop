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
    $goodstype = $goodstype->select();
    $attr = $attr->find($_GET['id']);
    $smarty = new mysmarty();
    $smarty->caching = false;
    $smarty->template_dir = ROOT . "view/html/admin/";
    $smarty->assign('attr', $attr);
    $smarty->assign('goodstype', $goodstype);
    $smarty->display('attributeedit.html');
}