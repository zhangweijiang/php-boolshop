<?php
/****
author: zwj
url: http://www.boolshop.com
****/
defined('ACC')||exit('ACC Denied');
class Model {
    protected $table = NULL; // 是model所控制的表
    protected $db = NULL; // 是引入的mysql对象

    protected $pk = '';
    protected $fields = array();
    protected $_auto = array();
    protected $_valid = array();
    protected $error = array();

    public function __construct() {
        $this->db = mysql::getIns();
    }

    public function table($table) {
        $this->table = $table;
    }


    /*
        自动过滤:
        负责把传来的数组
        清除掉不用的单元
        留下与表的字段对应的单元
        思路:
        循环数组,分别判断其key,是否是表的字段
        自然,要先有表的字段.

        表的字段可以desc表名来分析
        也可以手动写好 
        以tp为例,两者都行.

        先手动写
    */
    public function _facade($array=array()) {
        $data = array();
        foreach($array as $k=>$v) {
            if(in_array($k,$this->fields)) {  // 判断$k是否是表的字段
                $data[$k] = $v;
            }
        }

        return $data;
    }


    /*
    自动填充
    负责把表中需要值,而$_POST又没传的字段,赋上值
    比如 $_POST里没有add_time,即商品时间,
    则自动把time()的返回值赋过来
    */
    public function _autoFill($data) {
        foreach($this->_auto as $k=>$v) {
            if(!array_key_exists($v[0],$data)) {
                switch($v[1]) {
                    case 'value':
                    $data[$v[0]] = $v[2];
                    break;

                    case 'function':
                    $data[$v[0]] = call_user_func($v[2]);
                    break;
                }
            }
        }

        return $data;
    }

    
    /*
        格式 $this->_valid = array(
                    array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        );

        array('goods_name',1,'必须要有商品名','requird'),
        array('cat_id',1,'栏目id必须是整型值','number'),
        array('is_new',0,'in_new只能是0或1','in','0,1')
        array('goods_breif',2,'商品简介就在10到100字符','length','10,100')

    */
    public function _validate($data) {
        if(empty($this->_valid)) {
            return true;
        }

      

        foreach($this->_valid as $k=>$v) {
            switch($v[1]) {
                case 1:
                  /*  if(!isset($data[$v[0]])) {
                        $this->error[] = $v[2];
                        return false;
                    }  */
                    
                    if(!isset($v[4])) {
                        $v[4] = '';
                    } 

                    if(!$this->check($data[$v[0]],$v[3],$v[4])) {
                        $this->error[] = $v[2];
                        return false;
                    }
                    break;
                case 0:
                    if(isset($data[$v[0]])) {
                        if(!$this->check($data[$v[0]],$v[3],$v[4])) {
                            $this->error[] = $v[2];
                            return false;
                        }
                    }
                    break;
                case 2:
                    if(isset($data[$v[0]]) && !empty($data[$v[0]])) {
                        if(!$this->check($data[$v[0]],$v[3],$v[4])) {
                            $this->error[] = $v[2];
                            return false;
                        }
                    }
                    break;
            }
        }

        return true;

    }

    public function getErr(){
        return $this->error;
    }

    protected function check($value,$rule='',$parm='') {
        switch($rule) {
            case 'require':
                return !empty($value);
                break;

            case 'number':
                return is_numeric($value);
                break;

            case 'in':
                $tmp = explode(',',$parm);
                return in_array($value,$tmp);
                break;
            case 'between':
                list($min,$max) = explode(',',$parm);
                return $value >= $min && $value <= $max;
                break;
            case 'length':
                list($min,$max) = explode(',',$parm);
                return mb_strlen($value,"utf-8") >= $min && mb_strlen($value,"utf-8") <= $max;
                break;
            case 'email':
                // 判断$value是否是email,可以用正则表达式,但现在没学.
                // 因此,此处用系统函数来判断
                return (filter_var($value,FILTER_VALIDATE_EMAIL) !== false);
                break;
            default:
                return false;
                break;
        }
    }

    /*
     在model父类里,写最基本的增删改查操作
    */

    /*
        parm array $data
        return bool
    */
    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }

    /*
        parm int $id 主键
        return int 影响的行数
    */
    public function delete($id) {
        $sql = 'delete from ' .$this->table . ' where ' . $this->pk . '=' .$id;
         return $this->db->execute($sql);
    }


    /*
        parm array $data
        parm int $id
        return int 影响行数
    */
    public function update($data,$id) {
        $rs = $this->db->autoExecute($this->table,$data,'update',' where '.$this->pk.'='.$id);
        return $rs;
    }


    /*
        return Array
    */
    public function select() {
        $sql = 'select * from ' . $this->table;
        return $this->db->getAll($sql);
    }

     public function findbysql($sql) {
        return $this->db->getAll($sql);
    }

    /*
        parm int $id
        return Array
    */

    public function find($id) {
        $sql = 'select * from ' .  $this->table . ' where ' . $this->pk . '=' . $id;
        return $this->db->getRow($sql);
    }

    public function insert_id() {
        return $this->db->insert_id();
    }
    public function select_sql($sql) {
       $rs = $this->db->query($sql); 
        if($rs===false){
            return false;
        }
        $rs=$rs->fetchAll( PDO::FETCH_ASSOC);      
        return $rs;
      
    }
    public function execute($sql) {

            return $this->db->execute($sql);
   }
}

    