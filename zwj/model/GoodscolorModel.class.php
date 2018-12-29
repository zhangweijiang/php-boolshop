<?php
/****
author: zwj
url: http://www.boolshop.com
****/


class GoodscolorModel extends Model{
    protected $table = 'goods_color';
    protected $pk="goods_color_id";
    protected $fields = array('goods_color_id','goods_id','goods_color_img','goods_color_desc','goods_color_thumb_img');
    public function find($id){
    	$sql="select * from goods_color where goods_id='$id'";
    	return $this->db->getAll($sql);
    }
    public function deletebygoodsid($id){
    	$sql="delete from goods_color where goods_id='$id'";
    	return $this->db->execute($sql);
    }
}