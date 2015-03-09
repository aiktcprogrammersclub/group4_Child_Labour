<!DOCTYPE html>
<html>
<head>
<title>contactus</title>
<link rel="stylesheet" type="text/css" href="Style\h.css">
</head>
<body>
<div id="wrap">
		<div id="banner" style="background-color:#DADADA">
			<div id="logo" style="float:left;margin-right:300px;width=50;height=50"><img src="img\logo.png" width=750></div>
			<span style="float:right;margin-right:1=30px">
						<?php 
								@session_start();
								if(isset($_SESSION['name']))
								{
									echo 'welcome '.$_SESSION['name']."&nbsp;|&nbsp;<a href='signout.php'>Sign Out</a>&nbsp;";
								}
								else
								{
									echo "<a href='signin.php'>Sign In</a> | <a href='signup.php'>SignUp</a>&nbsp;&nbsp";
								}
						?>	
			</span>
		</div><br><br><br><br><br><br><br><hr>
		<div id="nav" style='float:left;'>
          <ul id="nav">		
			<li style=" width: 150px; text-align: center;"><a href="home.php"><b>Home</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="aal.php"><b>Acts and Laws</b></a></li>
		    <li style=" width: 150px; text-align: center;"><a href="panda.php"><b>Preventions and Actions</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="candc.php"><b>Causes and Consequence</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="education.php"><b>Education</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="pic.php"><b>Photo Gallary</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="comp.php"><b>Complaints</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="suggestion.php"><b>Suggestion</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="donation.php"><b>Donation</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="blog.php"><b>Blogs</b></a></li>
			<li style=" width: 150px; text-align: center;"><a href="new.php"><b>News</b></a></li>
		  </ul>
        </div>
		<div id="body"><br>
				    <div id="mid">
							<div style="float: left;margin-right:170px;margin-left:170px;">
								<img src="img\contact.png"><br><br><br><br><br><br><br><br><br><br>
							</div>
							<div>  
									<h2>Contact US</h2><br>
									<b>smp infotech Pvt.Ltd</b><br>
									email:support@savechild.com<br>
									<br>
									Sainath Patil	:
									<br>+919167335075<br>saipatil73@gmail.com<br><br>
									Monica Koli	:<br>+918655707019<br>monicakoli26@gmail.com<br><br>
									Pooja Kale	:<br>+918692008896<br>kpooja550@gmail.com<br>
							</div><br><br><br><br><br><br><br><br><br><br><br><br>
					 </div>
					<br>
		</div>
	 <footer style="text-align:center ;background-color:#DF7E5F">
	          savechild Concept is Developed by smp infotech Pvt.Ltd<br>
			 <b>Write to Us:support@savchild.com</b><br>
			 <a href="contactus.php" style="text-decoration: none;">Contact Us</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php" style="text-decoration: none;">About Us</a>
			 
     </footer>
</div>
</body>
</html>