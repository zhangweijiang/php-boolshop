<?php
/**
 * User: zwj
 * Date: 2017/3/5
 * Time: 19:57
 */
define('ACC',true);
require('../include/init.php');
$captcha=$_POST['captcha'];
$goods_id=$_POST['goods_id'];
if(strcasecmp($captcha,$_SESSION['captcha_string'])==0){
    $data=$_POST;
    unset($data['captcha']);
    $data['comment_time']=time();
    $data['customer_id']=$_SESSION['customer_id'];
    $commentmodel=new CommentModel();
    $commentmodel->add($data);
    echo '<script>alert("评论成功！");window.location.href="/index.php";</script>';

}else{

    echo '<script>alert("对不起，你输入的验证码不正确，请重新输入！");window.location.href="/zwj/controller/front/goods.php?goods_id='.$goods_id.'#comment";</script>';

}
