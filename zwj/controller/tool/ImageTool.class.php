<?php
/****
author: zwj
url: http://www.boolshop.com
****/


/***
水印 缩略图  验证码类


水印:就是把指定的水印复制到目标上,并加透明效果

缩略图:就是把大图片复制到小尺寸画面上
***/
class ImageTool {
    // imageInfo 分析图片的信息
    // return array()
    public static function imageInfo($image) {
        // 判断图片是否存在
        if(!file_exists($image)) {
            return false;
        }

        $info = getimagesize($image);
        
        if($info == false) {
            return false;
        }

        // 此时info分析出来,是一个数组
        $img['width'] = $info[0];
        $img['height'] = $info[1];
        $img['ext'] = substr($info['mime'],strpos($info['mime'],'/')+1);

        return $img;
    }



    /*
        加水印功能
        parm String $dst 等操作图片
        parm String $water 水印小图
        parm String $save,不填则默认替换原始图
    */
    public static function water($dst,$water,$save=NULL,$pos=2,$alpha=100) {

        // 先保证2个图片存在
        if(!file_exists($dst) || !file_exists($water)) {

            return false;
        }
        
        
        // 首先保证水印不能比待操作图片还大
        $dinfo = self::imageInfo($dst);
        $winfo = self::imageInfo($water);
        if($winfo['height'] > $dinfo['height'] || $winfo['width'] > $dinfo['width']) {
            return false;
        }

        // 两张图,读到画布上! 但是图片可能是png,可能是jpeg,用什么函数读?
        $dfunc = 'imagecreatefrom' . $dinfo['ext'];
        $wfunc = 'imagecreatefrom' . $winfo['ext'];

        if(!function_exists($dfunc) || !function_exists($wfunc)) {
            return false;
        }


        // 动态加载函数来创建画布
        $dim = $dfunc($dst);  // 创建待操作的画布
        $wim = $wfunc($water);  // 创建水印画布


        // 根据水印的位置 计算粘贴的坐标
        switch($pos) {
            case 0: // 左上角
            $posx = 0;
            $posy = 0;
            break;

            case 1: // 右上角
            $posx = $dinfo['width'] - $winfo['width'];
            $posy = 0;
            break;

            case 3: // 左下角
            $posx = 0;
            $posy = $dinfo['height'] - $winfo['height'];
            break;
        
            default:
            $posx = $dinfo['width'] - $winfo['width'];
            $posy = $dinfo['height'] - $winfo['height'];
        }


        // 加水印
        imagecopymerge ($dim,$wim, $posx , $posy , 0 , 0 , $winfo['width'] , $winfo['height'] , $alpha);

        // 保存
        if(!$save) {
            $save = $dst;
            unlink($dst); // 删除原图
        }

        $createfunc = 'image' . $dinfo['ext'];
        $createfunc($dim,$save);

        imagedestroy($dim);
        imagedestroy($wim);

        return true;
    }


    /**
        thumb 生成缩略图
        等比例缩放,两边留白
    **/
    public static function thumb($dst,$save=NULL,$width=200,$height=200) {
        // 首先判断待处理的图片存不存在
        $dinfo = self::imageInfo($dst);
        if($dinfo == false) {
            return false;
        }

        // 计算缩放比例
        $calc = min($width/$dinfo['width'], $height/$dinfo['height']);

        // 创建原始图的画布
        $dfunc = 'imagecreatefrom' . $dinfo['ext'];
        $dim = $dfunc($dst);

        // 创建缩略画布
        $tim = imagecreatetruecolor($width,$height);

        // 创建白色填充缩略画布
        $white = imagecolorallocate($tim,255,255,255);

        // 填充缩略画布
        imagefill($tim,0,0,$white);

        // 复制并缩略
        $dwidth = (int)$dinfo['width']*$calc;
        $dheight = (int)$dinfo['height']*$calc;

        $paddingx = (int)($width - $dwidth) / 2;
        $paddingy = (int)($height - $dheight) / 2;


        imagecopyresampled($tim,$dim,$paddingx,$paddingy,0,0,$dwidth,$dheight,$dinfo['width'],$dinfo['height']);

        // 保存图片
        if(!$save) {
            $save = $dst;
            unlink($dst);
        }

        $createfunc = 'image' . $dinfo['ext'];
        $createfunc($tim,$save);

        imagedestroy($dim);
        imagedestroy($tim);

        return true;

    }


