<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$model=new LanmuModel();
$model->table('customer');
$result=$model->select();
include(ROOT.'/view/html/admin/user_list.html');



?>