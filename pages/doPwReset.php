<?php
error_reporting(0);
require_once('../include.php');
header("Content-type: text/html; charset=utf-8");
$stuId=$_POST['stuId'];
$defaultPw=md5("chemstu");
$sql="update stu set password='{$defaultPw}' where username='{$stuId}'";
mysql_query($sql);
alertMes("密码重置成功！","admin.php");
?>