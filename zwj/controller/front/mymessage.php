<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 13:17
 */
define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$smarty->caching=false;
$customer_name=$_SESSION['username'];
$model=new Model();
$sql="select * from message where customer_name='$customer_name'";
$messagedata=$model->findbysql($sql);
$smarty->assign('messagedata',$messagedata);
$smarty->display('mymessage.html');
