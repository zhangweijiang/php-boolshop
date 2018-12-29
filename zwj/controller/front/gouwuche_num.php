<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$act=$_POST['act'];
if($act=="select"){
$gouwuche=new GouwucheModel();
$gouwuche_id=$_POST['gouwuche_id'];
$num=$gouwuche->find($gouwuche_id);
$goods_id=$num['goods_id'];
$goods_color_img=$num['goods_color_img'];
$attr_value=$num['attr_value'];
$sql="select sum(number) as sum from goods_number where goods_id=$goods_id and attr_value='$attr_value' and goods_color_img='$goods_color_img'";
$result=$gouwuche->findbysql($sql);
	if(isset($result[0]['sum'])){
		echo json_encode($result[0]);
	}else{
		$sql="select goods_number as sum from goods where goods_id=$goods_id";
		$result=$gouwuche->findbysql($sql);
		echo json_encode($result[0]);
	}
}else if($act=="inc"){
	$gouwuche=new GouwucheModel();
	$gouwuche_id=$_POST['gouwuche_id'];
	$int=$gouwuche->incNum(1,$gouwuche_id);
	var_dump($int);
}else if($act=="dec"){
	$gouwuche=new GouwucheModel();
	$gouwuche_id=$_POST['gouwuche_id'];
	$int=$gouwuche->decNum(1,$gouwuche_id);
	var_dump($int);
}else if($act=="del"){
	$gouwuche=new GouwucheModel();
	$gouwuche_id=$_POST['gouwuche_id'];
	$int=$gouwuche->delete($gouwuche_id);
	var_dump($int);
}else if($act=="select1"){
	$gouwuche=new GouwucheModel();
	$gouwuche_id=$_POST['gouwuche_id'];
	$name=$_POST['session_username'];
	$sql="select * from gouwuche where gouwuche_id=$gouwuche_id and customer_name='$name'";
	$result=$gouwuche->findbysql($sql);
	echo json_encode($result[0]);
}else if($act=='sum_price'){
	$sum=0;
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$sql="select * from gouwuche where customer_name='$name'";
	$result=$gouwuche->findbysql($sql);
	foreach($result as $v){
		$sum=$sum+$v['shop_price']*$v['number'];
	}
	echo $sum;
}else if($act=="clear"){
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$sql="delete from gouwuche where customer_name='$name'";
	$result=$gouwuche->findbysql($sql);
}else if($act=='update'){
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$gouwuche_id=$_POST['gouwuche_id'];
	$data=$_POST;
	unset($data['act']);
	$gouwuche->update($data,$gouwuche_id);
}else if($act=='del_condition'){
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$gouwuche_id=$_POST['gouwuche_id'];
	$gouwuche->delete($gouwuche_id);
}else if($act=='remove_one'){
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$goods_id=$_POST['goods_id'];
	$gouwuche_id=$_POST['gouwuche_id'];
	$customer=new CustomerModel();
	$sql="select customer_id from customer where customer_name='$name'";
	$customer_result=$customer->findbysql($sql);
	$data['customer_id']=$customer_result[0]['customer_id'];
	$data['goods_id']=$goods_id;
	$model_goods=new Model();
	$sql1="select * from collect_goods where goods_id={$data['goods_id']}";
	$goods_result=$model_goods->findbysql($sql1);
	if(empty($goods_result)) {
		$data['add_time'] = time();
		$collect_goods = new CollectGoodsModel();
		$int = $collect_goods->add($data);
		$gouwuche->delete($gouwuche_id);
		//echo $int;
	}

}else if($act=='remove_all'){
	$gouwuche=new GouwucheModel();
	$name=$_POST['session_username'];
	$goods_id=$_POST['goods_id'];
	$gouwuche_id=$_POST['gouwuche_id'];
	$customer=new CustomerModel();
	$sql="select customer_id from customer where customer_name='$name'";
	$customer_result=$customer->findbysql($sql);
	$data['customer_id']=$customer_result[0]['customer_id'];
	$data['goods_id']=$goods_id;
	$model_goods=new Model();
	$sql1="select * from collect_goods where goods_id={$data['goods_id']}";
	$goods_result=$model_goods->findbysql($sql1);
	if(empty($goods_result)) {
		$data['add_time'] = time();
		$collect_goods = new CollectGoodsModel();
		$int = $collect_goods->add($data);
		//echo $int;
	}
	$gouwuche->delete($gouwuche_id);
}

?>