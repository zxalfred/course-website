<?php
    error_reporting(0);
    require_once('../include.php');
    checkLogined();
    $id=$_SESSION['id'];
    $sql="select upload_info from stu where id=$id";
    $upload_info=fetchOne($sql)['upload_info'];
    $arr1=explode("|", $upload_info);
    $arr=array();
    foreach($arr1 as $arrKey=>$arrVal){
        $arr[$arrKey]=explode(",", $arrVal);
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
<link rel="stylesheet" type="text/css" href="../css/status.css" />
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
            <li><a href="javascript:;" class="activeNav">提交情况</a></li>
            <li><a href="exam.php">在线测试</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div class="nav1">
        <ul>
            <li><a href="#" index="0">ChemDraw</a></li>
            <li><a href="#" index="1">Chem3D</a></li>
            <li><a href="#" index="2">Origin</a></li>
            <li><a href="#" index="3">Mathematica</a></li>
        </ul>
    </div>
    <div class="statusDiv nowCate">
        <table class="statusTable"> 
                <tr>
                    <th>作业次数</th>
                    <th>提交状态</th>
                </tr>        
                <tr>
                    <td>第一次</td>
                    <td><?php echo $arr[0][0]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第二次</td>
                    <td><?php echo $arr[0][1]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第三次</td>
                    <td><?php echo $arr[0][2]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第四次</td>
                    <td><?php echo $arr[0][3]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第五次</td>
                    <td><?php echo $arr[0][4]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>               
        </table> 
    </div>
    <div class="statusDiv">
        <table class="statusTable"> 
                <tr>
                    <th>作业次数</th>
                    <th>提交状态</th>
                </tr>        
                <tr>
                    <td>第一次</td>
                    <td><?php echo $arr[1][0]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第二次</td>
                    <td><?php echo $arr[1][1]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第三次</td>
                    <td><?php echo $arr[1][2]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第四次</td>
                    <td><?php echo $arr[1][3]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第五次</td>
                    <td><?php echo $arr[1][4]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>               
        </table>
    </div> 
    <div class="statusDiv">
        <table class="statusTable"> 
                <tr>
                    <th>作业次数</th>
                    <th>提交状态</th>
                </tr>        
                <tr>
                    <td>第一次</td>
                    <td><?php echo $arr[2][0]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第二次</td>
                    <td><?php echo $arr[2][1]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第三次</td>
                    <td><?php echo $arr[2][2]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第四次</td>
                    <td><?php echo $arr[2][3]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第五次</td>
                    <td><?php echo $arr[2][4]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>               
        </table> 
    </div>
    <div class="statusDiv">
        <table class="statusTable"> 
                <tr>
                    <th>作业次数</th>
                    <th>提交状态</th>
                </tr>        
                <tr>
                    <td>第一次</td>
                    <td><?php echo $arr[3][0]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第二次</td>
                    <td><?php echo $arr[3][1]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第三次</td>
                    <td><?php echo $arr[3][2]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第四次</td>
                    <td><?php echo $arr[3][3]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>
                <tr>
                    <td>第五次</td>
                    <td><?php echo $arr[3][4]=="1"?"<img src='../pic/tick.png' />":"" ?></td>
                </tr>               
        </table>
    </div>    
</div>
<div id="foot"></div>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript">
    

</script>
</body>
</html>
