<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 9:54
 */
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
$smarty->assign('all_number',count($gouwuche_result));
$smarty->assign('gouwuche',$gouwuche_result);
$smarty->display('information.html');