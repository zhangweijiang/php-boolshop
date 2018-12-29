<?php
/****
author: zwj
url: http://www.boolshop.com
****/



defined('ACC')||exit('Acc Deined');


class UserModel extends Model {
    protected $table = 'user';
    protected $pk = 'user_id';
    protected $fields = array('user_id','username','email','passwd','regtime','lastlogin');

    protected $_valid = array(
                            array('username',1,'用户名必须存在','require'),
                            array('username',0,'用户名必须在4-16字符内','length','4,16'),
                            array('email',1,'email非法','email'),
                            array('passwd',1,'passwd不能为空','require')
    );

    protected $_auto = array(
                            array('regtime','function','time')
                            );


    /*
        用户注册
    */
    public function reg($data) {
        if($data['passwd']=='') {
        	exit('密码不能为空');
        }else{
        	$data['passwd'] = $this->encPasswd($data['passwd']);
        }
        return $this->add($data);
    }
    
    
    protected function encPasswd($p) {
        return md5($p);
    }

    /*
    根据用户名查询用户信息
    */
    public function checkUser($username,$passwd='') {
        if($passwd == '') {
            $sql = 'select count(*) from ' . $this->table . " where username='" .$username . "'";
            return $this->db->getOne($sql);
        } else {
            $sql = "select user_id,username,email,passwd from " . $this->table . " where username= '" . $username . "'";

            $row = $this->db->getRow($sql);

            if(empty($row)) {
                return false;
            }

            if($row['passwd'] != $this->encPasswd($passwd)) {
                return false;
            }

            unset($row['passwd']);
            return $row;
        }
    }
}


