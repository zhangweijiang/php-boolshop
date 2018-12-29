<?php
header("Content-Type:text/html;charset=utf-8");
/****
author: zwj
url: http://www.boolshop.com
****/

/*
file init.php
作用:框架初始化
*/

// 初始化当前的绝对路径
// 换成正斜线是因为 win/linux都支持正斜线,而linux不支持反斜线
defined('ACC')||exit('ACC Denied');
define('ROOT',str_replace('\\','/',dirname(dirname(dirname(__FILE__)))) . '/');
define('DEBUG',true);

require(ROOT . 'controller/include/lib_base.php');

//ROOT----localhost/zwj/
require(ROOT.'controller/include/mysmarty.php');
function __autoloadBool($class) {
    if(strtolower(substr($class,-5)) == 'model') {
        require(ROOT . 'model/' . $class . '.class.php');
    } else if(strtolower(substr($class,-4)) == 'tool') {
        require(ROOT . 'controller/tool/' . $class . '.class.php');
    } else {
        require(ROOT . 'controller/include/' . $class . '.class.php');
    }
}
spl_autoload_register('__autoloadBool');


// 过滤参数,用递归的方式过滤$_GET,$_POST,$_COOKIE,暂时不会
$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);



// 开启session
session_start();

// 设置报错级别


if(defined('DEBUG')) {
    error_reporting(E_ALL&~E_NOTICE&~E_STRICT&~E_WARNING);
} else {
    error_reporting(0);
}
