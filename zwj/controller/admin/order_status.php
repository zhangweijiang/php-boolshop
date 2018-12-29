<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$order_status=$_GET['order_status'];
$action_id=$_GET['action_id'];
$oa=new OrderActionModel();
if($order_status=='delete'){
$order_id=$oa->find($action_id);
$oa->delete($action_id);
$order_id=$order_id['order_id'];
$model=new Model();
$sql="delete from order_goods where order_id=$order_id";
$model->findbysql($sql);
    $sql="delete from order_action where order_id=$order_id";
    $model->findbysql($sql);
$sql="delete from order_info where order_id=$order_id";
$model->findbysql($sql);

}else if($order_status=='set2'){
$oa->set_status(2,$action_id);


}else{
	
}