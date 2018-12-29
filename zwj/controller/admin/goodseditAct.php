<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$goods = new GoodsModel();
$_POST['goods_weight'] *= $_POST['weight_unit'];
$uptool = new UpTool();
if(isset($_POST['promote_checked'])){
        $_POST['promote_start_date']=strtotime($_POST['promote_start_date']);
        $_POST['promote_end_date']=strtotime($_POST['promote_end_date']);
}else{
        $_POST['promote_start_date']=0;
        $_POST['promote_end_date']=0;
}
if($_POST['goods_type_id']==0){
    $_POST['goods_type_id']=null;
}
if($_POST['brand_id']==0){
    $_POST['brand_id']=null;
}
$data = array();
$data = $goods->_facade($_POST); // 自动过滤
$data = $goods->_autoFill($data); // 自动填充（先调用自动过滤再调用自动填充）
// 自动商品货号
if(empty($data['goods_sn'])) {
    $data['goods_sn'] = $goods->createSn();
}

/*if(!$goods->_validate($data)) {
    echo '数据不合法<br />';
    echo implode(',',$goods->getErr());
    exit;
}*/

//上传图片
if($_FILES['ori_img']['error']==0){
    $ori_img = $uptool->up('ori_img');
    if($ori_img===false){
        echo $uptool->getErr();
        echo '<br />';
        exit('商品图片上传失败');
    }

    if($ori_img) {
        $data['ori_img'] = $ori_img;
    }

    // 如果$ori_img上传成功,再次生成中等大小缩略图 300*400
    // 根据原始地址 定 中等图的地址
    // 例:aa.jpeg --> goods_aa.jpeg

    if($ori_img) {

        $ori_img = ROOT . $ori_img; // 加上绝对路径 

        $goods_img = dirname($ori_img) . '/goods_' . basename($ori_img);
        if(ImageTool::thumb($ori_img,$goods_img,420,420)) {
            $data['goods_img'] = str_replace(ROOT,'',$goods_img);
        }

        // 再次生成浏览时用缩略图 160*220
        // 定好缩略图的地址
        // aa.jpeg --> thumb_aa.jpeg
        $thumb_img = dirname($ori_img) . '/thumb_' . basename($ori_img);

        if(ImageTool::thumb($ori_img,$thumb_img,220,220)) {
            $data['thumb_img'] = str_replace(ROOT,'',$thumb_img);
        }
    }
}  
$goods_int=$goods->update($data,$data['goods_id']);
//goods_attr表属性的插入
$goods_id=$_POST['goods_id'];
if($_POST['goods_type_id']!=null){
        $arr=array();
        for($i=0;$i<count($_POST['attr_id']);$i++){
            if(!empty($_POST['attr_value'][$i])){
            $arr[]=array('attr_id'=>$_POST['attr_id'][$i]
                ,'attr_value'=>$_POST['attr_value'][$i]
                ,'goods_id'=>$goods_id,'goods_attr_id'=>
                $_POST['goods_attr_id'][$i]);
            }
        }
        $goodsattr=new GoodsAttrModel();
        for($j=0;$j<count($arr);$j++){
            if($arr[$j]['goods_attr_id']=="undefined"){ 
                unset($arr[$j]['goods_attr_id']);
                $goodsattr_insert_int=$goodsattr->add($arr[$j]);
            }else{
                $goodsattr_update_int=$goodsattr->update($arr[$j],$arr[$j]['goods_attr_id']);
            }
    }
}
//商品相册的插入
$goods_gallery=array();
$goods_gallery_img=$_FILES['goods_gallery_img'];
$goods_gallery_arr=$uptool->array_transfer($goods_gallery_img);
$goods_gallery_img_arr=$uptool->up_merge($goods_gallery_arr);
for($i=0;$i<count($goods_gallery_img_arr);$i++){
    $goods_gallery1['goods_gallery_img']=$goods_gallery_img_arr[$i];
    $goods_gallery1['goods_gallery_desc']=$_POST['goods_gallery_desc'][$i];
    $goods_gallery1['goods_id']=$goods_id;
    $goods_gallery_img_arr[$i] = ROOT . $goods_gallery_img_arr[$i]; // 加上绝对路径 
        $goods_gallery_thumb_img = dirname($goods_gallery_img_arr[$i]) . '/gallery_thumb_' . basename($goods_gallery_img_arr[$i]);
        if(ImageTool::thumb($goods_gallery_img_arr[$i],$goods_gallery_thumb_img,420,420)) {
            $goods_gallery1['goods_gallery_thumb_img'] = str_replace(ROOT,'',$goods_gallery_thumb_img);
        }
    $goods_gallery[]=$goods_gallery1;
}
$goodsgallery=new GoodsgalleryModel();
if(!empty($goods_gallery)){
    foreach($goods_gallery as $v){
    $goodsgallery_int=$goodsgallery->add($v);
    }
}
//商品相册的编辑
$goods_gallery_edit=null;
if($_POST['goods_gallery_desc_edit']){
    for($i=0;$i<count($_POST['goods_gallery_desc_edit']);$i++){
        $goods_gallery_edit[$i]['goods_gallery_desc']=$_POST['goods_gallery_desc_edit'][$i];
        $goods_gallery_edit[$i]['goods_gallery_id']=$_POST['goods_gallery_id'][$i];
    }
}
if(!empty($goods_gallery_edit)){
    foreach($goods_gallery_edit as $v){
        $goodsgallery->update($v,$v['goods_gallery_id']);
    }
}


