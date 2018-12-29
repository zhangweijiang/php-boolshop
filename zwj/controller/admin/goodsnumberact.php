<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods_id=$_POST['goods_id'];
$is_on_sale=$_POST['is_on_sale'];
if($is_on_sale){
	$sql="update goods set is_on_sale=$is_on_sale where goods_id=$goods_id";
	$model1=new Model();
	$model1->findbysql($sql);
}else{
	$sql="update goods set is_on_sale=0 where goods_id=$goods_id";
	$model1=new Model();
	$model1->findbysql($sql);
}


$goodsnumber=new GoodsnumberModel();
$data = $goodsnumber->_facade($_POST); // 自动过滤
$data = $goodsnumber->_autoFill($data); 
$keys=array_keys($data);
$values=array_values($data);
for($i=0;$i<count($values[0]);$i++){
	for($j=0;$j<count($keys);$j++){
		$number[$keys[$j]]=$values[$j][$i];
	}
	$gn[]=$number;
}
$act=$_GET['act'];
if($act=="add"||$_POST['act']=="add"){
	foreach($gn as $v){
	$v['goods_id']=$_POST['goods_id'];
	$int[]=$goodsnumber->add($v);
	}
$goods=new GoodsModel();
$goods_number['goods_number']=$_POST['goods_number'];
$goods_int=$goods->update($goods_number,$_POST['goods_id']);
$smarty=new mySmarty();
$smarty->clearCache('goods.html',$goods_id);
$smarty->clearCache('index.html');
header("location:information.php?title=商品数量成功&href1=goodslist.php&row=2&content1=商品列表&href2=goodsadd.php&content2=添加新商品");
}else{

	foreach($gn as $v){
	$v['goods_id']=$_POST['goods_id'];
	$int[]=$goodsnumber->update($v,$v['goods_number_id']);
	}
	$goods=new GoodsModel();
	$goods_number['goods_number']=$_POST['goods_number'];
	$goods_int=$goods->update($goods_number,$_POST['goods_id']);
	 $smarty=new mySmarty();  
     $smarty->clearAllCache();
	header("location:information.php?title=编辑商品成功&href1=goodslist.php&row=1&content1=商品列表");
}
