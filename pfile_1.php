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
 setcookie("onlypost", '1'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>填写个人资料</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
<script type="text/javascript"> 
function checkMobile(){ 
    var sMobile = document.checkform.phone.value 
    if(!(/^1[3|5][0-9]\d{4,8}$/.test(sMobile))){ 
        alert("不是完整的11位手机号或者正确的手机号前七位"); 
        document.checkform.phone.focus(); 
        return false; 
    } 
} 
</script> 
</head>
<body>
    <div class="indexbg_pfile">
    	<img class="z_bg" src="./images/pfile.jpg" width="100%" height="560px">
    </div>
    <div class="z_wyg">恭喜你获得一等奖,您将获得<br/><span>iPad mini +圣蜜莱雅精品限量女神套装</span>一份</div>
    <form class="submitform" name="checkform" method="post" action="data.php" onSubmit="return checkMobile();">
    	<p class="z_notice">请填写相关信息，以便工作人员与你联系，确认派奖事宜。</p>
        <input type="hidden" name="level" value="1">
        <input type="hidden" name="levelc" value="一">
        <input type="hidden" name="wyg" value="iPad mini +圣蜜莱雅精品限量女神套装"/>
    	<p class="z_name">姓名:<input type="text" name="uname" id="yourname"/></p>
    	<p class="z_phone">电话:<input type="text" name="phone" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" id="yourphone" /></p>
        <p class="z_submit"><input type="submit" value="确认提交"></p>
    </form>
</body>
</html>