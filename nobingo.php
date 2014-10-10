<?php
header("Content-type:text/html;charset=utf-8");
session_start () ;
$_SESSION['youcango'] = "thx4come";
if (!isset ($_SESSION['youcango'])){
echo "<p align=center>" ;
echo "<font color=#ff0000 size=5><strong><big>" ;
echo "急神马呀~一步步来嘛<a href='index.php'>回到开始</a>!" ;
echo "</big></strong></font></p>" ;
exit () ;
 }
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>好遗憾，这次没中奖
再次挑战吧</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
</head>
<body>
    <div class="indexbg_nobingo">
    	<img class="z_bg" src="./images/nobingobg.jpg" width="100%" height="560px" style="position:absolute;top:0;left:0;z-index:-1">
    	<a href="index.php"></a>
    </div>
</body>
</html>