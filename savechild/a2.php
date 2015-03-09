<html>
<head>
<link rel="stylesheet" type="text/css" href="Style\h.css"></head>
<body>

	<?php 
	    @session_start();
		if(isset($_SESSION['name']))
		{
		echo "<div style='float:right'>"; 
		echo 'welcome '.$_SESSION['name'];
		echo "</div>";}
	?>

</body>
</html>