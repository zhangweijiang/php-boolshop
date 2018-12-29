<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 12:54
 */
define('ACC',true);
require('../include/init.php');
$id=$_GET['id'];
$model=new Model();
$sql="delete from message where id=$id";
$model->findbysql($sql);