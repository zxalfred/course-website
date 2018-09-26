<?php
    error_reporting(0);
    require_once('../include.php');
    checkLogined();
    $nowId=$_SESSION['id'];
    $sql="select has_taken_exam from stu where id=$nowId";
    $res=fetchOne($sql);
    if($res[has_taken_exam]==1){
        echo "<script>window.location='doExam.php';</script>";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>计算机在化学中的应用——首页</title>
<link rel="shortcut icon" href="../pic/logo.ico" /> 
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/header.css" />
<link rel="stylesheet" type="text/css" href="../css/exam.css" />
</head>

<body>
<div id="pwSetDiv">
    <div class="pwSetTitle">
    密码修改
    <img src="../pic/关闭.png" id="closeBtn" />
    </div>
    <div class="pwSetBody">
        <form action="doPwSet.php" method="post">
            <span class="pwSetInput">
                <span style="letter-spacing: .5em;">原密</span>码：
                <input type="password" name="originPw" id="originPw" />
            </span>
            <br />
            <span class="pwSetInput">
                <span style="letter-spacing: .5em;">新密</span>码：
                <input type="password" name="nowPw" id="nowPw" />
            </span>
            <br />
            <span class="pwSetInput">
                确认密码：
                <input type="password" name="verifyPw" id="verifyPw">
            </span>
            <br />
            <input type="submit" value="确认修改" id="pwSetBtn" />
        </form>
    </div>
</div>
<div id="overlap"></div>

<div id="head">
    <div id="topDiv">
        <div id="topInfo">
        <?php
            echo $_SESSION['name']."，欢迎您！";
        ?>
        <a href="javascript:;" id="pwSet" style="color:white;text-decoration: underline;">修改密码</a>&nbsp;
        <a href="doLogout.php" style="color:white;text-decoration: underline;">退出</a>
        </div>
        <div id="bottomLine"></div>
    </div>
    <div id="navDiv">
        <span class="mainTitle">计算机在化学中的应用</span>
        <ul class="nav">
            <li><a href="home.php">首页</a></li>
            <li><a href="upload.php">作业提交</a></li>
            <li><a href="status.php" >提交情况</a></li>
            <li><a href="javascript:;" class="activeNav">在线测试</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div id="examDiv">
        提示：<br />
        <span>开始考试前，请确此计算机的 ChemDraw、Chem3D、Origin、Mathematica 等相关软件是否能正常运行。一旦点击“开始考试”，将不允许中途更换计算机。考试时间结束后，服务器将停止答案上传，请控制好答题时间。</span>
        <form action="doExam.php" method="post">
            <input type="submit" value="开始考试" id="examBtn" />
        </form>
    </div>

</div>
<div id="foot"></div>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
