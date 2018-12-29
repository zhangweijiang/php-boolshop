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
    $comment_id = $_GET['id'];
    $sql = "select * from comment join customer on comment.customer_id=customer.customer_id where comment_id=$comment_id";
    $result = $model->findbysql($sql);
    $smarty->assign('result', $result[0]);
    $smarty->display('comment_detail.html');
}