<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$bool="false";
$goodstype=new GoodsTypeModel();
$goodstype=$goodstype->select();
foreach ($goodstype as $v) {
	if($v['goods_type_name']==$_POST['goods_type_name']){
		$bool="true";
	}
}
if(isset($_POST['ori_goods_type_name'])){
	if($_POST['ori_goods_type_name']==$_POST['goods_type_name']){
		$bool=false;
	}
}
echo $bool;