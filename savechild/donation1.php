<?php
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
	$amount=$_REQUEST["amount"];
	$cause=$_REQUEST["cause"];
	$ngo=$_REQUEST["ngo"];
	$card=$_REQUEST["card"];
	$cno=$_REQUEST["cno"];
	$month=$_REQUEST["month"];
	$year=$_REQUEST["year"];
	$cvv=$_REQUEST["cvv"];
	$name=$_REQUEST["name"];
	$row="insert into donation(id,amount,cause,ngo,card,cno,month,year,cvv,name) values('','$amount','$cause','$ngo','$card','$cno','$month','$year','$cvv','$name')";
	
	if(mysql_query($row,$con))
	{
	$n=mysql_query("select name from donation where name='$name'",$con);
	$a=mysql_query("select amount from donation where name='$name'",$con);
    if(mysql_num_rows($n)>0 && mysql_num_rows($a)>0)
	{

	echo"<script type='text/javascript'>alert('Donation is done successfully');</script>";
	include 'donation.php';
	}
	}
	else
	{
		die(mysql_error());
	}
?>