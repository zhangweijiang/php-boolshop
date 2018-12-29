<?php
/****
author: zwj
url: http://www.boolshop.com
****/



defined('ACC')||exit('Acc Deined');


class OrderActionModel extends Model {
    protected $table = 'order_action';
    protected $pk = 'action_id';
    protected $fields = array('action_id','order_id','order_status',);
    public function order_status($status,$id){
        $sql="update order_action set order_status=$status where order_id=$id";
         return $this->db->execute($sql);
    }
    public function set_status($status,$id){
        $sql="update order_action set order_status=$status where action_id=$id";
         return $this->db->execute($sql);
    }
    
}


