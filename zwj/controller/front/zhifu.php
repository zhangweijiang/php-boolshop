<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$smarty = new mySmarty();
$smarty->assign('header',ROOT.'view/html/front/header1.html');
	$smarty->assign('footer',ROOT.'view/html/front/footer.html');
$goods_id=$_GET['goods_id'];
$number=$_GET['number'];
$goods_color_img=$_GET['goods_color_img'];
$attr_name=$_GET['attr_name'];
$attr_value=$_GET['attr_value'];
$goods_id=explode(',',$goods_id);
$number=explode(',',$number);
$goods_color_img=explode(',',$goods_color_img);
$attr_name=explode(',',$attr_name);
$attr_value=explode(',',$attr_value);
$arr=array();
for($i=0;$i<count($goods_id);$i++){
	$arr[$i]['goods_id']=$goods_id[$i];
	$arr[$i]['number']=$number[$i];
	$arr[$i]['goods_color_img']=$goods_color_img[$i];
	$arr[$i]['attr_name']=$attr_name[$i];
	$arr[$i]['attr_value']=$attr_value[$i];
}
$model=new Model();
foreach($arr as $v){
	if($v['goods_color_img']||$v['attr_name']){
		//判断是否更新goods表的数量
		$goods_status=1;
		$number=$v['number'];
		$goods_color_img=$v['goods_color_img'];
		$attr_name=$v['attr_name'];
		$attr_value=$v['attr_value'];
		$goods_id=$v['goods_id'];
		//更新goods_number表的数量
		$sql="update goods_number set number=number-$number where goods_color_img='$goods_color_img' and attr_name='$attr_name' and attr_value='$attr_value' and goods_id=$goods_id";
		$model->findbysql($sql);
		//更新goods表的数量
		$sql="update goods set goods_number=goods_number-$number where goods_id=$goods_id";
		$model->findbysql($sql);

	}else{
		$number=$v['number'];
		$goods_id=$v['goods_id'];
		$sql="update goods set goods_number=goods_number-$number where goods_id=$goods_id";
		$model->findbysql($sql);
	}
}
//var_dump($arr);$arr为goods_id和number的二维数组
//header里面的购物车
	$gouwuche=new GouwucheModel();
	$username=$_SESSION['username'];
	$sql="select * from gouwuche where customer_name='$username'";
	$gouwuche_result=$gouwuche->findbysql($sql);
	$smarty->assign('all_number',count($gouwuche_result));
	$smarty->assign('gouwuche',$gouwuche_result);
	$order_sn=$_GET['order_sn'];
	$order_id=$_GET['order_id'];
	$smarty->assign('order_id',$order_id);
	$smarty->assign('order_sn',$order_sn);
	//清楚缓存，同步good.html的库存数量
$smarty->clearAllCache();
	$smarty->display('zhifu.html');
?>