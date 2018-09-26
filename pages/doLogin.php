<?php
error_reporting(0);
require_once('../include.php');
header("Content-type: text/html; charset=utf-8");
$username=$_POST['username'];
$passwd=$_POST['password'];
$password=md5($passwd);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
if($verify==$verify1){
	$sql="select * from stu where username='{$username}' and password='{$password}'";
	$res=checkUser($sql);
	if($res){
		$_SESSION['name']=$res['name'];
		$_SESSION['username']=$res['username'];
		$_SESSION['id']=$res['id'];
		$_SESSION['password']=$password;
		$_SESSION['loginIp']=$_SERVER['REMOTE_ADDR'];
		$_SESSION['hasTakenExam']=$res['has_taken_exam'];
		$_SESSION['examIp']=$res['exam_ip'];
		$username=$res['username'];
		$time=date('Y/m/d H:i:s');
		$loginIp=$_SESSION['loginIp'];
		$table='stu_log';
		$sql="insert {$table}(username,login_ip,time) values('{$username}','{$loginIp}','{$time}');";
		mysql_query($sql);
		header("location:home.php");
	}elseif ($username==ADMIN_NAME&&$passwd==ADMIN_PW) {
		$_SESSION['id']="0";
		header("location:admin.php");
	}
	else{
		alertMes("用户名或密码错误","login.php");
	}
}else{
	alertMes("验证码错误","login.php");
}
?>