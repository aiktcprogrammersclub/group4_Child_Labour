<?php
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);
$selu=mysql_query("select name from admin where name='$uname'",$con);
$selp=mysql_query("select pwd from admin where pwd='$pwd'",$con);
if(mysql_num_rows($selu)>0 && mysql_num_rows($selp)>0)
{
	session_start();
	$_SESSION['adname']=$uname;	
    include "ahome.php";
}
else
{
	echo "<script type='text/javascript'>alert('Please enter correct username and password');</script>";
    include 'admin.php';
}
?>