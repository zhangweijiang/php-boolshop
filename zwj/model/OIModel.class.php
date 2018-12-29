<?php
/****
author: zwj
url: http://www.boolshop.com
****/



defined('ACC')||exit('Acc Deined');


class OIModel extends Model {
    protected $table = 'order_info';
    protected $pk = 'order_id';
    protected $fields = array('order_id','order_sn','customer_id','customer_name','zone','address','zipcode','reciver','email','tel','mobile','add_time','subtotal');

    
    
}


