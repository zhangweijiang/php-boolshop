<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 15:57
 */
define('ACC',true);
require('../include/init.php');
$smarty=new mysmarty();
$smarty->caching=false;
$customer_name = $_SESSION['username'];
$model = new Model();

    $sql = "select * from customer where customer_name='$customer_name'";
    $userdata = $model->findbysql($sql);
    $userdata=$userdata[0];
    $smarty->assign('userdata',$userdata);


$smarty->display('user_info1.html');
?>