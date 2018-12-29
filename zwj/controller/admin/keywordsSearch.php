<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goods=new GoodsModel();
$goodslist=$goods->keywordsSearch($_POST['keywords']);
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('goodslist',$goodslist);
$smarty->display('goodstrash.html');
