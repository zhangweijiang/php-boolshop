<?php
if(empty($_COOKIE['username'])) {
    setcookie('username','user'.rand(10000,99999));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/zwj/view/js/front/jquery-3.1.0.js"></script>

<script type="text/javascript">

function xunwen() {
    var cont = $('textarea:first').val();
    $.post('/zwj/chat/sendmsg.php',{rec:'admin',content:cont},function(res) {
        if(res == 'ok') {
            $('<p>你对客服说<br />'+cont+'</p>').appendTo($('#msgzone'));
            $('textarea:first').val('');
        }
    });
}

</script>

<style type="text/css">
#msgzone {
border: solid 1px gray;
width:500px;
height:300px;
overflow:scroll;
}
</style>
</head>
    <body>

        <h1>comet反向ajax技术--在线客服系统--之用户端</h1>
        <h3>原理: ajax+长连接+轮询 (长轮询),获取实时内容,并更新到父页面</h3>

        <div id="msgzone">
            
        </div>
        <p>
        <textarea></textarea>
        </p>
        <p>
        <input type="button" value="询问" onclick="xunwen();" />
        </p>
    </body>
<script type="text/javascript">
// 长轮询
var setting = {
url:'/zwj/chat/custom_deal.php',
dataType:'json',
success:function(res) { 
    console.log(res);
    $('<p>客服对你说<br />'+res.content+'</p>').appendTo($('#msgzone'));
    
    window.setTimeout(function(){$.ajax(setting)},1000);
}
};

$.ajax(setting);

</script>
</html>

