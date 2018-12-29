<?php
/**
 * User: zwj
 * Date: 2017/3/13
 * Time: 19:59
 */
define('ACC',true);
require('../include/init.php');
$money=new MoneyModel();
$data=$_POST;
$data['customer_id']=$_SESSION['customer_id'];
$customer_id=$data['customer_id'];
$sql="select * from money where customer_id=$customer_id";
$rs=$money->findbysql($sql);
if($rs){
   $money_id=$rs[0]['money_id'];
    $money_val=$_POST['money'];
   $sql="update money set money=money+ $money_val where money_id=$money_id";
    $money->findbysql($sql);
    echo '<script>parent.location.href="/zwj/controller/front/information.php"</script>';
}else{
    $money->add($data);
    echo '<script>parent.location.href="/zwj/controller/front/information.php"</script>';
}

