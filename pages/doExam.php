<?php
    error_reporting(0);
    require_once('../include.php');
    header("Content-type: text/html; charset=utf-8");
    checkLogined();
    $nowIp=$_SESSION['loginIp'];
    $nowId=$_SESSION['id'];
    if($_SESSION['hasTakenExam']!=0){
    	if($_SESSION['loginIp']!=$_SESSION['examIp']){
    		echo "<script>alert('请在开始考试的计算机上完成考试！');history.go(-1);</script>";
    	}
    }else{
	    $sql="update stu set has_taken_exam=1, exam_ip='$nowIp' where id=$nowId";
	    mysql_query($sql);
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
	<div id="uploadExamDiv">
        <br />
		<a href="../material/exam.docx" style="text-decoration: underline;color: #000">下载试题</a>
        <form action="doExamUpload.php" method="post" enctype="multipart/form-data">
			<span class="examSelect">
            题目类型：
                <select name="examCate" id="examCate">
                    <option value="0">ChemDraw</option>
                    <option value="1">Chem3D</option>
                    <option value="2">Origin</option>
                </select>
            </span>
            <br />
            题目序号：
            <span class="examSelect">
                <select name="examOrder" id="examOrder">
                    <option value="0">第一题</option>
                    <option value="1">第二题</option>
                </select>
            </span>
            <br />
            <span class="examSelect"><input type="hidden" name="MAX_FILE_SIZE" value="52428800" /><input type="file" name="examAnswer" /></span><br />
            <input type="submit" value="上传答案" id="submit">
		</form>
	</div>
</div>
<div id="foot"></div>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
<script type="text/javascript">
    $('#examCate').change(function(){
        var cateVal = $(this).val();
        if(cateVal==1){
            $('#examOrder').html('<option value="0">第一题</option>');
        }
        else{
            $('#examOrder').html('<option value="0">第一题</option><option value="1">第二题</option>');
        }
    });
</script>
</html>
