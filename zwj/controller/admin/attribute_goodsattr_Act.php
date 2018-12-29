<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goodsattr=new GoodsAttrModel();
$attr=new AttributeModel();
$attr1=$attr->getAllByGoodsTypeId($_POST['goods_type_id']);
$attr2=$goodsattr->getAll_goodsattr_attr($_POST['goods_type_id'],$_POST['goods_id']);
foreach($attr1 as $k=>$v){
	$attr1[$k]['attr_value']="";
	for($i=0;$i<count($attr2);$i++){
		if($attr2[$i]['attr_id']==$v['attr_id']&&
			$attr2[$i]['attr_name']==$v['attr_name']){
			$attr1[$k]['attr_value']=$attr2[$i]['attr_value'];
			$attr1[$k]['goods_attr_id']=$attr2[$i]['goods_attr_id'];
		}

	}

}
 $smarty=new mySmarty();  
 $smarty->clearAllCache();
echo json_encode($attr1);
