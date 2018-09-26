<?php
//检查用户名和密码是否正确
function checkUser($sql){
	return fetchOne($sql);
}
//检查是否已经登录
function checkLogined(){
	if($_SESSION['id']==""){
		alertMes("对不起，请先登录","../pages/login.php");
	}
}
//退出登录
function logout(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}
	session_destroy();
	header("location:../index.php");
}
?>