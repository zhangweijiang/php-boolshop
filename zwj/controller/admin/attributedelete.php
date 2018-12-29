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
 $id = $_POST['id'];
 $attr = new AttributeModel();
 $int = $attr->delete($id);
 $smarty = new mySmarty();
 $smarty->clearAllCache();
 echo $int;
}
