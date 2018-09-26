<?php
error_reporting(0);
require_once('../include.php');
header("Content-type: text/html; charset=utf-8");
//通过$_FILES文件上传变量接受上传文件信息
$fileInfo=$_FILES['examAnswer'];
$filename=$fileInfo['name'];
$type=$fileInfo['type'];
$tmp_name=$fileInfo['tmp_name'];
$size=$fileInfo['size'];
$error=$fileInfo['error'];
$upload_info=$_SESSION['upload_info'];
$id=$_SESSION['id'];
//判断错误号，只有为0或者是UPLOAD_ERR_OK，上传成功
if($error==0){
	if($size>52428800){
		exit("上传文件过大！");	
	}else if(!is_uploaded_file($tmp_name)){
		exit("文件非HTTP POST方式上传");
	}else{
		//获取扩展名
		//$ext=pathinfo($filename,PATHINFO_EXTENSION);
		$ext=strtolower(end(explode('.', $filename)));
		$examCateNum=$_POST["examCate"];
		switch($examCateNum){
			case "0":
				$examCate="ChemDraw";
				break;
			case "1":
				$examCate="Chem3D";
				break;
			case "2":
				$examCate="Origin";
				break;
		}
		$examOrder=$_POST["examOrder"]+1;
		$path="../examUpload/".$_SESSION['username']."/";
		//若不存在该文件夹，创建之
		if(!file_exists($path)){
			mkdir($path,0777,true);
			chmod($path, 0777);
		}
		if(move_uploaded_file($tmp_name, $path.$examCate."-".$examOrder.".".$ext)){
			alertMes("上传答案成功！","doExam.php");
		}else{
			echo '上传失败';
		}
	}
}else{
	//匹配错误信息
	switch ($error) {
		case 1:
			$mes= "上传文件超过了PHP配置文件中upload_max_filesize选项的值";
			break;
		case 2:
			$mes= "超过了表单max_file_size限制的大小";
			break;
		case 3:
			$mes= "文件部分被上传";
			break;
		case 4:
			$mes= "没有选择上传文件";
			break;
		case 6:
			$mes= "没有找到临时目录";
			break;
		case 7:
			$mes= "文件写入失败";
			break;
		case 8:
			$mes= "上传文件被PHP扩展程序中断";
			break;			
		default:
			$mes= "上传文件失败";
			break;
	}
	exit($mes);
}
?>