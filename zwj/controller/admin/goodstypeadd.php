<?php
/****
author: zwj
url: http://www.boolshop.com
****/



define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->display('goodstypeadd.html');