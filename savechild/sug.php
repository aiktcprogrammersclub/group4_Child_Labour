<html>
<head>
<title>suggestion</title>
</head>
<body>
<form action='sug1.php' method='post' name='f' id='f'>
<br>
<center><h2>SUGGESTION</h2><center>
<div align="center">
<table cellspacing="15">
<tr>
<td>NAME:</td>
<td><input type='text' name='fn' placeholder='Enter your name' id='fn'/><br></td>

</tr>

<tr>
<td>EMAIL ID<font color="red">*</font>:</td>
<td><input type='email' name='email'></td>
</tr>

<tr>
<td>SUBJECT:</td>
<td><input type='text' name='sub' id='sub'/></td>
</tr>

<tr>
<td>MESSAGE<font color="red">*</font>:</td>
<td><textarea rows="4" cols="20" name='msg' id='msg'></textarea></td>
</tr>

<tr>
<td><input type="submit" name="send message" value="send message"/></td>
<td><input type="reset" name="reset" value="reset"/></td>
</tr>
</table>

<center>All fields marked with <font color="red">*</font> are required</center>
</div>
</form>
</body>
</html>