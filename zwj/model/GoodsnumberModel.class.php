<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
class GoodsnumberModel extends Model{
	 protected $table = 'goods_number';
	 protected $pk = 'goods_number_id';
	  protected $fields = array('goods_number_id','goods_color_img','goods_color_desc','attr_name','attr_value','number');
	public function deletebygoodid($id){
		$sql="delete from goods_number where goods_id=".$id;
    	return $this->db->execute($sql);
	}

}
