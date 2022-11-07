<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>即期競標系統</title>
 </head>
 <body>
  <p align="center"><b><i><font size="7">賣家資訊</font></i></b></p>
  <input type ="button" onclick="history.back()" value="返回"></input>
  <form>
	賣&nbsp;家&nbsp;編&nbsp;號:<input type="text" name="SellerNsme" size="40"><br>
	賣&nbsp;家&nbsp;電&nbsp;話:<input type="tel" name="SellerPhone" size="40"><br>
	賣&nbsp;家&nbsp;郵&nbsp;箱:<input type="email" name="SellerMail" size="40"><br>
	賣&nbsp;家&nbsp;交&nbsp;易&nbsp時&nbsp段:<input type="time" name="SellerTime1" size="40">到<input type="time" name="SellerTime2" size="40"><br>
	<?php
	#echo date(format,[timestamp]);
	echo("賣家註冊日期:");echo date('Y'.'年'.'m'.'月'.'d'.'日');
	?> 
	<br>買&nbsp;家&nbsp;評&nbsp;價
  </form>
 
 
 </body>
</html> 