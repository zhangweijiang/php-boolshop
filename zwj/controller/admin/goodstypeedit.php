<?php
/****
author: zwj
url: http://www.boolshop.com
****/



define('ACC',true);
require('../include/init.php');
$goods_type_id=$_GET['goods_type_id'];
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->find($goods_type_id);
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->assign('goodstype',$goodstype);
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->display('goodstypeedit.html');