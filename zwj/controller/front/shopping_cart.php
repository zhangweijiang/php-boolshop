<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
 
define('ACC',true);
require('../include/init.php');

   
 

	$smarty = new mySmarty();
	$smarty->assign('header',ROOT.'view/html/front/header.html');
	$smarty->assign('footer',ROOT.'view/html/front/footer.html');
//header里面的购物车
	$gouwuche=new GouwucheModel();
	$username=$_SESSION['username'];
	$sql="select * from gouwuche where customer_name='$username'";
	$gouwuche_result=$gouwuche->findbysql($sql);
	$smarty->assign('gouwuche',$gouwuche_result);
	$smarty->assign('all_number',count($gouwuche_result));
    $smarty->display('shopping_cart.html');
