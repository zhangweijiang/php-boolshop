<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('../include/init.php');
$sql=$_POST['sql'];
$sql=trim($sql);
$model=new Model();
if((strpos($sql, "select") !== false)|| (strpos($sql, "show") !== false)|| (strpos($sql, "desc") !== false)){
	//是查询语句
	$result=$model->select_sql($sql);
	if(empty($result)){
		echo 'SQL语句有误!';
	}else{
		
		$column_name=array_keys($result[0]);
		
		foreach($column_name as $v){
			$table=$table."<td>".$v."</td>";
			
		}
		$table="<table border='1' cellspacing='0'><tr>".$table."</tr>";
		foreach($result as $rv){
			$rv=array_values($rv);
			for($i=0;$i<count($rv);$i++){
			$td=$td."<td>".$rv[$i].'</td>';
			}
			$tr="<tr>".$td."</tr>";
			$td=null;
			$tr_all=$tr_all.$tr;
		}
		$table=$table.$tr_all.'</table>';
		echo $table;
	}
}else{ 
	//不是查询语句
	$result=$model->execute($sql);
	if($result!==false){
		echo 'SQL语句成功执行';
	}else{
		echo 'SQL语句有误!';
	}
}



?>