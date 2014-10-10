<?php
/**
 * 抽奖
 * @param int $total
 */
header("Content-type:text/html;charset=utf-8");
session_start () ;
if (!isset ($_SESSION['youcango'])){
echo "<p align=center>" ;
echo "<font color=#ff0000 size=5><strong><big>" ;
echo "急神马呀~一步步来嘛<a href='index.php'>回到开始</a>!" ;
echo "</big></strong></font></p>" ;
exit () ;
 }
$con = mysql_connect("127.0.0.1","root","") or die('Could not connect: ' . mysql_error());
mysql_select_db("sussun_test",$con) or die('Could not connect: ' . mysql_error());
mysql_query("set names 'utf8'");
// $sql = "UPDATE  su_rewards SET `total` = `total`+1 WHERE id = 1";
// mysql_query($sql);
// $sql = "SELECT * FROM su_rewards";
// $cres = mysql_query($sql);
// $config = mysql_fetch_array($cres,MYSQL_ASSOC);

$sqllevel_1 = "SELECT level FROM su_uinfo WHERE level =1 ";
$level_1 = mysql_query($sqllevel_1);
$quantity = mysql_num_rows($level_1);

//总几率
function getReward($total=100)
{
 $win1 = floor(((int)0*$total)/100);//一等奖
 $win2 = floor(((int)0*$total)/100);//二等奖
 $win3 = floor(((int)100*$total)/100);//三等奖
 $other = $total-$win1-$win2-$win3;
 	$sql = "SELECT count(*) as c FROM su_uinfo WHERE level = 1";
	$res = mysql_query($sql);
	$rewards = mysql_fetch_array($res,MYSQL_ASSOC);
	$reward1 = $rewards['c'];
	$sql = "SELECT count(*) as c FROM su_uinfo WHERE level = 2";
	$res = mysql_query($sql);
	$rewards = mysql_fetch_array($res,MYSQL_ASSOC);
	$reward2 = $rewards['c'];
	$sql = "SELECT count(*) as c FROM su_uinfo WHERE level = 3";
	$res = mysql_query($sql);
	$rewards = mysql_fetch_array($res,MYSQL_ASSOC);
	$reward3 = $rewards['c'];
 $return = array();
 for ($i=0;$i<$win1;$i++)
 {
  	if($reward1 >= 1){
 		$return[] = '4';
 	}else{
 		$return[] = "1";
 	}
 }
 for ($j=0;$j<$win2;$j++)
 {
  	if($reward2 >= 15){
 		$return[] = '4';
 	}else{
 		$return[] = "2";
 	}
 }
 for ($m=0;$m<$win3;$m++)
 {
 	if($reward3 >= 30){
 		$return[] = '4';
 	}else{
 		$return[] = "3";
 	}
 }
 for ($n=0;$n<$other;$n++)
 {
  $return[] = '4';
 }

 shuffle($return);
 
 return $return[array_rand($return)];
}

// $data = getReward(100,$config['j_one'],$config['j_two'],$config['j_three']);
$data = getReward();
if($data == 1){
echo "<script>window.location.href='bingo_1.php';</script>";
}
if($data == 2){
echo "<script>window.location.href='bingo_2.php';</script>";
}
if($data == 3 && $quantity < 15){
echo "<script>window.location.href='bingo_3.php';</script>";
}else{
	echo "";
}
if($data == 4){
echo "<script>window.location.href='nobingo.php';</script>";
}
echo $data;
?> 