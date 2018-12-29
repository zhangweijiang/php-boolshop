<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");


/*
接收goods_id
调用trash方法
*/


if(isset($_GET['act']) && $_GET['act']=='show') {
    // 这个部分是打印所有的回收商品
    $goods = new GoodsModel();
    $goodslist = $goods->getTrash();
    $smarty=new mysmarty();
    $smarty->caching=false;
    $smarty->template_dir=ROOT."view/html/admin/";
    $smarty->assign('goodslist',$goodslist);
    $smarty->display('goodstrash.html');

} else {
    $goods_id = $_GET['goods_id'] + 0;
    $goods = new GoodsModel();

    if($goods->trash($goods_id)>0) {
        header('location:goodslist.php');
    } 
}
 $smarty=new mySmarty();
$smarty->clearCache('index.html');