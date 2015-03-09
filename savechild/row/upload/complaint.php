
<?php
?>
<html>
<head>
<title>complaints</title>
</head>
<body>
<form action='complaint1.php' method='post' name='f' id='f'>
<center><h2>COMPLAINTS</h2><center>
<div align="center">
<table>
<tr>
<td>NAME:</td>
<td><input type='text' name='fn' placeholder='Enter your name' id='fn'/><br></td>

</tr>

<tr>
<td>EMAIL ID<font color="red">*</font>:</td>
<td><input type='email' name='email' id='email'></td>
</tr>

<tr>
<td>SUBJECT:</td>
<td><input type='text' name='sub' id='sub'/></td>
</tr>

<tr>
<td>MESSAGE<font color="red">*</font>:</td>
<td><input type='textarea' name='msg' id='msg'/></td>
</tr>

<tr>
<td><input type="submit" name="send message" value="send message" onClick()="complaint1.php"/></td>
<td><input type="reset" name="reset" value="reset"/></td>
</tr>
</table>

<center>All fields marked with <font color="red">*</font> are required</center>
</div>
</form>
</body>
</html>