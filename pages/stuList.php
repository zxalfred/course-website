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
<link rel="stylesheet" type="text/css" href="../css/stuList.css" />
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
            <li><a href="admin.php">配置</a></li>
            <li><a href="#" class="activeNav">名单</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div id="listDiv">
        <table id="listTable">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>
                    <th>学号</th>
                    <th>考试情况</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result=mysql_query("select * from stu");
                    while($rows=mysql_fetch_assoc($result)){
                        $tick="";
                        if($rows['has_taken_exam']=="1"){
                            $tick="<img src='../pic/tick_small.png' />";
                        }
                        echo "<tr><td>{$rows['id']}</td><td>{$rows['name']}</td><td>{$rows['username']}</td><td>$tick</td></tr>";
                    }
                ?>               
            </tbody>
        </table>
    </div>
</div>
<div id="foot"></div>

<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
