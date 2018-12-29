<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/

define('ACC',true);
require('../include/init.php');
include(ROOT.'controller/include/config.inc.php');
$root=$_CFG['user'];
$pwd=$_CFG['pwd'];
$db=$_CFG['db'];
$filename=$_POST['filename'];
$filename=date('Ymdhis')."-".$filename.".sql";
$filename1=ROOT.'backup/'.$filename;
$model=new Model();
$model->select_sql('set global foreign_key_checks=off');
$sql="select @@basedir as basePath from dual";
$sql_basePath=$model->select_sql($sql);
$sql_basePath=str_replace('\\','/',$sql_basePath[0]['basePath'])."/bin/";
$sqldump="mysqldump -u$root -p$pwd $db>$filename1";
$bak=$sql_basePath.$sqldump;
exec($bak);

header('location:/zwj/controller/admin/success_backup.php?filename='.$filename."&content=备份成功");
?>