<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$model=new LanmuModel();
$model->table('customer');
$id=$_GET['id'];
$sql="delete from customer where customer_id=$id";
$model->findbysql($sql);
header('location:/zwj/controller/admin/user_list.php');



?>