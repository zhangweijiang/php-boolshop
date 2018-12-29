<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
if(isset($_GET['act'])){
	$act=$_GET['act'];
}else{
	$act=$_POST['act'];
}
if($act=='jiesuan'){
	$gouwuche_id=$_GET['gouwuche_id'];
	$smarty = new mySmarty();
	$smarty->assign('header',ROOT.'view/html/front/header1.html');
	$smarty->assign('footer',ROOT.'view/html/front/footer.html');
	//header里面的购物车
	$gouwuche=new GouwucheModel();
	$username=$_SESSION['username'];
	$sql="select * from gouwuche where customer_name='$username' and gouwuche_id in($gouwuche_id)";
	$gouwuche_result=$gouwuche->findbysql($sql);
	$smarty->assign('gouwuche',$gouwuche_result);
	$smarty->assign('all_number',count($gouwuche_result));
    $smarty->display('tijiaoorder.html');
}else if($act=='tijiao'){
	$str="";
	if($_POST['province']!='0'){
		if($_POST['province']=='北京'||$_POST['province']=='天津'||$_POST['province']=='上海'||$_POST['province']=='重庆'){
			$str.=$_POST['province'].'市';
		}else{
			$str.=$_POST['province'].'省';
		}

	}
	if($_POST['city']!='0'){
		if($_POST['province']=='北京'||$_POST['province']=='天津'||$_POST['province']=='上海'||$_POST['province']=='重庆'){
			$str.=$_POST['city'];
		}else{
			$str.=$_POST['city'].'市';
		}

	}
	if($_POST['country']!='0'){
		$str.=$_POST['country'];
	}
	$order_info=array();
	$order_info['zone']=$str;
	$order_info['reciver']=$_POST['reciver'];
	$order_info['address']=$_POST['address'];
	$order_info['zipcode']=$_POST['zipcode'];
	$order_info['tel']=$_POST['tel'];
	$order_info['email']=$_POST['email'];
	$order_info['mobile']=$_POST['mobile'];
	$order_info['customer_name']=$_SESSION['username'];
	$order_info['customer_id']=(int)$_SESSION['customer_id'];
	$order_info['add_time']=time();
	$order_info['order_sn']=date('Ymd') . mt_rand(10000,99999);
	$order_info['subtotal']=(float)($_POST['subtotal']);
	//order_info表的出入
	$oimodel=new OIModel();
	$oimodel->add($order_info);
	$order_id=(int)$oimodel->insert_id();
	//order_status属性值0表示未付款，1表示已付款未发货，2表示已发货，3表示已完成
	$order_action=array();
	$order_action['order_status']=0;
	$order_action['order_id']=$order_id;
	$orderaction=new OrderActionModel();
	$orderaction->add($order_action);
	//order_goods
	$data['goods_id']=$_POST['goods_id'];
	$data['goods_color_desc']=$_POST['goods_color_desc'];
	$data['goods_color_img']=$_POST['goods_color_img'];
	$data['attr_name']=$_POST['attr_name'];
	$data['attr_value']=$_POST['attr_value'];
	$data['shop_price']=$_POST['shop_price'];
	$data['number']=$_POST['number'];
	$keys=array_keys($data);
	$data=array_values($data);
	for($i=0;$i<count($data[0]);$i++){
		for($j=0;$j<count($keys);$j++){
			$order[$keys[$j]]=$data[$j][$i];
			$order['order_id']=$order_id;
		}
		$order_goods[]=$order;
	}
	//order_goods表的插入
	$ordergoods=new OGModel();
	foreach($order_goods as $og){
		$ordergoods->add($og);
	}
	$gouwuche_id=$_POST['gouwuche_id'];
	//删除gouwuche表里对应的gouwuche_id
	$gouwuche=new GouwucheModel();
	foreach($gouwuche_id as $gi){
		$gouwuche->delete($gi);
	}
	//生成订单号
	$ordersn=$oimodel->find($order_id);
	$goods_id=$_POST['goods_id'];
	$goods_id=implode(',',$goods_id);
	$number=$_POST['number'];
	$number=implode(',',$number);
	$goods_color_img=$_POST['goods_color_img'];
	$goods_color_img=implode(',',$goods_color_img);
	$attr_name=$_POST['attr_name'];
	$attr_name=implode(',',$attr_name);
	$attr_value=$_POST['attr_value'];
	$attr_value=implode(',',$attr_value);
	header('location:/zwj/controller/front/zhifu.php?order_sn='.$ordersn['order_sn'].'&order_id='.$order_id.'&goods_id='.$goods_id.'&number='.$number.'&goods_color_img='.$goods_color_img.'&attr_name='.$attr_name.'&attr_value='.$attr_value);
	exit;
		
}