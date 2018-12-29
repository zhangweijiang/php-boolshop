<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goodsgallery=new GoodsgalleryModel();
$goods_gallery_id=$_POST['goods_gallery_id'];
$int=0;
if(!empty($goods_gallery_id)){
	foreach($goods_gallery_id as $v){
	$int=$goodsgallery->delete($v);
	}
}
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
echo $int;