<?php
/****
author: zwj
url: http://www.boolshop.com
****/

define('ACC',true);
require("../include/init.php");
$act=$_GET['act'];
if($act=="add"){
  $goods_id=$_GET['goods_id'];
  $goods=new GoodsModel();
  $sql="select * from goods where is_delete=0";
  $goodsallid=$goods->findbysql($sql);
  $sql="select distinct goods_id from goods_number";
  $distinct_id=$goods->findbysql($sql);
  //去掉已发布商品的goods_id
  for($i=0;$i<count($goodsallid);$i++){
    for($j=0;$j<count($distinct_id);$j++){
      if($goodsallid[$i]['goods_id']==$distinct_id[$j]['goods_id']){
        unset($goodsallid[$i]);
      }
    }
  }
  $goods_result=$goods->find($goods_id);
  $goods_type_id=$goods_result['goods_type_id'];
  $goodsattr=new GoodsAttrModel();
  $goodsattr_result=$goodsattr->getAll_goodsattr_attr_show_in_front($goods_type_id,$goods_id);
  foreach($goodsattr_result as $v){
    $attr_value[$v['attr_name']]=explode(",",$v['attr_value']);
  }
  $goodscolor=new GoodscolorModel();
  $goodscolor_result=$goodscolor->find($goods_id);
  foreach($goodscolor_result as $v){
    static $i=0;
    $goodsnumber[$i]['goods_color_img']=$v['goods_color_img'];
    $goodsnumber[$i]['goods_color_desc']=$v['goods_color_desc'];
    foreach($attr_value as $k=>$v){
      $goodsnumber[$i]['attr_name']=$k;

    }
    $i++;
  }

  //求两个数组的笛卡尔积
  function combineArray($arr1,$arr2)
   { 
       $result = array();
       foreach ($arr1 as $item1) {
          foreach ($arr2 as $item2) {
              $temp = $item1;
              $temp[] = $item2;
              $result[] = $temp;
          }
    }
      return $result;
     }
     foreach($attr_value as $k=>$v){
      $attr_values=$v;
     }
     if($goodsnumber==null){
        foreach($attr_values as $v){
          static $a=0;
          $goodsnumber[$a][0]=$v;
          $goodsnumber[$a]['attr_name']=$goodsattr_result[0]['attr_name'];
          $a++;
        }
     }else if($attr_values==null){
        $goodsnumber=$goodsnumber;
     }else{
      $goodsnumber=combineArray($goodsnumber,$attr_values);
    }
    $smarty=new mysmarty();
    $smarty->caching=false;
    $smarty->template_dir=ROOT."view/html/admin/";
    $smarty->assign('goodsnumber',$goodsnumber);
    $smarty->assign('goodsallid',$goodsallid);
    $smarty->assign('goods_id',$goods_id);
    $smarty->assign('act',$act);
    $smarty->display('goodsnumber.html');
}else{
  $goods_id=$_GET['goods_id'];
  $goods=new GoodsModel();
  $sql="select * from goods where is_delete=0";
  $goodsallid=$goods->findbysql($sql);
  $goods_number=$goods->find($goods_id);
  $goodsnumber2=new GoodsnumberModel();
  $sql="select * from goods_number where goods_id=$goods_id";
  $number=$goodsnumber2->findbysql($sql);
  $smarty=new mysmarty();
  $smarty->caching=false;
  $smarty->template_dir=ROOT."view/html/admin/";
  $smarty->assign('goodsnumber1',$number);
  $smarty->assign('number',$goods_number['goods_number']);
  $smarty->assign('goodsallid',$goodsallid);
  $smarty->assign('goods_id',$goods_id);
  $goods_id=$_GET['goods_id'];
  $goods=new GoodsModel();
  $sql="select * from goods where is_delete=0";
  $goodsallid=$goods->findbysql($sql);
  $goods_result=$goods->find($goods_id);
  $goods_type_id=$goods_result['goods_type_id'];
  $goodsattr=new GoodsAttrModel();
  $goodsattr_result=$goodsattr->getAll_goodsattr_attr_show_in_front($goods_type_id,$goods_id);
  foreach($goodsattr_result as $v){
    $attr_value[$v['attr_name']]=explode(",",$v['attr_value']);
  }
  $goodscolor=new GoodscolorModel();
  $goodscolor_result=$goodscolor->find($goods_id);
  foreach($goodscolor_result as $v){
    static $i=0;
    $goodsnumber[$i]['goods_color_img']=$v['goods_color_img'];
    $goodsnumber[$i]['goods_color_desc']=$v['goods_color_desc'];
    foreach($attr_value as $k=>$v){
      $goodsnumber[$i]['attr_name']=$k;

    }
    $i++;
  }

  //求两个数组的笛卡尔积
  function combineArray($arr1,$arr2)
   { 
       $result = array();
       foreach ($arr1 as $item1) {
          foreach ($arr2 as $item2) {
              $temp = $item1;
              $temp[] = $item2;
              $result[] = $temp;
          }
    }
      return $result;
     }
     foreach($attr_value as $k=>$v){
      $attr_values=$v;
     }
     if($goodsnumber==null){
        foreach($attr_values as $v){
          static $a=0;
          $goodsnumber[$a][0]=$v;
          $goodsnumber[$a]['attr_name']=$goodsattr_result[0]['attr_name'];
          $a++;
        }
     }else if($attr_values==null){
        $goodsnumber=$goodsnumber;
     }else{
      $goodsnumber=combineArray($goodsnumber,$attr_values);
    }
   $smarty->assign('goodsnumber',$goodsnumber);
  $smarty->display('goodsnumber.html');
}

 

?>