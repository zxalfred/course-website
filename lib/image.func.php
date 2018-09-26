<?php
	//产生验证码
	require_once ('string.func.php');
	function verifyImage($type=1,$length=4,$pixel=50,$line=10,$sess_name="verify"){
		//创建画布
		$width=80;
		$height=28;
		$image=imagecreatetruecolor($width, $height);
		$white=imagecolorallocate($image, 255, 255, 255);
		$black=imagecolorallocate($image,0,0,0);
		//用矩形填充画布
		imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
		$chars=buildRandomString($type,$length);
		$_SESSION[$sess_name]=substr($chars,0,$length);
		$fontfiles=array('msyh.ttc','msyhbd.ttc','msyhl.ttc','SIMLI.TTF','simsun.ttc','SIMYOU.TTF','STZHONGS.TTF');
		for($i=0;$i<$length;$i++){
			$size=mt_rand(14,18);
			$angle=mt_rand(-15,15);
			$x=5+$i*$size;
			$y=mt_rand(20,26);
			$fontfile="../font/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
			$color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
			$text=substr($chars,$i,1);
			imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
		}
		if($pixel){
			for($i=0;$i<50;$i++){
				imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $black);
			}
		}
		if($line){
			for($i=0;$i<3;$i++){
				$color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
				imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1), mt_rand(0,$width-1), mt_rand(0,$height-1), $color);
			}
		}
		ob_clean();
		header("content-type:image/gif");
		imagegif($image);
		imagedestroy($image);
	}
?>
