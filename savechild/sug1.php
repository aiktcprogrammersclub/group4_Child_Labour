<?php
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
	
	$name=$_REQUEST["fn"];
	$email=$_REQUEST["email"];

	$subject=$_REQUEST["sub"];
	
	$message=$_REQUEST["msg"];
	
	
	$row="insert into sug(sid,name,email,subject,message) values('','$name','$email','$subject','$message')";
	
	if(mysql_query($row,$con))
	{
		echo "<script type='text/javascript'>alert('Suggestion Delivered successfully !');</script>";
		include 'sug.php';
	}
	else
	{
		die(mysql_error());
	}
?>