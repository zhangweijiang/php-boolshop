<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else {
    $message = new MessageModel();
    $message->table('message');
    $result = $message->select_by_is_read();
    include(ROOT . 'view/html/admin/admin.html');
}








?>