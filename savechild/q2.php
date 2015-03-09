<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);
$result=mysql_query("select *from q22");
echo 'Is poverty major cause of child labour and parental illiteracy<br>';
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
	echo "<a href='dcq2.php?id=".$row['id']."&uname=".$row['uname']."&comment=".$row['comment']."'>Add</a>";
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>