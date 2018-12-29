<?php
/**
 * User: zwj
 * Date: 2017/4/6
 * Time: 14:57
 */
define('ACC',true);
require('../include/init.php');
$collect_id=$_POST['collect_id'];
$model=new Model();
$sql="delete from collect_goods where collect_id=$collect_id";
$int=$model->findbysql($sql);
