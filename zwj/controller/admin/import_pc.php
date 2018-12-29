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
if(!empty($_FILES['file']['name'])){

	$extend_name=end(explode('.',$_FILES['file']['name']));
	if($extend_name!=="sql"){
		header('location:/zwj/view/html/admin/error_extend.html');
		exit;
	}
	$sql_file=ROOT."backup/".$_FILES['file']['name'];
}else{
	header('location:/zwj/view/html/admin/error_file.html');
	exit;
	
}

$sql="select @@basedir as basePath from dual";
$sql_basePath=$model->select_sql($sql);
$sql_basePath=$sql_basePath[0]['basePath']."/bin/";
$rec=$sql_basePath."mysql -u$root -p$pwd shop<$sql_file";
exec($rec,$log,$status);
$smarty=new mySmarty();
       $smarty->clearAllCache();
if($status!=0){
	header('location:/zwj/view/html/admin/error_sql.html');
	
}else{
	header('location:/zwj/view/html/admin/success_recover_bak.html');
	
}

?>
