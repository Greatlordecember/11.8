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
  
//got the data
$account=$_POST["account"];
$password=$_POST["password"];
$cellphone=$_POST["cellphone"];
$email=$_POST["email"];

$link=create_connection();
$sql="SELECT*FROM seller Where account='$account'";
$result=execute_sql($link, "member",$sql);

if(mysqli_num_rows($result)!=0){
	mysqli_free_result($result);
	
	echo "<script type='text/favascript'>";
	echo "alert('帳號被使用中');";
	echo "history.back();";
	echo "</script>";
}

else{
	mysqli_free_result($result);
	
	$sql="INSERT INTO seller(account,password,cellphone,email) VALUES('$account','$password','$cellphone','$email')";
	$result=execute_sql($link,"member",$sql);
  }
  
  mysqli_close($link)
  ?>
  
  
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>成功</title>
	</head>
	<body bgcolor="#FFFFFF">
		<p align="center">註冊成功，資料如下:<br>
			賣家編號:<font color="#FF0000"><?php echo $account?></font><br>
			麥加密碼:<font color="#FF0000"><?php echo $password?></font><br>
			請記下編號和密碼，然後<a href="login.html">登入網站</a>
		</p>
	</body>
</html>	