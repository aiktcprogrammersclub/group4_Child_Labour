<?php
	
	$username=$_REQUEST["username"];
	$password=$_REQUEST["upassword"];
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
	$sel="select * from register where email='$username' AND upas='$password'";
	$resultset = mysql_query($sel,$con);
	if(mysql_num_rows($resultset)>0)
	{
			echo "user found";
    }	
    else
	{
		echo "not found";
	}		
	mysql_close($con);
?>