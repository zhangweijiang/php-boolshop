<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goods_id=$_POST['goods_id'];
$goodsnumber=new GoodsnumberModel();
$goods_color_img=$_POST['goods_color_img'];
$goods_color_img=str_replace('/zwj/','',$goods_color_img);
$attr_value=$_POST['attr_value'];
$sql="select sum(number) as sum from goods_number where goods_color_img='$goods_color_img' and goods_id=$goods_id and attr_value='$attr_value'";
$result=$goodsnumber->findbysql($sql);
echo json_encode($result);exit;


?>