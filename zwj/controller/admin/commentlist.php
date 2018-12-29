<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 22:57
 */
define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else {
    $smarty = new mysmarty();
    $smarty->caching = false;
    $smarty->template_dir = ROOT . "view/html/admin/";
    $model = new Model();
    $sql = "select * from comment join goods on goods.goods_id=comment.goods_id join customer on comment.customer_id=customer.customer_id";
    $result = $model->findbysql($sql);
    $smarty->assign('result', $result);
    $smarty->display('commentlist.html');
}