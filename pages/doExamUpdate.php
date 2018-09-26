<?php
error_reporting(0);
require_once('../include.php');
header("Content-type: text/html; charset=utf-8");
//通过$_FILES文件上传变量接受上传文件信息
$fileInfo=$_FILES['examFile'];
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
		$path="../material/";
		if(move_uploaded_file($tmp_name, $path."exam.docx")){
			alertMes("试题文件上传成功！","admin.php");
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