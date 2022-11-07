<?php
function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "20221230")
      or die("無法建立資料連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $myprj, $sql)
  {
    mysqli_select_db($link, $myprj)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
  
  $link=create_connection();
  $sql="SELECT*FROM seller ";
  $result=execute_sql($link,"myprj",$sql);
  for($a=0;$a<1000;$a++){
	  $seek_result=mysqli_data_seek($result,$a);
	  $row = mysqli_fetch_row($result);
	  if($row[2]==$_COOKIE["seller_name"]){
		  break;
	  }		  
      else{
		 continue; 
	  }
  }  
	  
	    
	mysqli_close($link);  

?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>即期競標系統</title>
 </head>
 <body>
  <p align="center"><b><i><font size="7">賣家資訊</font></i></b></p>
  <!-- <form action ="checkpwd.php" method="post", name="myForm"> -->
  
  <form>
    
	
	
	賣&nbsp;家&nbsp;編&nbsp;號:<?php echo $_COOKIE["seller_name"];?><br>
	賣&nbsp;家&nbsp;電&nbsp;話:<?php echo $row[3];?><br>
	賣&nbsp;家&nbsp;郵&nbsp;箱:<?php echo $row[4];?><br>
	賣&nbsp;家&nbsp;註&nbsp;冊&nbsp日&nbsp期:<?php echo $row[8];?><br>
	賣&nbsp;家&nbsp;交&nbsp;易&nbsp時&nbsp段:<input type="time" name="SellerTime1" size="40">到<input type="time" name="SellerTime2" size="40"><br>
	 
	<br>買&nbsp;家&nbsp;評&nbsp;價
  </form>
  <input type ="button" onclick="history.back()" value="返回"></input>
 
 </body>
</html> 