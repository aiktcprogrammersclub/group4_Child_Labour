<!DOCTYPE html>
<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="Style\h.css">
</head>
<body>
<div id="wrap">
		<div id="banner" style="background-color:#DADADA">
			<div id="logo" style="float:left;margin-right:300px;width=50;height=50"><img src="img\logo.png" width=750></div>
		</div><br><br><br><br><br><br><hr>
		<div>
			<div id="nav" style='float:left;'>
			  <ul id="nav">		
				<li style=" width: 150px; text-align: center;"><a href="aho.php" target="show"><b>Home</b></a></li>
				<li style=" width: 150px; text-align: center;"><a href="acomp.php" target="show"><b>Complaints</b></a></li>
				<li style=" width: 150px; text-align: center;"><a href="asuggestion.php" target="show"><b>Suggestion</b></a></li>
				<li style=" width: 150px; text-align: center;"><a href="vblog.php" target="show"><b>Blogs</b></a></li>
				<li style=" width: 150px; text-align: center;"><a href="adon.php" target="show"><b>Donation</b></a></li>
			  </ul>
			</div>
			
			<div id="body">
				<div style="float:right"><?php 
					@session_start();
					if(isset($_SESSION['adname']))
					{
					
					echo 'welcome '.$_SESSION['adname'].'&nbsp|&nbsp';
					echo "<a href='alogout.php'>Logout</a>&nbsp&nbsp&nbsp";
		
					}
				?>
				</div>
				<iframe style="margin-left:30px" width="880" height="600" src="aho.php" name="show"></iframe>
			    
			</div>
			<br><br><br><br>
		</div>
</div>
</body>
</html>