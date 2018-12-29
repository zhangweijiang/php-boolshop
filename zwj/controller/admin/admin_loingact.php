<?php
/**
 * User: zwj
 * Date: 2017/3/6
 * Time: 22:04
 */
define('ACC',true);
require('../include/init.php');
$captcha=$_POST['captcha'];
$username=$_POST['username'];
function SHA512Hex($str){
    $re=hash('sha512', $str, true);
    return bin2hex($re);
}
$password=SHA512Hex($_POST['password']);
$model=new Model();
if(strcasecmp($captcha,$_SESSION['captcha_string'])==0){
    $sql="select * from user where username='$username' and password='$password'";
    $result=$model->findbysql($sql);
    if(!empty($result)){
        $_SESSION['login_state']=true;
        header('location:/zwj/controller/admin/admin.php');
    }else{
        echo '<script>alert("对不起，你输入用户名或密码不正确，请重新输入！");window.location.href="/zwj/view/html/admin/admin_login.html";</script>';
    }
}else{
    echo '<script>alert("对不起，你输入的验证码不正确，请重新输入！");window.location.href="/zwj/view/html/admin/admin_login.html";</script>';
}