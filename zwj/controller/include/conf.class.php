<?php
/****
author: zwj
url: http://www.boolshop.com
****/

/***
file conf.class.php
配置文件读写类

***/

defined('ACC')||exit('ACC Denied');
class conf {
    protected static $ins = null;
    protected $data = array();
        
    final protected function __construct() {

        // 一次性把配置文件信息,读过来,赋给data属性,
        // 这样以后就不再管配置文件了.
        // 再要配置的值是,直接从 data属性找
        include(ROOT . 'controller/include/config.inc.php');
        $this->data = $_CFG;
    }

    final protected function __clone() {
    }


    public static function getIns() {
        if(self::$ins instanceof self) {
            return self::$ins;
        } else {
            self::$ins = new self();
            return self::$ins;
        } 
    }


    // 用魔术方法,读取data内的信息
    public function __get($key) {
        if(array_key_exists($key,$this->data)) {
            return $this->data[$key];
        } else {
            return null;
        }
    }


    // 用魔术方法,在运行期,动态增加或改变配置选项
    public function __set($key,$value) {
        $this->data[$key] = $value;
    }
}


$conf = conf::getIns();


/****
// 已经能把配置文件的信息,读取到自身的 data属性中存储起来
// print_r($conf);


// 读取选项
echo $conf->host,'<br />';
echo $conf->user,'<br />';
var_dump($conf->template_dir);

// 动态的追加选项
$conf->template_dir = 'D:/www/smarty';

echo $conf->template_dir;
****/