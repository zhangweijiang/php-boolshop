<?php
/**
 * User: zwj
 * Date: 2017/3/13
 * Time: 23:13
 */
define('ACC',true);
require('../include/init.php');
$customer_id=$_GET['id'];
$model=new Model();
$sql="select * from customer where customer_id=$customer_id";
$customer_data=$model->findbysql($sql);
$userdata=$customer_data[0];
$smarty = new mysmarty();
$smarty->caching = false;
$smarty->template_dir = ROOT . "view/html/admin/";
$smarty->assign('userdata',$userdata);
$smarty->display('edit_user.html');

