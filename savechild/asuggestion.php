<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);
$result=mysql_query("select *from sug");
echo "<br><center><h2>Suggestion Section</h2></center>";
echo "<br><center>";
echo "<table style='border-style: ridge;' cellspacing=15>";
echo "<tr><td><b>Id</b></td><td><b>Name</b></td><td><b>Email-id</b></td><td><b>Subject</b></td><td><b>Suggestion</b></td>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>