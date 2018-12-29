<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->getAll();
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('goodstype',$goodstype);
$smarty->display('goodstypelist.html');