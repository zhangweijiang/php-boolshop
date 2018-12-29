<?php
/****
author: zwj
url: http://www.boolshop.com
****/


defined('ACC')||exit('ACC Denied');

class GoodsModel extends Model{
    protected $table = 'goods';
    protected $pk = 'goods_id';
    protected $fields = array('goods_id','goods_type_id','shop_id','goods_sn','cat_id','brand_id','goods_name','shop_price','market_price','promote_price','promote_start_date','promote_end_date','provider_name','goods_number','click_count','goods_weight','goods_brief','keywords','goods_desc','thumb_img','goods_img','ori_img','is_real','is_shipping','is_on_sale','is_alone_sale','is_delete','is_best','is_new','is_hot','support_number','add_time','last_update','seller_note');

    protected $_auto = array(
                            array('is_hot','value',0),
                            array('is_new','value',0),
                            array('is_best','value',0),
                            array('is_on_sale','value',0),
                            array('add_time','function','time')
                            );

    protected $_valid = array(
                            array('goods_name',1,'必须要有商品名','require'),
                            array('cat_id',1,'栏目id必须是整型值','number'),
                            array('is_new',0,'is_new只能是0或1','in','0,1'),
                            array('goods_brief',2,'商品简介就在10到100字符','length','10,100')
    );


    /*
        作用:把商品放到回收站,即is_delete字段置为1
        parm int id
        return bool
    */
    public function trash($id) {
        return $this->update(array('is_delete'=>1),$id);
    }


    public function getGoods($n=100) {
        $sql = 'select * from goods where is_delete=0 and is_on_sale=1 order by add_time desc limit '.$n;
        return $this->db->getAll($sql);
    }
     public function getGoodsAll() {
        $sql = 'select * from goods where is_delete=0  order by goods_id desc ';
        return $this->db->getAll($sql);
    }

    public function getTrash() {
        $sql = 'select * from goods where is_delete=1';
        return $this->db->getAll($sql);
    }

    /** 创建商品的货号**/
    public function createSn() {
        $sn = 'BL' . date('Ymd') . mt_rand(10000,99999);

        $sql = 'select count(*) from ' . $this->table . " where goods_sn='" . $sn . "'";
        
        return $this->db->getOne($sql)?$this->createSn():$sn;
    }

    /*
        取出指定条数的新品
    */

    public function getNew($n=8) {
        $sql = 'select * from ' . $this->table . ' where is_delete=0 and is_on_sale=1 and is_new=1 order by add_time limit '.$n;

        return $this->db->getAll($sql);
    }
     /*
        取出指定条数的精品
    */

    public function getBest($n=8) {
        $sql = 'select * from ' . $this->table . ' where is_delete=0 and is_on_sale=1 and is_best=1 order by add_time limit '.$n;

        return $this->db->getAll($sql);
    }
     /*
        取出指定条数的热销商品
    */

    public function getHot($n=8) {
        $sql = 'select * from ' . $this->table . ' where is_delete=0 and is_on_sale=1 and is_hot=1 order by add_time limit '.$n;

        return $this->db->getAll($sql);
    }


    /*
        取出指定栏目的商品
        // $cat_id = $_GET['cat_id'];
        // $sql = select .. from goods where cat_id = $cat_id;
        // 这是错的

        因为$cat_id对应的栏目有可能是个大栏目,而大栏目下面没有商品.
        商品放在大栏目下面的小栏目下面.

        因此,正确的做法,是找出$cat_id的所有子孙栏目,
        然后再查所有$cat_id及其子孙栏目下的商品.
    */

    public function catGoods($cat_id,$offset=0,$limit=5) {
        $category = new CatModel();
        $cats = $category->select(); // 取出所有的栏目来
        $sons = $category->getCatTree($cats,$cat_id);  // 取出给定栏目的子孙栏目
        
        $sub = array($cat_id);

        if(!empty($sons)) { // 有子孙栏目
            foreach($sons as $v) {
                $sub[] = $v['cat_id'];
            }
        }

        $in = implode(',',$sub);

        $sql = 'select goods_id,goods_name,shop_price,market_price,thumb_img from ' . $this->table . ' where cat_id in (' . $in . ') order by add_time limit ' . $offset . ',' . $limit;

        return $this->db->getAll($sql);
    }
    public function catGoodsAll($data,$cat_id) {
        $category = new CatModel();
        $cats = $category->select(); // 取出所有的栏目来
        $sons = $category->getCatTree($cats,$cat_id);  // 取出给定栏目的子孙栏目
        
        $sub = array($cat_id);

        if(!empty($sons)) { // 有子孙栏目
            foreach($sons as $v) {
                $sub[] = $v['cat_id'];
            }
        }

        $in = implode(',',$sub);
        unset($_POST['cat_id']);
        foreach($_POST as $k=>$v){
            if($k=='keywords'){
                $sql_and=$sql_and." and $k like '%$v%'";
            }else{
                $sql_and=$sql_and." and $k='$v'";
            }
        }
        $sql = 'select * from ' . $this->table . ' where cat_id in (' . $in . ')'.$sql_and.' order by goods_id desc';

        return $this->db->getAll($sql);
    }
    //关键字搜索
    public function keywordsSearch($key){
        $sql="select * from $this->table where is_delete=1 and keywords like '%$key%'";
        return $this->db->getAll($sql);

    }
    public function catGoodsCount($cat_id) {
         $category = new CatModel();
        $cats = $category->select(); // 取出所有的栏目来
        $sons = $category->getCatTree($cats,$cat_id);  // 取出给定栏目的子孙栏目
        
        $sub = array($cat_id);

        if(!empty($sons)) { // 没有子孙栏目
            foreach($sons as $v) {
                $sub[] = $v['cat_id'];
            }
        }

        $in = implode(',',$sub);

        $sql = 'select count(*) from goods where cat_id in (' . $in . ')';
        return $this->db->getOne($sql);
    }

    /*
        获取购物中商品的详细信息
        params array $items 购物车中的商品数组
        return 商品数组的详细信息
    */

    public function getCartGoods($items) {
        foreach($items as $k=>$v) {  // 循环购物车中的商品,每循环一个,到数据查一下对应的详细信息

            $sql = 'select goods_id,goods_name,thumb_img,shop_price,market_price from ' . $this->table . ' where goods_id =' . $k;

            $row = $this->db->getRow($sql);

            $items[$k]['thumb_img'] = $row['thumb_img'];
            $items[$k]['market_price'] = $row['market_price'];
        
        }

        return $items;
       
    }

    public function findbygoods_id_in($arr){
        if(is_array($arr)){
        $string=implode(',',$arr);
        $sql="select * from goods where goods_id in($string) ORDER BY  FIND_IN_SET(goods_id,'$string')";
        return $this->db->getAll($sql);
        }else{
            return false;
        }
        
    }
}