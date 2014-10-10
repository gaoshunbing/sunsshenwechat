<?php
header("Content-type:text/html;charset=utf-8");
session_start () ;
if (!isset ($_SESSION['youcango'])){
echo "<p align=center>" ;
echo "<font color=#ff0000 size=5><strong><big>" ;
echo "急神马呀~一步步来嘛<a href='index.php'>回到开始</a>!" ;
echo "</big></strong></font></p>" ;
exit () ;
unset($_SESSION['youcango']);
 }
 session_destroy();
$con = mysql_connect("127.0.0.1","root","9b57a1043f") or die('Could not connect: ' . mysql_error());
mysql_select_db("sussun_test",$con) or die('Could not connect: ' . mysql_error());
mysql_query("set names 'utf8'");
// $sql = "SELECT * FROM su_uinfo";
if ($_COOKIE['onlypost'] == 1) {
	$sql = "INSERT INTO su_uinfo(id,level,uname,phone) VALUES('','$_POST[level]','$_POST[uname]','$_POST[phone]')";
	$result = mysql_query($sql);
	if (!$result) {
		die( mysql_error());
	}
}else{
	setcookie('onlypost','',time()-3600);
	echo "请勿重复提交!";
	die;
}






// else{
// echo <<<JS
// <script language="javascript" type="text/javascript"> 
// var i = 5; 
// var intervalid; 
// intervalid = setInterval("fun()", 1000); 
// function fun() { 
// if (i == 0) { 
// window.location.href = "./index.php"; 
// clearInterval(intervalid); 
// } 
// document.getElementById("mes").innerHTML = i; 
// i--; 
// } 
// </script> 
// JS;
// }


// $row = mysql_fetch_array($result);
// print_r($row);

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>提交成功</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
<style type="text/css">
.indexbg div{position: absolute;left: 26%; top: 60%; width: 50%; height: 10%;background: #fff;border-radius: 7px;opacity: 0.5;}
	.indexbg div p{font-size: 3em;text-align: center;}
</style>
</head>
<body>
    <div class="indexbg_submitok">
    	<img class="z_bg" src="./images/submitok.jpg" width="100%" height="560px" style="position:absolute;top:0;left:0;z-index:-1;">
<!--     	<div>
			<p>提交成功! 将在 <span id="mes">5</span> 秒钟后返回首页！</p>
		</div> -->
		<a href="index.php"></a>
    </div>
    <div class="z_wyg">恭喜你获得<?php echo $_POST["levelc"]?>等奖,您将获得<br/><span><?php echo $_POST["wyg"]?></span>一份</div>
</body>
</html>