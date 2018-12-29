<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$smarty = new mySmarty();
$goods_id=$_GET['goods_id'];
if(!$smarty->isCached('goods.html',$goods_id)){
	$goodsmodel=new GoodsModel();
	$goods=$goodsmodel->find($goods_id);
	$goodsattr=new GoodsAttrModel();
	$goods_all_attr=$goodsattr->getAll_goodsattr_attr($goods['goods_type_id'],$goods['goods_id']);
	$goodsnumber=new GoodsnumberModel();
	$sql="select distinct attr_value from goods_number where goods_id=$goods_id";
	$attr_value=$goodsnumber->findbysql($sql);
	$smarty->assign('goods',$goods);
	$smarty->assign('attr_value',$attr_value);
	$sql="select distinct attr_name from goods_number where goods_id=$goods_id";
	$attr_name=$goodsnumber->findbysql($sql);
	$smarty->assign('attr_name',$attr_name);
	//获得商品相册
	$goodsgallery=new GoodsgalleryModel();
	$goodsgallery=$goodsgallery->find($goods_id);
	$smarty->assign('goodsgallery',$goodsgallery);
	$sql="select distinct goods_color_img,goods_color_desc from goods_number where goods_id=$goods_id";
	$goodscolor=$goodsnumber->findbysql($sql);
	
	$smarty->assign('goodscolor',$goodscolor);
	//获得商品的所有属性
	$smarty->assign('goods_all_attr',$goods_all_attr);
	//获得头部和尾部的url
	$smarty->assign('header',ROOT.'view/html/front/header.html');
	$smarty->assign('footer',ROOT.'view/html/front/footer.html');
}
//判断$_GET['goods_id']是否存在
$goodsmodel=new GoodsModel();
$goods_id_bool=$goodsmodel->find($goods_id);
if($goods_id_bool===false){
	header('location:/zwj/controller/front/goods_none.php?goods_id='.$goods_id);
	exit;
}
$uri=$_SERVER['REQUEST_URI'];
if(!isset($_COOKIE['history'])){//第一次
	$his[]=$uri;
}else{//第n次
	$his=explode('|',$_COOKIE['history']);
	array_unshift($his,$uri);
	$his=array_unique($his);
}
setcookie('history',implode('|', $his));
array_shift($his);
foreach($his as $v){
	$parse = parse_url($v);
	parse_str($parse['query'],$output);
	$goods_id_in[]=$output['goods_id'];
}
$goodsmodel=new GoodsModel();
$goods_in=$goodsmodel->findbygoods_id_in($goods_id_in);
$smarty->assign('goods_in',$goods_in,true);
//header里面的购物车
$gouwuche=new GouwucheModel();
$username=$_SESSION['username'];
$sql="select * from gouwuche where customer_name='$username'";
$gouwuche_result=$gouwuche->findbysql($sql);
$smarty->assign('all_number',count($gouwuche_result));
$smarty->assign('gouwuche',$gouwuche_result);
//判断是否可评论
$model=new Model();
$customer_id=$_SESSION['customer_id'];
$sql="select * from comment_status where status=1 and goods_id=$goods_id and customer_id=$customer_id";
$comment_statusdata=$model->findbysql($sql);
if(!empty($comment_statusdata)){
	$smarty->assign('comment_status',1);
}else{
	$smarty->assign('comment_status',0);
}
//获取评论的内容
$model=new Model();
$sql="select * from comment join customer on comment.customer_id=customer.customer_id where goods_id=$goods_id";
$comment=$model->findbysql($sql);
$smarty->assign('comment',$comment);
$smarty->assign('comment_num',count($comment));
$smarty->display('goods.html',$goods_id);
?>