<?php
/**
 * User: zwj
 * Date: 2017/3/13
 * Time: 20:53
 */
define('ACC',true);
require('../include/init.php');
$model=new Model();
$sql="select money from money";
$result=$model->findbysql($sql);
include(ROOT.'/view/html/front/money.html');