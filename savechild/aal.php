<!DOCTYPE html>
<html>
<head>
<title>Acts and Lows</title>
<link rel="stylesheet" type="text/css" href="Style\h.css">
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
<div id="wrap">
		<div id="banner" style="background-color:#DADADA">
			<div id="logo" style="float:left;margin-right:300px;width=50;height=50"><img src="img\logo.png" width=750></div>
			<span style="float:right;margin-right:1=30px">
						<?php 
								@session_start();
								if(isset($_SESSION['name']))
								{
									echo 'welcome '.$_SESSION['name']."&nbsp;|&nbsp;<a href='signout.php'>Sign Out</a>&nbsp&nbsp;";
									echo '<div class="fb-share-button" data-href="http://localhost/savechild/aal.php" data-layout="icon"></div>';
								}
								else
								{
									echo "<a href='signin.php'>Sign In</a> | <a href='signup.php'>SignUp</a>&nbsp;&nbsp&nbsp";
									echo '<div class="fb-share-button" data-href="http://localhost/savechild/aal.php" data-layout="icon"></div>';
								
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
		  </ul>
        </div>		
		<div id="body"><br>
			<iframe style="margin-left:30px" width="890" height="800" src="lofaal.php"></iframe>
		</div>
	 <footer style="text-align:center ;background-color:#DF7E5F">
	          savechild Concept is Developed by smp infotech Pvt.Ltd<br>
			 <b>Write to Us:support@savchild.com</b><br>
			 <a href="contactus.php" style="text-decoration: none;">Contact Us</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php" style="text-decoration: none;">About Us</a>
			 
     </footer>
</div>
</body>
</html>