<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$username=$_POST['username'];
function SHA512Hex($str){
	$re=hash('sha512', $str, true);
	return bin2hex($re);
}
$password=SHA512Hex($_POST['password']);
$ph_reg = "/^[1][345789]\\d{9}$/";
$name_reg="/^([a-zA-Z]|[\\x80-\\xff]){1}([a-zA-Z0-9]|[\\x80-\\xff]|[_]){1,20}$/";
$flag=0;
$bool="false";
if(preg_match($ph_reg,$username)){
	//flag=1代表username的值是手机号
	$flag=1;
}else if(preg_match($name_reg,$username)){
	//flag=2代表username的值是用户名
	$flag=2;
}else{
	$flag=0;
}
$customer=new CustomerModel();
if($flag===1){
	$result=$customer->selectbyphone($username,$password);
}else if($flag===2){
	$result=$customer->selectbyname($username,$password);
}
if(empty($result)){
	$bool="false";
}else{
	$bool="true";

	$_SESSION['username']=$result[0]['customer_name'];
	$_SESSION['customer_id']=$result[0]['customer_id'];
}
echo $bool;

