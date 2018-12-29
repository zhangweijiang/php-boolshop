<?php
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
session_destroy();
header('location:/index.php');
