<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$smarty = new mySmarty();
$smarty->assign('header',ROOT.'view/html/front/header.html',false);
$smarty->assign('footer',ROOT.'view/html/front/footer.html');
$smarty->display('goods_none.html');
?>