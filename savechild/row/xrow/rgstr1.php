<?php
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
	$email=$_REQUEST["email"];
	$fname=$_REQUEST["fn"];
	$lname=$_REQUEST["ln"];
	$cno=$_REQUEST["num"];
	$city=$_REQUEST["city"];
	$state=$_REQUEST["slist"];
	$pincode=$_REQUEST["pincode"];
	$upas=$_REQUEST["upassword"];
	$cpas=$_REQUEST["cpassword"];
	$row="insert into register(id,email,fname,lname,cno,city,state,pincode,upas,cpas) values('','$email','$fname','$lname','$cno','$city','$state','$pincode','$upassword','$upassword')";
	
	if(mysql_query($row,$con))
	{
		echo "Resistered Successfully"."<br>";
	}
	else
	{
		die(mysql_error());
	}
?>