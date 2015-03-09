<html>
<head>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style="float:right" class="fb-share-button" data-href="http://localhost/savechild/uq1.php" data-width="200" data-type="button_count"></div>

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('child',$con);

echo 
"1.&nbsp;A world without child labour is possible with the right priorities policies <br>&nbsp;&nbsp;1.Quality education<br>&nbsp;&nbsp;2.Opportunities for young people<br>&nbsp;&nbsp;3.Decent work for parents<br>&nbsp;&nbsp;4.Basic social protection floor for all<br><br>";
echo "<b>Comments </b><br>";

@session_start();
if(isset($_SESSION['name']))
{
	echo "<form action='inscom1.php' method='post' name='f' id='f'>";
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>".$_SESSION['name']."</td></tr>";
	echo "<tr><td><textarea rows='4' cols='30' name='comment' id='comment'></textarea></td></tr>";
	echo "<tr><td><input type='submit' value='submit'>";
	echo "<input type='checkbox' name='ano' id='ano' value='Anonymous'>Anonymous";
	echo "</td></tr>";
	echo "</table>";
	echo "</form>";
}


$result=mysql_query("select *from q1");
while($row=mysql_fetch_array($result))
{
	echo "<table style='border-style: solid;'>";
	echo "<tr><td>Name:</td><td>"."&nbsp;".$row['uname']."</td></tr>";
	echo "<tr><td>Comment:</td><td>".$row['comment']."</td></tr>";	
	echo "</table><br>";
}
mysql_close($con); 
?>
</body>
</html>