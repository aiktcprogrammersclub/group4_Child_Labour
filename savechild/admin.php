<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="Style\h.css">
<script>
 function a()
 {
   var uname=document.getElementById("uname").value;
   var pwd=document.getElementById("pwd").value;
   if(uname==''||pwd=='')
   {
	 alert("Invalid data");
	 return false;
   }
   else
   {
		return true;
   }
 }
</script>
</head>
<body>
<div id="wrap">
		<div id="banner" style="background-color:#DADADA">
			<div id="logo" style="float:left;margin-right:300px;width=50;height=50"><img src="img\logo.png" width=750></div>
		</div><br><br><br><br><br><br><hr>
<center><div id="body"><br>
			<h2>Administrator Console</h2>
			<table cellspacing="35" style='border-style: ridge;'>
			<form action='admin1.php' method='post' onsubmit="return a()">
				<tr><td>Username</td><td><input type='text' name='uname' id='uname'></td></tr>
				<tr><td>Password </td><td><input type='password' name='pwd' id='pwd'></td></tr>
				<tr><td colspan=2><center><input type="Submit" value="Log In" style="color:white;background-color:brown;font-size: 20px"></center></td></tr>
			</form>
			</table>
		</div>
</center>
<br><br><br><br>
</div>
</body>
</html>