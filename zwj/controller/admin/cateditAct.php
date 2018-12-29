<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



define('ACC',true);
require('../include/init.php');


// 接POST
// 判断合法性,同学们自己做.


$data = array();
if(empty($_POST['cat_name'])) {
    exit('栏目名不能为空');
}
$cat_id=$_POST['cat_id']+0;



/*
一个栏目A,不能修改成为A的子孙栏目的子栏目.

思考: 如果B是A的后代,则A不能成为B的子栏目.
反之, B是A的后代,则A是B的祖先


因此,我们为A设定一个新的父栏目时,设为N
我们可以先查N的 家谱树,N的家谱树里,如果有A

则子孙差辈了. 
*/



// 调用model 来更改
$cat = new CatModel();
$data = $cat->_facade($_POST);
// 查找新父栏目的家谱树
$trees = $cat->getTree($data['parent_id']);
// 判断自身是否在新父栏目的家谱树里面
$flag = true;
foreach($trees as $v) {
    if($v['cat_id'] == $cat_id) {
        $flag = false;
        break;
    }
}
if(!$flag) {
	header('location:information.php?title=所选择的上级分类不能是当前分类或者当前分类的下级分类!&href1=catedit.php&content1=返回上一页&row=1&cat_id='.$cat_id);
	exit;
}

$int=$cat->update($data,$cat_id);
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
header('location:information.php?title=商品分类编辑成功！&href1=catelist.php&content1=返回分类列表&row=1');