//商品种类的插入
$goods_color=array();
$goods_color_img=$_FILES['goods_color_img'];
$goods_color_arr=$uptool->array_transfer($goods_color_img);
$goods_color_img_arr=$uptool->up_merge($goods_color_arr);
for($i=0;$i<count($goods_color_img_arr);$i++){
    $goods_color1['goods_color_img']=$goods_color_img_arr[$i];
    $goods_color1['goods_color_desc']=$_POST['goods_color_desc'][$i];
    $goods_color1['goods_id']=$goods_id;
    $goods_color_img_arr[$i] = ROOT . $goods_color_img_arr[$i]; // 加上绝对路径 
        $goods_color_thumb_img = dirname($goods_color_img_arr[$i]) . '/color_thumb_' . basename($goods_color_img_arr[$i]);
        if(ImageTool::thumb($goods_color_img_arr[$i],$goods_color_thumb_img,420,420)) {
            $goods_color1['goods_color_thumb_img'] = str_replace(ROOT,'',$goods_color_thumb_img);
        }
    $goods_color[]=$goods_color1;
}
$goodscolor=new GoodscolorModel();
if(!empty($goods_color)){
    foreach($goods_color as $v){
    $goodscolor_int=$goodscolor->add($v);
    }
    
}
//商品颜色的编辑
$goods_color_edit=null;
if($_POST['goods_color_desc_edit']){
    for($i=0;$i<count($_POST['goods_color_desc_edit']);$i++){
        $goods_color_edit[$i]['goods_color_desc']=$_POST['goods_color_desc_edit'][$i];
        $goods_color_edit[$i]['goods_color_id']=$_POST['goods_color_id'][$i];
    }
}
if(!empty($goods_color_edit)){
    foreach($goods_color_edit as $v){
        $goodscolor->update($v,$v['goods_color_id']);
    }
    //删除goods_number相对应的goods_id信息
    // $goodsnumber=new GoodsnumberModel();
    // $goodsnumber->deletebygoodid($goods_id);
}
$smarty=new mySmarty(); 
$smarty->clearAllCache();
header("location:information.php?title=编辑商品成功&href1=goodslist.php&row=1&content1=商品列表&href4=goodsnumber.php&goods_id=".$goods_id);




