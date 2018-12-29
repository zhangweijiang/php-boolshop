<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$customer=new CustomerModel();
function SHA512Hex($str){
	$re=hash('sha512', $str, true);
	return bin2hex($re);
}
$_POST['password']=SHA512Hex($_POST['password']);
$result=$customer->select();
$name_bool=false;
$telephone_bool=false;
foreach($result as $v){
	if($v['customer_name']==$_POST['customer_name']){
		$name_bool=true;
	}
	if($v['telephone']==$_POST['telephone']){
		$telephone_bool=true;
	}
}
$data=array();
$data=$customer->_facade($_POST);
$data=$customer->_autoFill($data);
$int=0;
if($name_bool==false&&$telephone_bool==false){
	$int=$customer->add($data);
}
if($int>0){
	header('location:login.php');
	exit;
}else{
	if($name_bool==true){
	echo '<script>window.location.href="register.php";alert("该会员名已被注册！");</script>';
	exit;
	}else if($telephone_bool==true){
	echo '<script>window.location.href="register.php";alert("该手机号已被注册！");</script>';
	exit;
	}
}
