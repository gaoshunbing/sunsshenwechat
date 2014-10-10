<?php
$con = mysql_connect("127.0.0.1","root","") or die('Could not connect: ' . mysql_error());
mysql_select_db("sussun_test",$con) or die('Could not connect: ' . mysql_error());
mysql_query("set names 'utf8'");
if($_POST){
	$sql = "UPDATE su_rewards SET j_one = '$_POST[j_one]' ,j_two = '$_POST[j_two]' ,j_three = '$_POST[j_three]'";
	mysql_query($sql);
}
// $sql = "SELECT * FROM su_uinfo";
$sql = "SELECT * FROM su_uinfo WHERE level > 0  ORDER BY id DESC";
$result = mysql_query($sql);
$sql = "SELECT * FROM su_rewards";
$cres = mysql_query($sql);
$config = mysql_fetch_array($cres,MYSQL_ASSOC);
$fp = fopen('jsb.txt', 'r');
if (!$fp) {
    echo 'Could not open file jsb.txt';
}
echo "<p>参与次数:";
while(false !== ($char = fgetc($fp))){
    echo "$char</p>";
}
fclose($fp);
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>中奖名单</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="common.css" rel="stylesheet">
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="touch.js"></script>
<style type="text/css">
tr td{border: 1px solid #000;width: 120px;text-align: center;}
input{margin:5px;}
thead tr{height: 50px;background: #1570A6;color: #fff;}
</style>
</head>
<body>
<table>
	<thead>
		<tr>
			<td>姓名</td>
			<td>几等奖</td>
			<td>手机号</td>
		</tr>
	</thead>
	<?php 
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	 ?>
	 <tr>
		<td><?php echo $row['uname']; ?></td>
		<td><?php echo $row['level']; ?></td>
		<td><?php echo $row['phone']; ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>