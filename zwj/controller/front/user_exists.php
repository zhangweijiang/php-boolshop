<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$username="false";
if(isset($_SESSION['username'])){
	$username="true";
}
echo $username;
?>