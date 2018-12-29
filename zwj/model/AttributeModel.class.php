<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
class AttributeModel extends Model{
	 protected $table = 'attribute';
	 protected $pk = 'attr_id';
	  protected $fields = array('attr_id','attr_name','attr_values','goods_type_id','attr_input_type','show_in_front');
	 //通过goods_type.goods_type_id查询数据
	 public function getAllById($id) {
	 	$sql="select show_in_front,attr_id,attr_name,goods_type.
	 	goods_type_id,goods_type_name,attr_input_type,attr_values from goods_type 
	 	join attribute on goods_type.goods_type_id=attribute.goods_type_id and 
	 	goods_type.goods_type_id=".$id;   
	 	return $this->db->getAll($sql);
    }
     
    public function getAll() {
	 	$sql="select show_in_front,attr_id,attr_name,goods_type.
	 	goods_type_id,goods_type_name,attr_input_type,attr_values from goods_type 
	 	join attribute on goods_type.goods_type_id=attribute.goods_type_id order by goods_type.goods_type_id";   
	 	return $this->db->getAll($sql);
    }
       public function getAllByGoodsTypeId($id){
    	$sql="select * from attribute where goods_type_id=".$id;
    	return $this->db->getAll($sql);
    }
    public function deletebygoodstypeid($id){
    	$sql="delete from attribute where goods_type_id=".$id;
    	return $this->db->execute($sql);
    }

}
