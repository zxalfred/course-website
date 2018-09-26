<?php
	error_reporting(0);
	require_once('../include.php');
	header("Content-type: text/html; charset=utf-8");
	$classInfo = fopen("../material/class.txt","r") or die("找不到学生花名册文件！");
	$sql="delete from stu_log;alter table stu_log auto_increment=1;delete from stu;alter table stu auto_increment=1";
	$sql=explode(";", $sql);
	foreach($sql as $key=>$value){
		mysql_query($value);
	}
	while(!feof($classInfo)){
		$oneLine=trim(fgets($classInfo));
		$isRight=preg_match('/[0-9]+\s+[\x{4e00}-\x{9fa5}]+/u',$oneLine,$regs);
		if($isRight){
			$parts=preg_match_all('/([0-9]+)|([\x{4e00}-\x{9fa5}]+)/u',$oneLine,$regs);
			$username=$regs[0][0];
			$name=$regs[0][1];
			$sql="insert stu(username,password,name) values('{$username}',md5('chemstu'),'{$name}')";
			mysql_query($sql);
		}
	}
	fclose($classInfo);
	alertMes("更新课程名单成功！","admin.php");
?>