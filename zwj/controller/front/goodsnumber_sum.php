<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goods_id=$_POST['goods_id'];
$goodsnumber=new GoodsnumberModel();
	
	$sql="select sum(number) as sum from goods_number where  goods_id=$goods_id";
	$result=$goodsnumber->findbysql($sql);
	echo json_encode($result);exit;


?>