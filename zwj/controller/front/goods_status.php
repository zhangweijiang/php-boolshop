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
$search_type=$_POST['search_type'];
$goods_status=$_GET['goods_status'];
if($goods_status=='is_new'){

    $goodsmodel=new GoodsModel();
    $sql="select * from goods where is_new=1";
    $goods=$goodsmodel->findbysql($sql);
    if(!empty($goods)){
        $smarty->assign('goods',$goods);
        $smarty->assign('goods_status',"is_new");
        $smarty->display('goods_status.html');
    }
}else if($goods_status=='is_best'){
    $goodsmodel=new GoodsModel();
    $sql="select * from goods where is_best=1";
    $goods=$goodsmodel->findbysql($sql);
    if(!empty($goods)){
        $smarty->assign('goods',$goods);
        $smarty->assign('goods_status',"is_best");
        $smarty->display('goods_status.html');
    }
}else if($goods_status=='is_hot'){
    $goodsmodel=new GoodsModel();
    $sql="select * from goods where is_hot=1";
    $goods=$goodsmodel->findbysql($sql);
    if(!empty($goods)){
        $smarty->assign('goods',$goods);
        $smarty->assign('goods_status',"is_hot");
        $smarty->display('goods_status.html');
    }
}