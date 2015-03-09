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
	   session_start();
	   $_SESSION['name']=$username;	
	   include "lgin.php";
    }	
    else
	{
	  echo "<script type='text/javascript'>alert('Please enter correct username and password');</script>";
      include 'lgin.php';
	}		
	mysql_close($con);
?>