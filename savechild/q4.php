<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);
$result=mysql_query("select *from q44");
echo 'Poverty should be understand in a broad sense since phenomena such as marginalization of certain social groups leads to increased numbers of childrens having to work to help the household cope with poverty<br>';
echo "<br><center>";
echo "<table style='border-style: ridge;' cellspacing=20>";
echo "<tr><td><b>Id</b></td><td><b>User Name</b></td><td><b>Comment</b></td><td><b>Delete</b></td>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['uname']."</td>";
	echo "<td>".$row['comment']."</td>";
	echo "<td>";
	echo "<a href='dcq4.php?id=".$row['id']."&uname=".$row['uname']."&comment=".$row['comment']."'>Add</a>";
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>