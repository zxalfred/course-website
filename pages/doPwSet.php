<?php
	error_reporting(0);
	require_once("../include.php");
	header("Content-type: text/html; charset=utf-8");
	$originPw=md5($_POST['originPw']);
	$nowPw=$_POST['nowPw'];
	$verifyPw=$_POST['verifyPw'];
	$id=$_SESSION['id'];
	if($_SESSION['password']==$originPw){
		if($nowPw==$verifyPw){
			$nowPw=md5($nowPw);
			$sql="update stu set password='{$nowPw}' where id=$id";
			if(mysql_query($sql)){
				$_SESSION['password']=$nowPw;
				echo "<script>alert('修改密码成功！');</script>";
				echo "<script>history.go(-1);</script>";
			}else{
				echo mysql_error();
			}
		}else{
			echo "<script>alert('修改失败，密码两次输入不一致！');</script>";
			echo "<script>history.go(-1);</script>";
		}
	}else{
		echo "<script>alert('原密码输入错误！');</script>";
		echo "<script>history.go(-1);</script>";	
	}
?>