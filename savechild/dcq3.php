<?php 
  $id=$_REQUEST['id'];
  $uname=$_REQUEST['uname'];
  $comment=$_REQUEST['comment'];

 
	$con=@mysql_connect('localhost','root','');
	if(!$con)
	{
		die('could not connect'.mysql_error());
	}
	mysql_select_db("child",$con);
	$row="insert into q3 values('$id','$uname','$comment')";
	mysql_query($row,$con);
	header('location:q3.php');
	mysql_close($con);	
?>