<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
?>
<html>
<head>
<title>漂浮广告代码</title>
</head>
<body>
<div id="img" style="position:absolute;z-index=99;">
    <a href="/"><img src="/jscss/demoimg/logo_demo1.gif" border="0"  alt='img'></a>
</div>
<SCRIPT LANGUAGE="JavaScript">
{literal}
    <!-- Begin
    var xPos = document.body.clientWidth-20;
    var yPos = document.body.clientHeight/2;
    var step = 1;
    var delay = 5;
    var height = 0;
    var Hoffset = 0;
    var Woffset = 0;
    var yon = 0;
    var xon = 0;
    var pause = true;
    var interval;
    img.style.top = yPos;
    function changePos() {
        width = document.body.clientWidth;
        height = document.body.clientHeight;
        Hoffset = img.offsetHeight;
        Woffset = img.offsetWidth;
        img.style.left = xPos + document.body.scrollLeft;
        img.style.top = yPos + document.body.scrollTop;
        if (yon) {
            yPos = yPos + step;
        }else {
            yPos = yPos - step;
        }
        if (yPos < 0) {
            yon = 1;
            yPos = 0;
        }
        if (yPos >= (height - Hoffset)) {
            yon = 0;
            yPos = (height - Hoffset);
        }
        if (xon) {
            xPos = xPos + step;
        }else {
            xPos = xPos - step;
        }
        if (xPos < 0) {
            xon = 1;
            xPos = 0;
        }
        if (xPos >= (width - Woffset)) {
            xon = 0;
            xPos = (width - Woffset);
        }
    }
    function start() {
        img.visibility = "visible";
        interval = setInterval('changePos()', delay);
    }
    start();
    img.onmouseover = function() {
        clearInterval(interval);
        interval = null;
    }
    img.onmouseout = function() {
        interval = setInterval('changePos()', delay);
    }
    //  End -->
    {/literal}
</script>
</body>
</html>
