<?php
/****
author: zwj
url: http://www.boolshop.com
****/

/***
file db.class.php
数据库类

目前到底采用什么数据库 还不清楚
***/
defined('ACC')||exit('ACC Denied');
abstract class db {

    /*
    连接服务器
    parms $h 服务器地址
    parms $u 用户名
    parms $p 密码
    return bool
    */
    public abstract function connect($h,$db,$u,$p);


    /*
    发送查询
    parms $sql 发送的sql语句
    return mixed bool/resource
    */
    public abstract function query($sql);

    /*
    查询多行数据
    parms $sql select型语句
    return array(二维数组)/arary()(当查询语句正确但where条件查不到结果)/bool(false)
    */
    public abstract function getAll($sql);
  
    
    /*
       查询单行数据
    parms $sql select型语句
    return array/bool
    */
    public abstract function getRow($sql);
    /*
     查询单个数据
    parms $sql select型语句
    return array/bool
    */
    public abstract function getOne($sql);
    
    /*
    自动执行insert/update语句
    parms $sql select型语句
    return array/bool

    $this->autoExecute('user',array('username'=>'zhansan','email'=>'zhang@163.com'),'insert','');
    将发生 自动形成 insert into user (username,email) values ('zhangsan','zhang@163.com');

    */
    public abstract function autoExecute($table,$data,$act='insert',$where='');


}


