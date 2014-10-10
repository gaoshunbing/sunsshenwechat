<?php
header("Content-type:text/html;charset=utf-8");
session_start () ;
$_SESSION['youcango'] = "thx4come";
require_once("count.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>赞自己</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
</head>
<body>
    <div class="indexbg">
    	<img class="z_bg" src="./images/indexbg.jpg" width="100%" height="560px" style="position:absolute;top:0;left:0;z-index:-1;min-height:320px;">
    	<a class="z_link" href="act.php"></a>
    	<a class="z_rule" href="rule.php"></a>
    </div>
</body>
</html>