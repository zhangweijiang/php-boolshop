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
$model=new Model();
$sql_file=ROOT."backup/".$_POST['file'];
$sql="select @@basedir as basePath from dual";
$sql_basePath=$model->select_sql($sql);
$sql_basePath=$sql_basePath[0]['basePath']."/bin/";
$rec=$sql_basePath."mysql -u$root -p$pwd shop<$sql_file";
exec($rec,$log,$status);
$smarty=new mySmarty();
           $smarty->clearAllCache();
         

?>
