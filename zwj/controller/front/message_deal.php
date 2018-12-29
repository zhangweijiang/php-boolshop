<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$model=new MessageModel();
$captcha=$_POST['captcha'];
if(strcasecmp($captcha,$_SESSION['captcha_string'])==0){
	$data=$model->_facade($_POST);
	var_dump($data);
	$data['add_time']=time();
	$int=$model->add($data);
	echo '<script>alert("提交成功，感谢您的参与！");window.location.href="/index.php";</script>';
}else{
	echo '<script>alert("对不起，你输入的验证码不正确，请重新输入！");window.location.href="/index.php";</script>';
	
}





?>