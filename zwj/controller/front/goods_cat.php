<?php
/**
 * User: zwj
 * Date: 2017/4/7
 * Time: 10:12
 */
define('ACC',true);
require('../include/init.php');
$cat_id=$_GET['cat_id'];
// 取出栏目下的商品
$goods = new GoodsModel();
$goods_list = $goods->catGoods($cat_id,0,1000);
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
    if (!empty($goods_list)) {
        $smarty->assign('goods', $goods_list);
        $smarty->display('search_goods.html');
    }else{

        $smarty->display('goods_cat_none.html');
    }
