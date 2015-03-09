<?php 
$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}

	mysql_select_db("child",$con);
    @session_start();
	$comment=$_REQUEST["comment"];
	@$anno=$_REQUEST["ano"];
	$uname=$_SESSION['name'];
	if($anno!="Anonymous")
	{
		$row="insert into q33 values('','$uname','$comment')";
		if(mysql_query($row,$con))
		{
		include 'uq3.php';
		}
	}
	else
	{
		$row="insert into q33 values('','$anno','$comment')";
		if(mysql_query($row,$con))
		{
		include 'uq3.php';
		}		
	}
	@mysql_close($con); 
?>