<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
if($_POST['act']=='buy'){
	$data=$_POST;
	unset($data['act']);
	$gouwuche=new GouwucheModel();
	$gouwuche_result=$gouwuche->select();
	/***
	判断该商品是否存在，存在update，
	不存在就add,status为true就update
	***/
	$status=false;
	if(!empty($_POST['customer_name'])){
		$customer_name=$_POST['customer_name'];
		$data['customer_name']=$customer_name;
		
	}else{
		$customer_name=$_SESSION['username'];
		$data['customer_name']=$customer_name;
		
	}
	foreach($gouwuche_result as $v){
		if($data['goods_color_img']!=""&&$data['attr_value']!="") {
			if ($v['goods_id'] == $data['goods_id'] && $v['goods_color_img'] == $data['goods_color_img'] && $v['attr_value'] == $data['attr_value'] && $v['customer_name'] == $customer_name) {
				$status = true;
				$gouwuche_id = $v['gouwuche_id'];
			}
		}else if($data['goods_color)img']!=""){
			if ($v['goods_id'] == $data['goods_id'] && $v['goods_color_img'] == $data['goods_color_img'] && $v['customer_name'] == $customer_name) {
				$status = true;
				$gouwuche_id = $v['gouwuche_id'];
			}
		}else if($data['attr_value']!=""){
			if ($v['goods_id'] == $data['goods_id'] && $v['attr_value'] == $data['attr_value'] && $v['customer_name'] == $customer_name) {
				$status = true;
				$gouwuche_id = $v['gouwuche_id'];
			}
		}else{
			if ($v['goods_id'] == $data['goods_id'] && $v['customer_name'] == $customer_name) {
				$status = true;
				$gouwuche_id = $v['gouwuche_id'];
			}
		}
	}
	if($status==true){
		$gouwuche=new GouwucheModel();
		//$gouwuche_id=$_POST['gouwuche_id'];
		$num=$gouwuche->find($gouwuche_id);
		$goods_id=$num['goods_id'];
		$goods_color_img=$num['goods_color_img'];
		$attr_value=$num['attr_value'];
		$sql="select sum(number) as sum from goods_number where goods_id=$goods_id and attr_value='$attr_value' and goods_color_img='$goods_color_img'";
		$result=$gouwuche->findbysql($sql);
		if(isset($result[0]['sum'])){
		$number=$result[0]['sum']-$num['number'];
			if($_POST['number']<=$number){
				$number=$_POST['number'];
			}
		}else{
			$sql="select goods_number from goods where goods_id=$goods_id";
			$result=$gouwuche->findbysql($sql);
			$number=$result[0]['goods_number']-$num['number'];
				if($_POST['number']<=$number){
				$number=$_POST['number'];
				}
		}
		$int=$gouwuche->incNum($number,$gouwuche_id);
	}else{
		if($data['goods_color_img']==""){
			$model=new Model();
			$goods_id=$_POST['goods_id'];
			$sql="select * from goods where goods_id=$goods_id";
			$result=$model->findbysql($sql);
			$data['goods_color_img']=$result[0]['goods_img'];
		}
		$int=$gouwuche->add($data);
	}
}
?>