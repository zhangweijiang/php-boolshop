<?php
/****
author: zwj
url: http://www.qzjlk.com
****/


class LanmuModel extends Model{
    protected $table = '';
    public $fields = array('title','content');
    public $id='id';
    /*
        你给我一个关键数组,键->表中的列,值-->表中的值,
        add()函数自动插入该行数据
    */
   //上一篇
        public function select_up($id,$cat_id){
        $sql = 'select * from ' .  $this->table.' where publish_time<'.$id.' and cat_id='.$cat_id.' order by publish_time desc limit 0,1';
        return $this->db->getRow($sql);
    }
       //下一篇
        public function select_down($id,$cat_id){
        $sql = 'select * from ' .  $this->table.' where publish_time>'.$id.' and cat_id='.$cat_id.' order by publish_time asc limit 0,1';
        return $this->db->getRow($sql);
    }

    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }

    //按序号下降排序获取表的数据
    public function select_desc($num){
        $sql = 'select * from ' .  $this->table.' order by id desc limit 0,'.$num;
        return $this->db->getAll($sql);
    }
    public function select_desc_by_time($num){
        $sql = 'select * from ' .  $this->table.' order by publish_time desc limit 0,'.$num;
        return $this->db->getAll($sql);
    }
    // 获取本表下面所有的数据
    public function select() {
        $sql = 'select * from ' .  $this->table;
        return $this->db->getAll($sql);
    }
    //多表查询
    public function select_join(){
        $sql='select * from ' .  $this->table.' left join '.$this->table.'_cat on '.$this->table.'.cat_id='.$this->table.'_cat.cat_id';
        return $this->db->getAll($sql);
    }
    // 根据主键 取出一行数据
    public function find($id) {
        $sql = 'select * from '.  $this->table.' where '.$this->id.'=' . $id;
        return $this->db->getRow($sql);
    }

    public function findAll($id) {
        $sql = 'select * from '.  $this->table.' where '.$this->id.'=' . $id;
        return $this->db->getAll($sql);
    }
    public function findAllby_time($id) {
        $sql = 'select * from '.  $this->table.' where '.$this->id.'=' . $id.' order by publish_time desc';
        return $this->db->getAll($sql);
    }
  

    // 删除栏目
    public function delete($id=0) {
        $sql = 'delete from ' . $this->table .' where '.$this->id.'=' . $id;
        $int=$this->db->execute($sql);
        return $int;
    }
    //删除所有
    public function deleteAll($cat_id){
             $sql = 'delete from ' . $this->table.' where cat_id='.$cat_id;
            $int=$this->db->execute($sql);
            return $int;
    }

    // 
    public function update($data,$id=0) {
        $int=$this->db->autoExecute($this->table,$data,'update',' where '.$this->id.'=' . $id);
        return $int;
    }


}
