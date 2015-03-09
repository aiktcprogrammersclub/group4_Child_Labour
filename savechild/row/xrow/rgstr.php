<?php
?>
<html>
<head>
<title>rgstr</title>
</head>
<body bgcolor="pink">
<form action="rgstr1.php" method="get">
<div align="center">
<table>
	<tr><td>Email:</td><td><input type="email" name="email" id="email" ></td></tr><br/>
	<tr><td>Fname:</td><td><input type="text" name="fn" id="fn"></td></tr><br>
	<tr><td>Lname:</td><td><input type="text" name="ln" id="ln"><br/></td></tr>
    <tr><td>Contact No:</td><td><input type="number" name="num" id="num" ></td></tr><br/>
	<tr><td>City:</td><td><input type="text" name="city" id="city"></td></tr>
	<tr><td>State:</td><td><select name=slist>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select></td></tr>

	<tr><td>Pincode:</td><td><input type="number" name="pincode" id="pincode"></td></tr>
	<tr><td>Enter Password : </td><td><input type="password" name="upassword" id="upassword" ></td></tr>
	<tr><td>Confirm Password : </td><td><input type="password" name="cpassword" id="cpassword" ></td></tr>
	<tr><td><input type="submit" value="Submit"></td>
	<td><input type="reset" value="Reset"></td></tr>
</table>
	</div></form>
</body>


<