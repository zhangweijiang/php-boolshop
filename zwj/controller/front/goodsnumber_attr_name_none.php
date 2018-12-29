<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$act=$_POST['act'];
$goods_id=$_POST['goods_id'];
$goodsnumber=new GoodsnumberModel();
$goods_color_img=$_POST['goods_color_img'];
$goods_color_img=str_replace('/zwj/','',$goods_color_img);
$sql="select * from goods_number where goods_color_img='$goods_color_img' and goods_id=$goods_id and number<1";
$result=$goodsnumber->findbysql($sql);
echo json_encode($result);exit;


?>