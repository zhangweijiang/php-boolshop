<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/

define('ACC',true);
require('../include/init.php');
include(ROOT.'controller/include/config.inc.php');
echo htmlspecialchars(file_get_contents(ROOT.'backup/'.$_GET['filename']));