<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>即期競標系統</title>
 </head>
 <body>
  <p align="center"><b><i><font size="7">新增產品</font></i></b></p>
  <input type ="button" onclick="history.back()" value="返回"></input>
  <form>
    產&nbsp;品&nbsp;類&nbsp;別:
	<select>
	<option>請&nbsp;選&nbsp;擇:</option>
    <option>肉類</option>
    <option>蔬菜類</option>
	</select><br>
	產&nbsp;品&nbsp;名&nbsp;稱:<input type="text" name="ProductName" size="40" required><br>
	特&nbsp;殊&nbsp;處&nbsp;理:
	<input type="radio" name="option1" value="Yes">是
	<input type="radio" name="option1" value="No">否<br>
	產&nbsp;品&nbsp;保&nbsp;值&nbsp期:<input type="date" name="ProductDate1" size="40" required>到<input type="date" name="ProductDate2" size="40" required><br>
	產&nbsp;品&nbsp;數&nbsp;量:<input type="number" name="ProductQuantity" size="40" required><br>
	產&nbsp;品&nbsp;單&nbsp;價:<input type="number" name="ProductQuantity" size="40" required>$NT<br>
	是&nbsp;否&nbsp;符&nbsp;合&nbsp;衛&nbsp;檢:
	<input type="radio" name="option2" value="Yes">是
	<input type="radio" name="option2" value="No">否<br>
	
  </form>
	
  <input type="button" name="register" value="Save" onclick="window.location.href=''"/>  
  <input type="button" name="register" value="Cancel" onclick="window.location.href=''"/>  

 
 </body>
</html> 