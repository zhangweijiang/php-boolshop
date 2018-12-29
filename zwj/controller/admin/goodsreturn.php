<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods_id=$_GET['goods_id'];
$goods=new GoodsModel();
$data['is_delete']=0;
$int=$goods->update($data,$goods_id);
if($int>0){
	header('location:goodstrash.php?act=show');
}