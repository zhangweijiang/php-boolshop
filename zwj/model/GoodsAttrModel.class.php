<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
class GoodsAttrModel extends Model{
	 protected $table = 'goods_attr';
	 protected $pk = 'goods_attr_id';
	 protected $fields = array('goods_attr_id','goods_id','attr_value','attr_id');
	 public function getAll_goodsattr_attr($id1,$id2){
    	$sql="select goods_attr_id,goods_id,goods_type_id,attribute.attr_id,attr_name,attr_value,attr_values,attr_input_type,
    	 attr_value from goods_attr right join attribute  on attribute.attr_id=goods_attr
    	 .attr_id where goods_type_id=".$id1." and goods_id=".$id2;
    	return $this->db->getAll($sql);
    }
    public function getAll_goodsattr_attr_show_in_front($id1,$id2){
        $sql="select show_in_front,goods_attr_id,goods_id,goods_type_id,attribute.attr_id,attr_name,attr_value,attr_values,attr_input_type,
         attr_value from goods_attr right join attribute  on attribute.attr_id=goods_attr
         .attr_id where goods_type_id=".$id1." and goods_id=".$id2." and show_in_front=1 limit 0,1";
        return $this->db->getAll($sql);
    }
    public function deletebygoodsid($id){
    	$sql="delete from goods_attr where goods_id=".$id;
    	 return $this->db->execute($sql);
    }
    public function getSize($goods_id,$attr_name){
        $sql="select attribute.attr_id,attr_value from attribute join goods_attr on
         attribute.attr_id=goods_attr.attr_id and goods_attr.goods_id=
         '$goods_id' and attr_name='$attr_name'";
         return $this->db->getRow($sql);
    }
}
