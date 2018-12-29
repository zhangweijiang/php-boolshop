<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 23:55
 */
define('ACC',true);
require('../include/init.php');
$model=new CommentModel();
$comment_id=$_POST['comment_id'];
$model->update($_POST,$comment_id);
header('location:/zwj/controller/admin/commentlist.php');