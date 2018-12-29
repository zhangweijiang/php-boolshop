<?php
/****
author: zwj
url: http://www.boolshop.com
****/


/***
file cateaddAct.php
作用 接收cateadd.php表单页面发送来的数据
并调用model,把数据库入库
***/


define('ACC',true);
require('../include/init.php');




// 第一步,接数据
 //print_r($_POST);


// 第二步,检验数据
//$data = array();
/*if(empty($_POST['cat_name'])) {
    exit('栏目名不能为空');
}
if(empty($_POST['intro'])) {
	exit('栏目简介不能为空');
}*/



// 第三步,实例化model
// 并调用model的相关方法

$cat = new CatModel();
$data = array();
$data = $cat->_facade($_POST); // 自动过滤
if($cat->add($data)>0) {
    header('location:information.php?title=新商品分类添加成功&href1=cateadd.php&content1=继续添加分类&row=2&href2=catelist.php&content2=返回分类列表');
} 
