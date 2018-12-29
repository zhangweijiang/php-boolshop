<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 12:54
 */
define('ACC',true);
require('../include/init.php');
$action_id=$_GET['action_id'];
$model=new Model();
$sql="update order_action set order_status=3 where action_id=$action_id";
$model->findbysql($sql);
//设置商品为可评论状态
$sql="select * from order_goods join order_action on order_goods.order_id=order_action.order_id where action_id=$action_id";
$result=$model->findbysql($sql);
$customer_id=$_SESSION['customer_id'];
$arr=array();
for($i=0;$i<count($result);$i++){
    $arr[$i]['goods_id']=$result[$i]['goods_id'];
    $arr[$i]['customer_id']=$customer_id;
    $arr[$i]['status']=1;
}
$comment_statusModel=new Comment_statusModel();
foreach($arr as $v){
    $comment_statusModel->add($v);
}
$smarty=new MySmarty();
$smarty->clearAllCache();