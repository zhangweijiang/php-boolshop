<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
class GoodsTypeModel extends Model{
    protected $table = 'goods_type';
    protected $pk = 'goods_type_id';
      protected $fields = array('goods_type_id','goods_type_name','enabled','goods_type_desc','attr_group');
  // 获取本表下面所有的数据
    public function select() {
        $sql = 'select * from ' .  $this->table;
        return $this->db->getAll($sql);
    }
    // 获取goods_type表的商品类型名称，属性分组和attribute表的属性的数（count(*)）
    public function getAll(){
    	$sql="select goods_type.goods_type_id,goods_type_name,attr_group,count(attr_id)
    	as attr_count from goods_type left join attribute on goods_type.goods_type_id=
    	 attribute.goods_type_id group by goods_type.goods_type_id";
    	 return $this->db->getAll($sql);
    }
}

?>