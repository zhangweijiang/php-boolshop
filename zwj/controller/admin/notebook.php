<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$model=new LanmuModel();
$model->table('notebook');
$result=$model->update($_POST,1);



?>