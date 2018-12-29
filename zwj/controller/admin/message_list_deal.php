<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$model=new MessageModel();
$id=$_GET['id'];
$int=$model->updatebyid($id);
if($int>0){
	header('location:/zwj/controller/admin/message_list.php');
}else{
	var_dump($int);
}


?>