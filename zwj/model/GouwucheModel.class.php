<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
class GouwucheModel extends Model{
	 protected $table = 'gouwuche';
	 protected $pk = 'gouwuche_id';
	 public function incNum($num,$id){
	 	$sql="update gouwuche set number=number+$num where gouwuche_id=$id";
	 	return $this->db->execute($sql);
	 }
	 public function decNum($num,$id){
	 	$sql="update gouwuche set number=number-$num where gouwuche_id=$id";
	 	return $this->db->execute($sql);
	 }


}