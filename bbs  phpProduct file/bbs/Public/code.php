<?php
    header('content-type:image/jpeg');
	session_start();//开启session
    /*分析：
     * 1、背景颜色一直在变(浅色,随机)
     * 2、设置点的干扰（点的位置和点的颜色-随机）
     * 3、这些英文字母或者是数字依次排列。（4个）
     */

    //1、创建画布
    $img = imagecreatetruecolor(150,50);

    //2、设置背景颜色  颜色是随机的  浅色   0~125深色   126~255浅色
    $backgroundColor = imagecolorallocate($img,rand(126,255),rand(126,255),rand(126,255));
    imagefill($img,0,0,$backgroundColor);

    //2-1、设置干扰的像素点。
    for($i = 0 ; $i < 500 ; $i++){
        //随机出来的x
        $pxX = rand(5,145);
        //随机出来的y
        $pxY = rand(5,45);
        //随机出干扰的像素点
        $pxColor = imagecolorallocate($img,rand(0,125),rand(0,125),rand(0,125));
        imagesetpixel($img,$pxX,$pxY,$pxColor);
    }

    $code = '3456789abcdefghijkmnpqrstuvwxyABCDEFGHJKLMNPQRSTUVWXY';//$code[1]
    //2-2、写字
	$string = "";
    for($j = 1 ; $j <= 4 ; $j++){

        //随机字体的大小
        $fontSize = rand(15,20);

        //随机的字体颜色
        $fontColor = imagecolorallocate($img,rand(0,125),rand(0,125),rand(0,125));

        //随机的字
        $text = $code[rand(0,strlen($code)-1)];

        
		$string .= $text;//连接随机出来的验证码
        //获得字体的高度
        $info = imagettfbbox($fontSize,0,'./ariblk.ttf',$text);
        //随机出来的字体的x和y
        $x = (100/4) * $j;//25 50 75 100
        $y = 50-abs($info[7] - $info[1]);

        //echo $x.','.$y;
        //echo '<hr />';
        imagettftext($img,$fontSize,0,$x,$y,$fontColor,'./ariblk.ttf',$text);
    }
	$_SESSION['code'] = $string;

    //3、输出图片
    imagejpeg($img);

    //4、销毁资源
    imagedestroy($img);
?>
