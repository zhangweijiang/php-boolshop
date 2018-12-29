<?php
/****
author: zwj
url: http://www.boolshop.com
 ****/
define('ACC',true);
require('../include/init.php');
$model=new Model();
$parent_id=$_POST['parent_id'];
$sql="select * from category where parent_id=$parent_id";
$result=$model->findbysql($sql);
echo json_encode($result);