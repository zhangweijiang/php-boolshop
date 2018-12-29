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
$model=new Model();
$customer_id=$_SESSION['customer_id'];
$sql="select * from comment join goods where comment.goods_id=goods.goods_id and customer_id=$customer_id";
$commentdata=$model->findbysql($sql);
$smarty->assign('commentdata',$commentdata);
$smarty->display('mycomment.html');