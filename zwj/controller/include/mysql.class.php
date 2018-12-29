<?php
/****
author: zwj
url: http://www.boolshop.com
****/

defined('ACC')||exit('ACC Denied');
class mysql extends db {
    private static $ins = NULL;
    private $conn = NULL;
    private $conf = array();
    

    final protected function __construct() {
        $this->conf = conf::getIns();
        
        $this->connect($this->conf->host,$this->conf->db,$this->conf->user,$this->conf->pwd);
        $this->setChar($this->conf->char);
    }


    public function __destruct() {
    }

    public static function getIns() {
        if(!(self::$ins instanceof self)) {
            self::$ins = new self();
        }

        return self::$ins;
    }

    public function connect($h,$db,$u,$p) {
    	try{
        $this->conn = new PDO("mysql:host=$h;dbname=$db",$u,$p);
    	}catch(PDOException $e){
    		echo '数据库连接失败'.$e->getMessage();
    	}
        
    }


    protected function setChar($char) {
        $sql = 'set names ' . $char;
        return $this->query($sql);
    }

    public function query($sql) {

        $rs = $this->conn->query($sql);

        log::write($sql);

        return $rs;
    }
    public function execute($sql) {
    
    	$int= $this->conn->exec($sql);
    
    	log::write($sql);
    
    	return $int;
    }
    public function autoExecute($table,$arr,$mode='insert',$where = ' where 1 limit 1') {
        /*    insert into tbname (username,passwd,email) values ('',)
        /// 把所有的键名用','接起来
        // implode(',',array_keys($arr));
        // implode("','",array_values($arr));
        */
        
        if(!is_array($arr)) {
            return false;
        }
        if($mode == 'update') {
            $sql = 'update ' . $table .' set ';
            foreach($arr as $k=>$v) {
                if(is_string($v)){
                $sql .= $k . "='" . $v ."',";
                }else if(is_null($v)){
                    $sql .= $k."=null,";
                }else if(is_integer($v)||is_float($v)){
                   $sql .= $k . "=" . $v .","; 
                }
            }   
            $sql = rtrim($sql,',');
            $sql .= $where;
            
            return $this->execute($sql);
        }else if($mode == 'insert') {
        $sql = 'insert into ' . $table . ' (' . implode(',',array_keys($arr)) . ')';
        $sql .= ' values (';
            $len=count($arr);
            $str_i=0;
            $str=null;
           foreach($arr as $v){
            $str_i++;
            if($str_i!=$len){
                if(is_string($v)){
                    $str .= "'$v',";
                }else if(is_null($v)){
                    $str.='null,';
                }else if(is_integer($v)||is_float($v)){
                    $str .= "$v,";
                }
             }else{
                 if(is_string($v)){
                    $str .= "'$v'";
                }else if(is_null($v)){
                    $str.='null';
                }else if(is_integer($v)||is_float($v)){
                    $str .= "$v";
                }
             }
           }
        $sql .= $str;
        $sql .= ')';

        return $this->execute($sql);
        }
    }

    public function getAll($sql) {
        $rs = $this->query($sql); 
        if($rs===false){
        	return false;
        }
     	$rs=$rs->fetchAll( PDO::FETCH_ASSOC );		
        return $rs;
    }
    
    public function getRow($sql) {
        $rs = $this->query($sql);
        if($rs===false){
        	return false;
        }
        return $rs->fetch(PDO::FETCH_ASSOC);
    }
    public function getOne($sql,$int=0) {
    	$rs = $this->query($sql);
    	if($rs===false){
    		return false;
    	}
    	$row = $rs->fetch(PDO::FETCH_NUM);
    	return $row[$int];
    }
    // 返回最新的auto_increment列的自增长的值
    public function insert_id() {
    	return $this->conn->lastInsertId(); 
    }
}
