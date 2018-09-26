<?php
    error_reporting(0);
    require_once('../include.php');
    if($_SESSION['id']!=""){
        header("location:home.php");
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
<link rel="stylesheet" type="text/css" href="../css/home.css" />

</head>

<body>
<div id="loginDiv" style="display:block;">
	<div class="loginTitle">
    用户登录
    <img src="../pic/关闭.png" id="closeBtn" />
    </div>
    <div class="loginBody">
    	<form action="../pages/doLogin.php" method="post">
            <div id="userDiv">
                <img src="../pic/user.png" class="loginImg" />
                <input type="text" name="username" id="username" />
            </div>
            <div id="pwDiv">
                <img src="../pic/password.png" class="loginImg" />
                <input type="password" name="password" id="passwd" />
            </div>
            <div id="verifyDiv">
                <input type="text" placeholder="验证码" name="verify" id="verify">
                <a href="login.php" title="点击更换"><img src="../pages/getVerify.php" alt="" class="verifyImg"></a>
            </div>
            <input type="submit" value="登录" id="loginBtn" />
        </form>
    </div>
</div>
<div id="overlap" style="display: block;"></div>
<div id="head">
    <div id="topDiv">
        <div id="topInfo">
        欢迎来到本课程，请&nbsp;
        <a href="javascript:;" id="topBtn">登录</a>!
        </div>
        <div id="bottomLine"></div>
    </div>
    <div id="navDiv">
        <span class="mainTitle">计算机在化学中的应用</span>
        <ul class="nav">
            <li><a href="#" class="activeNav">首页</a></li>
            <li><a href="upload.php">作业提交</a></li>
            <li><a href="#">提交情况</a></li>
            <li><a href="#">在线测试</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div class="introDiv">
        <div class="introPic">
        </div>
        <div class="introduct">
            <div class="introTitle">
            课程简介
            </div>
            <div class="introBody">
            <p>本课程的开设对象是化学化工学院二年级本科学生。本课程内容主要包括：分子图形软件ChemDraw、Chem3D的使用，数据处理软件Origin的使用，Mathematica的使用。通过本课程的学习使学生能更进一步加深对分子结构的认识，了解数据处理及图形化的使用，为进一步地在相关领域的学习打下基础。</p><p>This course is orientated to junior students in chemistry department. During the course, the students will be exposed to computer experiments in drawing 2D/3D molecular structures using ChemDraw and Chem3D, and learn how to manipulate experimental results with origin and Mathematica. Users should have experience in using applications in Windows environment.</p>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="info">
            <ul class="infoTitle">
                <li class="active">课程信息</li><li>参考书目</li>
            </ul>
            <div class="infoBody current">
                <ul>
                    <li>教师：吴安安</li>
                    <li>邮箱：<a href="mailto:ananwu@xmu.edu.cn">ananwu@xmu.edu.cn<a></li>
                    <li>地址：卢嘉锡楼234</li>
                    <br />
                    <li>课程学分/周学时：1.5/2</li>
                    <li>课程类型：学科类方向性课程</li>
                    <li>先修课程：计算机应用基础，无机化学</li>
                </ul>
            </div>
            <div class="infoBody">
                <ol style="list-style-type: decimal;">
                    <li style="list-style-type: decimal;">ChemDraw用户手册电子版</li>
                    <li style="list-style-type: decimal;">精通Origin 7.0， 周剑平编著，北京航空航天大学出版社</li>
                    <li style="list-style-type: decimal;">Mathematica，Stephen Wolfram,郝孝良，周又仓译，西安交通大学出版社</li>
                </ol>   
            </div>
        </div>
    </div>
    <div class="content">
        <div class="message">
            <div class="mesTitle">课件下载</div>
            <div class="mesBody">
                <ul>
                    <li><a href="javascript:alert('对不起，请先登录！');$('#topBtn').click();">ChemDraw</a></li>
                    <li><a href="javascript:alert('对不起，请先登录！');$('#topBtn').click();">Chem3D</a></li>
                    <li><a href="javascript:alert('对不起，请先登录！');$('#topBtn').click();">Origin</a></li>
                    <li><a href="javascript:alert('对不起，请先登录！');$('#topBtn').click();">Mathematica</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="foot"></div>

<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
