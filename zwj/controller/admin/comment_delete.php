<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 23:24
 */

define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else {
    $comment_id = $_GET['id'];
    $model = new Model();
    $sql = "delete from comment where comment_id=$comment_id";
    $model->findbysql($sql);
    header("location:/zwj/controller/admin/commentlist.php");
}