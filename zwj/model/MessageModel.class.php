<?php
/****
author: zwj
url: http://www.qzjlk.com
****/


class MessageModel extends Model{
    protected $table = 'message';
    protected $fields = array('id','title','content','telephone','email','content','customer_name','add_time');
    /*
        你给我一个关键数组,键->表中的列,值-->表中的值,
        add()函数自动插入该行数据
    */
   
    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }


    // 获取本表下面所有的数据
    public function select() {
        $sql = 'select * from ' .  $this->table;
        return $this->db->getAll($sql);
    }
    public function select_by_is_read(){
        $sql = 'select * from ' .  $this->table.' where is_read=0';
        return $this->db->getAll($sql);
    }
    // 根据主键 取出一行数据
    public function find($id) {
        $sql = 'select * from '.  $this->table.' where id=' . $id;
        return $this->db->getRow($sql);
    }
  


    // 删除栏目
    public function delete($id=0) {
        $sql = 'delete from ' . $this->table . ' where id=' . $id;
        $int=$this->db->execute($sql);
        return $int;
    }

    // 
    public function update($data,$id=0) {
        $int=$this->db->autoExecute($this->table,$data,'update',' where id=' . $id);
        return $int;
    }

    public function updatebyid($id){
        $sql='update ' . $this->table.' set is_read=1 where id='.$id;
        $int=$this->db->execute($sql);
        return $int;
    }
}
