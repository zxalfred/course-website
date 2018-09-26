<?php
    error_reporting(0);
    require_once('../include.php');
    checkLogined();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>计算机在化学中的应用——首页</title>
<link rel="shortcut icon" href="../pic/logo.ico" /> 
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/header.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
</head>

<body>
<div id="head">
    <div id="topDiv">
        <div id="topInfo">
            管理员，欢迎您！
        <a href="doLogout.php" style="color:white;text-decoration: underline;">退出</a>
        </div>
        <div id="bottomLine"></div>
    </div>
    <div id="navDiv">
        <span class="mainTitle">计算机在化学中的应用</span>
        <ul class="nav">
            <li><a href="#" class="activeNav">配置</a></li>
            <li><a href="stuList.php">名单</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div class="adminTitle">密码重置</div>
    <div class="manageDiv">
        <div class="manageDiv_l">学号：</div>
        <div class="manageDiv_r">
            <form action="doPwReset.php" method="post">
                <input type="text" id="pwResetInput" name="stuId" maxlength="14" />
                <input type="submit" id="pwResetBtn" value="重置" /><br />
                <div>(初始密码为 chemstu)</div>
            </form>
        </div>
    </div>
    
    <div class="adminTitle">更新课程名单</div>
    <div class="manageDiv">
        <div class="manageDiv_l">选择名单：</div>
        <div class="manageDiv_r">
            <form action="doListUpdate.php" method="post"  enctype="multipart/form-data">
                <input type="file" id="updateListInput" name="stuList" /><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="20971520" />
                <input type="submit" id="updateListBtn" value="更新名单" /><br />
                <div>(文件应为utf8编码的文本文件。每行为姓名+学号，用空格隔开。)</div>
            </form>
        </div>
    </div>

    <div class="adminTitle">上传考试题目</div>
    <div class="manageDiv">
        <div class="manageDiv_l">选择题目：</div>
        <div class="manageDiv_r">
            <form action="doExamUpdate.php" method="post"  enctype="multipart/form-data">
                <input type="file" id="updateExamInput" name="examFile" /><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
                <input type="submit" id="updateExamBtn" value="上传题目" /><br />
            </form>
        </div>
    </div>
</div>
<div id="foot"></div>

<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
