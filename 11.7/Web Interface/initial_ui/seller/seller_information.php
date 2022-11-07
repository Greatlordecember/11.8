<?php
function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "20221230")
      or die("無法建立資料連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $member, $sql)
  {
    mysqli_select_db($link, $member)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }

$account=$_POST["account"];
$password=$_POST["password"];
$cellphone=$_POST["cellphone"];
$email=$_POST["email"];

$link=create_connection();
$sql="SELECT*FROM seller Where account='$account'";
$result=execute_sql($link, "member",$sql);

mysqli_close($link)



?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>即期競標系統</title>
 </head>
 <body>
  <p align="center"><b><i><font size="7">賣家資訊</font></i></b></p>
  
  <form>
	賣&nbsp;家&nbsp;編&nbsp;號:<?php echo $account?><br>
	賣&nbsp;家&nbsp;電&nbsp;話:<?php echo $cellphone?><br>
	賣&nbsp;家&nbsp;郵&nbsp;箱:<?php echo $email?><br>
	賣&nbsp;家&nbsp;交&nbsp;易&nbsp時&nbsp段:<input type="time" name="SellerTime1" size="40">到<input type="time" name="SellerTime2" size="40"><br>
	<?php
	#echo date(format,[timestamp]);
	echo("賣家註冊日期:");echo date('Y'.'年'.'m'.'月'.'d'.'日');
	?> 
	<br>買&nbsp;家&nbsp;評&nbsp;價
  </form>
  <input type ="button" onclick="history.back()" value="返回"></input>
 
 </body>
</html> 