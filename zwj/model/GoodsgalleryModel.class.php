<?php
/****
author: zwj
url: http://www.boolshop.com
****/


class GoodsgalleryModel extends Model{
    protected $table = 'goods_gallery';
    protected $pk="goods_gallery_id";
    protected $fields = array('goods_gallery_id','goods_id','goods_gallery_img','goods_gallery_thumb_img','goods_gallery_desc');
    public function find($id){
    	$sql="select * from goods_gallery where goods_id='$id'";
    	return $this->db->getAll($sql);
    }
    public function deletebygoodsid($id){
    	$sql="delete from goods_gallery where goods_id='$id'";
    	return $this->db->execute($sql);
    }
}