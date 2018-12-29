<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$title=$_GET['title'];
$href1=$_GET['href1'];
$content1=$_GET['content1'];
$row=$_GET['row'];
$smarty=new mysmarty();
$smarty->caching=false;
$smarty->template_dir=ROOT."view/html/admin/";
$smarty->assign('title',$title);
$smarty->assign('href1',$href1);
$smarty->assign('content1',$content1);
if($row==2){
	$href2=$_GET['href2'];
	$content2=$_GET['content2'];
	$smarty->assign('href2',$href2);
	$smarty->assign('content2',$content2);
}
if(isset($_GET['attr'])){
	$goods_type_id=$_GET['attr'];
	$smarty->assign('href1',$href1."?goods_type_id=".$goods_type_id);
	if(isset($href2)){$smarty->assign('href2',$href2."?id=".$goods_type_id);
	}
}
if(isset($_GET['cat_id'])){
	$cat_id=$_GET['cat_id'];
	$smarty->assign('href1',$href1."?cat_id=".$cat_id);
}
$href3=$_GET['href3'];
$href4=$_GET['href4'];
$goods_id=$_GET['goods_id'];
$smarty->assign('href3',$href3);
$smarty->assign('href4',$href4);
$smarty->assign('goods_id',$goods_id);
$smarty->assign('row',$row);
$smarty->display('information.html');