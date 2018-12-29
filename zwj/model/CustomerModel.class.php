<?php
/****
author: zwj
url: http://www.boolshop.com
****/


class CustomerModel extends Model{
    protected $table = 'customer';
    protected $pk='customer_id';
     protected $fields = array('customer_name','password','email','telephone','security_question','security_answer');
      protected $_auto = array(
                            array('regtime','function','time')
                            );
    public function selectbyname($name,$pwd){
    	$sql="select * from ".$this->table." where customer_name='".$name."' and password='".$pwd."'";
    	 return $this->db->getAll($sql);
    }
    public function selectbyphone($phone,$pwd){
    	$sql="select * from ".$this->table." where telephone='".$phone."' and password='$pwd'";
    	 return $this->db->getAll($sql);
    }
}