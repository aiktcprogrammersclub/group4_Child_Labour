

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);
$result=mysql_query("select *from q11");
echo 'A world without child labour is possible with the right priorities policies <br>1.Quality education<br>2.Opportunities for young people<br>3.Decent work for parents<br>4.Basic social protection floor for all<br>';
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
	echo "<a href='dcq1.php?id=".$row['id']."&uname=".$row['uname']."&comment=".$row['comment']."'>Add</a>";
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>
