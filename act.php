<?php
header("Content-type:text/html;charset=utf-8");
session_start () ;
$_SESSION['youcango'] = "thx4come";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>赞赏自己狠点吧</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
</head>
<body>
    <div class="indexbg">
    	<img class="z_bg" src="./images/actbg.jpg" width="100%" height="100% "style="position:absolute;top:0;left:0;z-index:-1">
    	<a class="touchme"><img src="./images/touchme.jpg" width="86.71875%" height="53.4375%"></a>
    </div>
    <div class="jindu"><img src="./images/jindu.png"></div>
	<div class="persent"><span id="you">0</span>%</div>
<script type="text/javascript">
function GetRandomNum(Min,Max)
{   
var Range = Max - Min;   
var Rand = Math.random();   
return Min + Math.round(Rand * Range);   
}
var  i= 0;
	$(".touchme").tap(function(){
	if(i < 80){	
		i = document.getElementById('you').innerHTML=parseInt(document.getElementById('you').innerHTML)+GetRandomNum(1,10);
		$(".jindu img").css("width",i+"%");
		}else{
			window.location.href="zhongjiang.php";
		}
	});
function timeoutgo(){
	window.location.href="notenough.php"
}
setTimeout('timeoutgo()',10000)
</script>
</body>
</html>