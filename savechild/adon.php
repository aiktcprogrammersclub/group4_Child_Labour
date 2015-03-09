<?php 
	$con=@mysql_connect('localhost','root','');
	mysql_select_db('child',$con);
	$result=mysql_query("select *from donation");
	echo "<center><h2>Donation section</h2></center>";
	echo "<br><center>";
	echo "<table style='border-style: ridge;' cellspacing=15>";
	echo "<tr><td><b>Id</b></td><td><b>Amount</b></td><td><b>Cause</b></td><td><b>NGO</b></td><td><b>Card Type</b></td><td><b>Cno</b></td><td><b>Month</b></td><td><b>Year</b></td><td><b>CVV</b></td><td><b>Name to card</b></td>";
	while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td>";
	echo "<td>".$row[6]."</td>";
	echo "<td>".$row[7]."</td>";
	echo "<td>".$row[8]."</td>";
	echo "<td>".$row[9]."</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>