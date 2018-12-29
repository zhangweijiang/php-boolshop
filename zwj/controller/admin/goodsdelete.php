<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods_id=$_GET['goods_id'];
$goods=new GoodsModel();
//属性删除
$goodsattr=new GoodsAttrModel();
$goodsattrint=$goodsattr->deletebygoodsid($goods_id);
//商品相册删除
$goodsgallery=new GoodsgalleryModel();
$goodsgallery->deletebygoodsid($goods_id);
//商品种类删除
$goodscolor=new GoodscolorModel();
$goodscolor->deletebygoodsid($goods_id);
//商品数量删除
$goodsnumber=new GoodsnumberModel();
$goodsnumber->deletebygoodid($goods_id);
//collect_goods表的对应goods_id删除
$model=new Model();
$sql="delete from collect_goods where goods_id=$goods_id";
$model->findbysql($sql);
//order_goods表的删除
$sql="delete from order_goods where goods_id=$goods_id";
$model->findbysql($sql);
//商品删除
$goodsint=$goods->delete($goods_id);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
if($goodsint>0){
	header("location:goodstrash.php?act=show");
}