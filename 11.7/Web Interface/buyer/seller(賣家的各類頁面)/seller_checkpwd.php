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
  
  
  
  header("Content-type:text/html;charset=utf-8");
  
  $seller_name=$_POST["seller_name"];
  $seller_password=$_POST["seller_password"];
  
  $link=create_connection();
  $sql="SELECT*FROM seller Where seller_name='$seller_name' AND seller_password='$seller_password'";
  $result=execute_sql($link,"myprj",$sql);
  
  
  
  
  if(mysqli_num_rows($result)==0){
	  mysqli_free_result($result);
	  mysqli_close($link);
	  echo"<script type='text/javascript'>";
	  echo"alert('seller name not correct');";
	  echo"history.back();";
	  echo"</script>";
  }
  
  else{
	  $id = mysqli_fetch_object($result)->id;
	  mysqli_free_result($result);
	  mysqli_close($link);
	  
	  setcookie("id",$id);
	  setcookie("passed","TRUE");
	  header("location:ui_seller.php");
  }
  
  setcookie("seller_name",$seller_name);
  
  
  #setcookie("telephone",$telephone);
  #setcookie("seller_name",$seller_name);
  #setcookie("seller_name",$seller_name);
  
  
  
  #$link=create_connection();
  #$sql="SELECT*FROM seller ";
  #$result=execute_sql($link,"myprj",$sql);
  #for($a=0;$a<1000;$a++){
	#  $seek_result=mysqli_data_seek($result,$a);
	#  $row = mysqli_fetch_row($result);
	#  if($row[2]=="$seller_name"){
	#	  break;
	#  }		  
    #  else{
	#	 continue; 
	#  }
 # }
  
  
  ?>
  
