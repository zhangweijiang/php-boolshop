<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$id=$_GET['id'];
if(!isset($id)){
	$id=1;
}
if(!$smarty->isCached('message.html',$id)){
	$model=new LanmuModel();
	$model->table('about');
	$about_result=$model->select();
	$model->table('cases_cat');
	$cases_result=$model->select();
	$model->table('product_cat');
	$product_result=$model->select();
	$model->table('culture');
	$culture_result=$model->select();
	$model->table('news_cat');
	$news_result=$model->select();
	$model->table('joins');
	$joins_result=$model->select();
	$model->table('contact');
	$contact_result=$model->select();
	$contact_sub_result=$model->find($id);
	$smarty->assign('about_result',$about_result);
	$smarty->assign('cases_result',$cases_result);
	$smarty->assign('product_result',$product_result);
	$smarty->assign('culture_result',$culture_result);
	$smarty->assign('news_result',$news_result);
	$smarty->assign('joins_result',$joins_result);
	$smarty->assign('contact_result',$contact_result);
	$smarty->assign('contact_sub_result',$contact_sub_result);
}
$smarty->display('message.html',$id);



?>