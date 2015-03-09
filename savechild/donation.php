<!DOCTYPE html>
<html>
<head>
<title>Donation</title>
<link rel="stylesheet" type="text/css" href="Style\h.css">
<script>
$(document).ready(function(){
var a1 = $('#amount').val();
var a2 = $('#cause').val();
var a3 = $('#ngo').val();
var a4 = $('#card').val();
var a5 = $('#cno').val();
var a6 = $('#month').val();
var a7 = $('#year').val();
var a8 = $('#cvv').val();
var a9 = $('#name').val();
if(a1==''||a2==''||a3==''||a4==''||a5==''||a6==''||a7==''||a8==''||a9=='')
{
alert('All fields are mandatory!!');
}
}
)

</script>
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
			<li style=" width: 150px; text-align: center;"><a href="aal.php"><b>Acts and Lows</b></a></li>
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
	<div style="margin-left:225px">
	    <div id="form" style="float:left;margin-right:20px"><br>
		<form action="donation1.php" method="get">
		<table cellspacing="15">
			<tr>
			<td>Select Amount </td>
			<td>
				<select name="amount" id="amount" style="font-size:15px;width:200px;">
				<option value="">Select Amount</option>
				<option value="500">500</option>
				<option value="1000">1000</option>
				<option value="2000">2000</option>
				<option value="3000">3000</option>
				<option value="4000">4000</option>
				<option value="5000">5000</option>
				<option value="6000">6000</option>
				<option value="7000">7000</option>
				<option value="8000">8000</option>
				<option value="9000">9000</option>
				<option value="10000">10000</option>
				</select>
			</td>
			</tr>
			<tr>
				<td>By Cause </td>
				<td>
					<select name="cause" id='cause' style="font-size:15px;width:200px;">
					<option value="">Any cause donation</option>
					<option value="Children">Children</option>
					<option value="Education">Education</option>
					<option value="Elderly">Elderly</option>
					<option value="Employment">Employment</option>
					<option value="Environment">Environment</option>
					<option value="Health">Health</option>
					<option value="Women">women</option>
					<option value="Youth">Youth</option>
					</select>
				</td>
			</tr>
		    <tr>
				<td>NGO Names </td>
				<td>
					<select name='ngo' id='ngo' style="font-size:15px;width:200px;">
					<option value="">Select NGO</option>
					<option value="M.Venkatarangaiya Foundation">M.Venkatarangaiya Foundation</option>
					<option value="PCVC (Pratham Council for Vulnerable Children)">PCVC (Pratham Council for Vulnerable Children)</option>
					<option value="AVANI">AVANI</option>
					<option value="Prayas, New Delhi">Prayas, New Delhi</option>
					</select>
				</td>
			</tr>
          
				<td>We Accept Credit Card &nbsp</td>
				<td>
					<select name='card' id='card' style="font-size:15px;width:200px;">
					    <option value="">Select Card Type</option>
						<option value="Visa">Visa</option>
						<option value="Master Card">Master Card</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Card Number
				</td>
				<td>
					<input type='text' name="cno" id="cno" maxlength=4 size=2>&nbsp;&nbsp;<input type='text' name="2" id="2" maxlength=4 size=2>&nbsp;&nbsp;<input type='text' name="3" id="3" maxlength=4 size=2>&nbsp;&nbsp;<input type='text' name="4" id="4" maxlength=4 size=2>
				</td>
			</tr>
			<tr>
				<td>
					Expiry Date
				</td>
				<td>
					<select name='month' id='month' style="font-size:15px;">
									<option value=''>Month</option>
									<option value='jan'>Jan</option>
									<option value='feb'>Feb</option>
									<option value='mar'>Mar</option>
									<option value='apr'>Apr</option>
									<option value='may'>May</option>
									<option value='jun'>Jun</option>
									<option value='jul'>Jul</option>
									<option value='aug'>Aug</option>
									<option value='sep'>Sep</option>
									<option value='oct'>Oct</option>
									<option value='nov'>Nov</option>
									<option value='dec'>Dec</option>
								</select>
								&nbsp;
								<select name='year' id='year' style="font-size:15px;">
									<option value=''>Year</option>
									<option value='2015'>2015</option>
									<option value='2016'>2016</option>
									<option value='2017'>2017</option>
								</select>
				</td>
			</tr>
			<tr>
				<td>CVV </td><td><input type='password' name='cvv' maxlength="4" id='cvv' style='height:25;font-size:15px;'></td>
			</tr>
			<tr>
				<td>Name on card </td><td><input type='text' name='name' id='name' size=27></td>
			</tr>
			<tr>
				<td colspan=2 align='center'><br><br><br><input type="Submit" value="Donate now" style="color:white;background-color:brown;width:330;font-size: 20px"></td>
			</tr>
			
			</table>
			</form>
				<br><br><br><br><br><br>
			</div>
	<div id="ngo"><br>
			<table cellspacing="13">
				<tr><td>
					<b>M.Venkatarangaiya Foundation</b>
					<br>
					Phone: +91 (40) 2780-1320<br>
					E-mail: mvfindia@gmail.com<br>
					</td>
				</tr>
				<tr>
				    <td>
					<b>PCVC (Pratham Council for Vulnerable Children)</b><br>
					Tel. No. - (91) (22) 23851542<br>
					E-mail: pcvc@pratham,org<br>
					</td>
				</tr>
				<tr>
				    <td>
					<b>AVANI</b><br>
					  Ph : +91-233-2310 288<br>
					  E-Mail : info@verala.org<br>
					  </td>
				</tr>
				<tr>
				<td>
				 <b>Prayas, New Delhi</b><br>
				 Email: prayas@del6.vsnl.net.in
				 </td>
				</tr>
			</table>
	</div>
	</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 <footer style="text-align:center ;background-color:#DF7E5F">
	          savechild Concept is Developed by smp infotech Pvt.Ltd<br>
			 <b>Write to Us:support@savchild.com</b><br>
			 <a href="contactus.php" style="text-decoration: none;">Contact Us</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php" style="text-decoration: none;">About Us</a>
			 
     </footer>
</div>
</body>
</html>
