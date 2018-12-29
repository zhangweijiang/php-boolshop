<?php
/****
author: zwj
url: http://www.boolshop.com
****/


class CatModel extends Model{
    protected $table = 'category';
    protected $fields = array('cat_id','goods_type_id','cat_name','keywords','cat_desc','parent_id','is_show','grade','show_in_nav','sort_order','measure_unit');

    /*
        你给我一个关键数组,键->表中的列,值-->表中的值,
        add()函数自动插入该行数据
    */
    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }


    // 获取本表下面所有的数据
    public function select() {
        $sql = 'select cat_id,cat_name,parent_id from ' .  $this->table;
        return $this->db->getAll($sql);
    }

    // 根据主键 取出一行数据
    public function find($cat_id) {
        $sql = 'select * from category where cat_id=' . $cat_id;
        return $this->db->getRow($sql);
    }
     // 根据parent_id 取出一行数据
    public function find_parent_id($parent_id) {
        $sql = 'select * from category where parent_id=' . $parent_id;
        return $this->db->getAll($sql);
    }

    /*
        getCatTree
        pram: int $id
        return $id栏目的子孙树  ---   $id表示的是parent_id,即parent_id=$id的都显示出来（此时对应一个cat_id,然后把
        parent_id=cat_id都显示出来，以此递归下去,所有$id=0输出所有栏目）
    */
    public function getCatTree($arr,$id = 0,$lev=0) {
        $tree = array();

        foreach($arr as $v) {
            if($v['parent_id'] == $id) {
                $v['lev'] = $lev;
                $tree[] = $v;

                $tree = array_merge($tree,$this->getCatTree($arr,$v['cat_id'],$lev+1));
            }
        }

        return $tree;
    }

    /*
        parm: int $id
        return $id栏目下的子栏目
    */
    public function getSon($id) {
        $sql = 'select cat_id,cat_name,parent_id from ' . $this->table . ' where parent_id=' . $id;

        return $this->db->getAll($sql);
    }

    /*
        parm: int $id
        return array $id栏目的家谱树    ---  $id代表cat_id从下往上递归查找家谱树
    */
    public function getTree($id=0) {
        $tree = array();
        $cats = $this->select();
        
        while($id>0) {
            foreach($cats as $v) {
                if($v['cat_id'] == $id) {
                    $tree[] = $v;
                    
                    $id = $v['parent_id'];
                    break;
                }
            }
        }

        return array_reverse($tree);

    }

    // 删除栏目
    public function delete($cat_id=0) {
        $sql = 'delete from ' . $this->table . ' where cat_id=' . $cat_id;
        $int=$this->db->execute($sql);
        return $int;
    }

    // 
    public function update($data,$cat_id=0) {
        $int=$this->db->autoExecute($this->table,$data,'update',' where cat_id=' . $cat_id);
        return $int;
    }


}
