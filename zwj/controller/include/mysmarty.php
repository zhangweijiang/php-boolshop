<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
defined('ACC')||exit('ACC Denied');
require(ROOT.'lib/smarty3/libs/Smarty.class.php');
class MySmarty extends Smarty {
	public function __construct() {
		parent::__construct();
		/*当调用私有属性template_dir时调用魔术方法__set()，
		把ROOT."view/html/front/"赋值给私有属性template_dir*/
		$this->template_dir=ROOT."view/html/front/";
		$this->compile_dir=ROOT."controller/data/compile/";
		$this->cache_dir=ROOT."controller/data/cache/";
		$this->caching=true;
		$this->cache_lifetime = 3600;
	}
}


?>