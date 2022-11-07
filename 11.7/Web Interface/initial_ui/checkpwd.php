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
  
  
  
  header("Content-type:text/html;charset=utf-8");
  
  $account=$_POST["account"];
  $password=$_POST["password"];
  $link=create_connection();
  $sql="SELECT*FROM seller Where account='$account' AND password='$password'";
  $result=execute_sql($link,"member",$sql);
  
  if(mysqli_num_rows($result)==0){
	  mysqli_free_result($result);
	  mysqli_close($link);
	  echo"<script type='text/javascript'>";
	  echo"alert('account not correct');";
	  echo"history.back();";
	  echo"</script>";
  }
  
  else{
	  $id = mysqli_fetch_object($result)->id;
	  mysqli_free_result($result);
	  mysqli_close($link);
	  
	  setcookie("id",$id);
	  setcookie("passed","TRUE");
	  header("location:seller/ui_seller.php");
  }
  ?>