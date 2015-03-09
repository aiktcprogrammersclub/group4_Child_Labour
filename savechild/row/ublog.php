<?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);


echo 
"1.&nbsp;A world without child labour is possible with the right priorities policies <br>1.Quality education<br>2.Opportunities for young people<br>3.Decent work for parents<br>4.Basic social protection floor for all<br>";
echo "<b>Comments </b><br>";

$result=mysql_query("select *from q1");
while($row=mysql_fetch_array($result))
{
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>Name:</td><td>"."&nbsp;".$row['uname']."</td></tr>";
	echo "<tr><td>Comment:</td><td>".$row['comment']."</td></tr>";	
	echo "</table><br>";
}

echo "2.&nbsp;Is poverty major cause of child labour and parental illiteracy<br>";
echo "<b>Comments </b><br>";

$result=mysql_query("select *from q2");
while($row=mysql_fetch_array($result))
{
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>Name:</td><td>"."&nbsp;".$row['uname']."</td></tr>";
	echo "<tr><td>Comment:</td><td>".$row['comment']."</td></tr>";	
	echo "</table><br>";
}

echo "3.&nbsp;Banning child labour alone is pointless tackle poverty instead<br>";
echo "<b>Comments </b><br>";

$result=mysql_query("select *from q3");
while($row=mysql_fetch_array($result))
{
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>Name:</td><td>"."&nbsp;".$row['uname']."</td></tr>";
	echo "<tr><td>Comment:</td><td>".$row['comment']."</td></tr>";	
	echo "</table><br>";
}

echo "4.&nbsp;Poverty should be understand in a broad sense since phenomena such as marginalization of certain social groups leads to increased numbers of childrens having to work to help the household cope with poverty<br>";
$result=mysql_query("select *from q4");
while($row=mysql_fetch_array($result))
{
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>Name:</td><td>"."&nbsp;".$row['uname']."</td></tr>";
	echo "<tr><td>Comment:</td><td>".$row['comment']."</td></tr>";	
	echo "</table><br>";
}


mysql_close($con);
?>