    //写验证码
    /*
        author: zwj
              通过imagestring写字符串(字体大小参数只有1到5，不能更大，使用默认的字体)
              注意：imagestring()函数不支持写入中文字符串,中文会出现乱码
    */
    public static function captcha1($width=60,$height=25,$offset=3,$round=1.5) {
            //造2块画布
            $src_img= imagecreatetruecolor($width,$height) ;
            $dst_img= imagecreatetruecolor($width,$height) ;
            //造背影色
            $gray = imagecolorallocate($src_img, 200, 200, 200);
           
            //填充背景
            imagefill($src_img, 0, 0, $gray);
            imagefill($dst_img, 0, 0, $gray);
            //造随机字体颜色
            $color = imagecolorallocate($src_img, mt_rand(0, 125), mt_rand(0, 125), mt_rand(0, 125)) ;
            //造随机线条颜色
            $color1 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
            $color2 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
            $color3 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
           
            //在画布上画线
            imageline($src_img, mt_rand(0, 50), mt_rand(0, 25), mt_rand(0, 50), mt_rand(0, 25), $color1) ;
            imageline($src_img, mt_rand(0, 50), mt_rand(0, 20), mt_rand(0, 50), mt_rand(0, 20), $color2) ;
            imageline($src_img, mt_rand(0, 50), mt_rand(0, 20), mt_rand(0, 50), mt_rand(0, 20), $color3) ;
           
            //在画布上写字
            $text = substr(str_shuffle('ABCDEFGHIJKMNPRSTUVWXYZabcdefghijkmnprstuvwxyz23456789'), 0,4) ;
            imagestring($src_img, 5, 7, 5, $text, $color) ;
           for($j=30;$j<=$width;$j+=15){
             $arr[]=$j;
            }
            shuffle($arr);
            $arr=array_slice($arr,0,1);
            $arr=(int)implode("", $arr); 
           for($i=0;$i<$width;$i++){
           	//根据正弦曲线计算上下波动的posy
           	/* $offset=3;//最大波动几个像素
           	$round=2;//扭两个周期，即4PI */
           	$posy=round(sin($i*$round*2*M_PI/$arr)*$offset);
           	imagecopy($dst_img,$src_img,$i,$posy,$i,0,1,25);
           	
           }
            //显示、销毁
            header('content-type: image/jpeg');
            imagejpeg($dst_img);
            imagedestroy($src_img);
            imagedestroy($dst_img);
    }
    
    //写验证码
    /*
     author: zwj
     array imagettftext()函数写入字符串，支持中文字符串，但这个验证码功能的函数没有实现中文的验证码
     imagettftext函数可以通过导入自己想要的字体到tool文件夹里，实现中文的支持，还能设置
         字体大小
    */
    public static function captcha2($width=120,$height=50,$font=15,$offset=3,$round=2.5) {
    	//造2块画布
    	$src_img= imagecreatetruecolor($width,$height) ;
    	$dst_img= imagecreatetruecolor($width,$height) ;
    	//造背景色
    	$gray = imagecolorallocate($src_img, 200, 200, 200);
    	 
    	//填充背景
    	imagefill($src_img, 0, 0, $gray);
    	imagefill($dst_img, 0, 0, $gray);
    	//造随机字体颜色
    	$color = imagecolorallocate($src_img, mt_rand(0, 125), mt_rand(0, 125), mt_rand(0, 125)) ;
    	//造随机线条颜色
    	$color1 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
    	$color2 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
    	$color3 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
    	$color4 =imagecolorallocate($src_img, mt_rand(100, 125), mt_rand(100, 125), mt_rand(100, 125));
    	//在画布上画线
    	imageline($src_img, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $color1) ;
    	imageline($src_img, mt_rand(0, $width), mt_rand(0, $height+5), mt_rand(0, $width), mt_rand(0, $height+5), $color2) ;
    	imageline($src_img, mt_rand(0, $width), mt_rand(0, $height+10), mt_rand(0, $width), mt_rand(0, $height+10), $color3) ;
    	imageline($src_img, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $color4) ;
    	//在画布上写字
    	$text = substr(str_shuffle('ABCDEFGHIJKMNPRSTUVWXYZabcdefghijkmnprstuvwxyz23456789'), 0,4) ;
    	$_SESSION['captcha_string']=$text;
        $arr=imagettfbbox(13, 0,ROOT.'controller/tool/msyh.ttf', $text);
    	$font_width=$arr[2]-$arr[0];//获得字符串的长度
    	$x=($width-$font_width)/2;
    	$font_height=$arr[1]-$arr[7];//获得字符串的高度
    	$y=($height-$font_height)/2+$font_height;
    	imagettftext($src_img, $font, 0, $x, $y, $color, ROOT.'controller/tool/msyh.ttf', $text);
     	$arr=range(30,360,15);
    	shuffle($arr);
    	$arr=array_slice($arr,0,1);
    	$arr=(int)implode("", $arr);
    	for($i=0;$i<=$width;$i++){
    		//根据正弦曲线计算上下波动的posy
    		// $offset=3;最大波动几个像素
    		//$round=2;扭两个周期，即4PI 
    		$posy=round(sin($i*$round*2*M_PI/$arr)*$offset);
    		imagecopy($dst_img,$src_img,$i,$posy,$i,0,1,$height);
    
    	} 
    	imageline($src_img, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $color4) ;
    	//显示、销毁
    	header('content-type: image/jpeg');
    	imagejpeg($dst_img);
    	imagedestroy($src_img);
    	imagedestroy($dst_img);
    }
	
}
