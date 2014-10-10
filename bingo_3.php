<?php
header("Content-type:text/html;charset=utf-8");
session_start () ;
if (!isset ($_SESSION['youcango'])){
echo "<p align=center>" ;
echo "<font color=#ff0000 size=5><strong><big>" ;
echo "急神马呀~一步步来嘛<a href='index.php'>回到开始</a>!" ;
echo "</big></strong></font></p>" ;
exit () ;
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>恭喜获得三等奖</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
</head>
<body>
    <div class="indexbg">
    	<img class="z_bg" src="./images/bingobg.jpg" width="100%" height="100% "style="position:absolute;top:0;left:0;z-index:-1">
    </div>
        <p class="congra">获得三等奖，你将获得<span>圣蜜莱雅丝白优肌补水睡眠面膜120g</span>一份</p>
    	<a class="gonext" href="pfile_3.php">点击前往提交个人资料</a>
</body>
</html>