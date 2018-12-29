<?php
/****
author: zwj
url: http://www.boolshop.com
 ****/
define('ACC',true);
require('../include/init.php');
if($_POST['act']=='security_question') {
    $customer = new CustomerModel();

    $result = $customer->select();
    $name_bool = false;
    $telephone_bool = false;
//该会员原来的手机号
    $customer_name1 = $_SESSION['username'];
    $model = new Model();
    $sql = "select * from customer where customer_name='$customer_name1'";
    $customerdata = $model->findbysql($sql);
    $telephone = $customerdata[0]['telephone'];
    foreach ($result as $v) {
        if ($v['customer_name'] == $_POST['customer_name'] && $_POST['customer_name'] != $_SESSION['username']) {
            $name_bool = true;
        }
        if ($v['telephone'] == $_POST['telephone'] && $telephone != $_POST['telephone']) {
            $telephone_bool = true;
        }
    }
    $data = array();
    $data = $customer->_facade($_POST);
    $data = $customer->_autoFill($data);
    $int = 0;
    if ($name_bool == false && $telephone_bool == false) {

        $int = $customer->update($data, $_POST['customer_id']);
    }
    if ($int > 0) {
        $smarty=new MySmarty();
        $smarty->clearAllCache();
        echo '<script>location.href="/zwj/controller/front/user_info.php";</script>';
        exit;
    } else {
        if ($name_bool == true) {
            echo '<script>window.location.href="user_info.php";alert("该会员名已被注册！");</script>';
            exit;
        } else if ($telephone_bool == true) {
            echo '<script>window.location.href="user_info.php";alert("该手机号已被注册！");</script>';
            exit;
        }
    }
}else{
    $customer = new CustomerModel();
    $customer_name1 = $_SESSION['username'];
    $ori_pwd=md5($_POST['ori_password']);
    $sql="select * from customer where customer_name='$customer_name1' and password='$ori_pwd'";
    $result=$customer->findbysql($sql);
    if($result){
        if ($_POST['password'] != '') {
            $_POST['password'] = md5($_POST['password']);
        }
        $data['password']=$_POST['password'];
        $int=$customer->update($data, $_POST['customer_id']);
        $smarty=new MySmarty();
        $smarty->clearAllCache();
        echo '<script>parent.location.href="/zwj/controller/front/login.php";</script>';
        exit;
    }else{
        $smarty=new MySmarty();
        $smarty->clearAllCache();
        echo '<script>location.href="/zwj/controller/front/user_info.php";alert("原密码输入不正确");</script>';
        exit;
    }

}