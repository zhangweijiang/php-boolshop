<?php
define('ACC',true);
require('../include/init.php');
if($_SESSION['login_state']!==true){
    header('location:/zwj/view/html/admin/admin_login.html');
}else {
    $file_name = ROOT . 'backup/' . $_GET['filename'];//需要下载的文件
    $filename = $_GET['filename'];//需要保存的文件
    $file_name = iconv("utf-8", "gb2312", "$file_name");
    $fp = fopen($file_name, "r+");//下载文件必须先要将文件打开，写入内存
    if (!file_exists($file_name)) {//判断文件是否存在
        echo "文件不存在";
        exit();
    }
    $file_size = filesize($file_name);//判断文件大小
    //返回的文件
    Header("Content-type: application/octet-stream");
    //按照字节格式返回
    Header("Accept-Ranges: bytes");
    //返回文件大小
    Header("Accept-Length: " . $file_size);
    //弹出客户端对话框，对应的文件名
    Header("Content-Disposition: attachment; filename=" . $filename);
    //防止服务器瞬时压力增大，分段读取
    $buffer = 1024;
    while (!feof($fp)) {
        $file_data = fread($fp, $buffer);
        echo $file_data;
    }
    //关闭文件
    fclose($fp);
}
 ?>
