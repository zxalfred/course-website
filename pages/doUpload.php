<?php
error_reporting(0);
require_once('../include.php');
header("Content-type: text/html; charset=utf-8");
//通过$_FILES文件上传变量接受上传文件信息
$fileInfo=$_FILES['homework'];
$filename=$fileInfo['name'];
$type=$fileInfo['type'];
$tmp_name=$fileInfo['tmp_name'];
$size=$fileInfo['size'];
$error=$fileInfo['error'];
$upload_info=$_SESSION['upload_info'];
$id=$_SESSION['id'];
//判断错误号，只有为0或者是UPLOAD_ERR_OK，上传成功
if($error==0){
	if($size>FILESIZE){
		exit("上传文件过大！");	
	}else if(!is_uploaded_file($tmp_name)){
		exit("文件非HTTP POST方式上传");
	}else{
		//获取扩展名
		//$ext=pathinfo($filename,PATHINFO_EXTENSION);
		$ext=strtolower(end(explode('.', $filename)));
		$workCateNum=$_POST["workCate"];
		switch($workCateNum){
			case "0":
				$workCate="ChemDraw";
				break;
			case "1":
				$workCate="Chem3D";
				break;
			case "2":
				$workCate="Origin";
				break;
			case "3":
				$workCate="Mathematica";
				break;
		}
		$workOrder=$_POST["workOrder"]+1;
		$wkOrder="-".$workOrder;
		$path="../uploads/".$workCate."/".$workOrder."/";
		//若不存在该文件夹，创建之
		if(!file_exists($path)){
			mkdir($path,0777,true);
			chmod($path, 0777);
		}
		if(move_uploaded_file($tmp_name, $path.$_SESSION['username']." ".$workCate.$wkOrder.".".$ext)){
			
			//发送邮件
			// $to="ananwu@xmu.edu.com";
			// $subject="计算机在化学中的应用作业";
			// $subject=iconv("utf-8","gbk",$subject);
			// $name=iconv("utf-8","gbk",$_SESSION['name']);
			// $message="Hello,".$name.$workCate.$workOrder."have submitted!";
			// mail($to,$subject,$message);
			
			//从数据表stu中获取提交信息upload_info
			$sql="select upload_info from stu where id=$id";
			$upload_info=fetchOne($sql)['upload_info'];
			//修改数据表stu中的提交信息
			$arr1=explode("|", $upload_info);
			$arr=array();
			foreach($arr1 as $arrKey=>$arrVal){
				$arr[$arrKey]=explode(",", $arrVal);
			}
			$arr[intval($workCateNum)][intval($workOrder)-1]="1";

			foreach($arr as $arrKey=>$arrVal){
				$arr[$arrKey]=implode(",", $arr[$arrKey]);
			}
			$new_info=implode("|", $arr);
			$sql="update stu set upload_info='{$new_info}' where id=$id";
			mysql_query($sql);

			echo "<script>alert('上传文件成功！');</script>";
			echo "<script>window.location.href='upload.php';</script>";

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