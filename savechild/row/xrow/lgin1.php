<?php
	
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
	$sel="select * from register where email='$username' AND upassword='$password'";
	$resultset = mysql_query($sel,$con);
	if(mysql_num_rows($resultset)>0)
	{
		
		session_start();
		while($row=mysql_fetch_array($resultset))
		{
					$_SESSION['user_status']=+"logged In";

					$_SESSION['username']=$row['uname'];
					
					$_SESSION['id']=$row['id']; 
										
					echo "user found";
					header("location:rgstr.php");
		}
	}
	mysql_close($con);
?>