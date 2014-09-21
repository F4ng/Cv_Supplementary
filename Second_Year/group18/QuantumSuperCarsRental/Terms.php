<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<!-- THIS IS A LINK TO EXTERNAL STYLE SHEET CSS FILE -->
<link rel="stylesheet" href="StyleSheet.css" type="text/css" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Quantum Super Cars</title>
</head>

<body>
<div id = "body21">
<div id="topBar">
	<div id = "homebutton">
		<a href="quantum_super_cars.php"><img class = "logoimage" src="Images/home.png"/></a>
	</div>
	<div id = "title">
		<h2>Quantum Super Car Rental</h2>
	</div>
	<div id = "phone">
		<img src="Images/phone.png"/>
	</div>
	<div id = "phoneno">
		<h3>1800 555 123</h3>
	</div>
	
	<div id="login">
		<?php  
		session_start();
		if(!isset($_SESSION['login_user']) && empty($_SESSION['login_user'])){
			echo '<form method = "post" action = "Login.php">';
			echo '<input class = "input2" type="text" name="username" placeholder = "Enter Username"><br/>';
			echo '<input class = "input2" type="password" name="password" placeholder = "Enter Password"><br/><br/>';
			echo '<input class= "loginbutton" type="submit" value="Login">';
			echo '</form>';
			echo '<div id = "regBut"><a class = "loginbutton" style=" padding: 2px 12px;" href="Registration.html">Register</a></div>';
		}
		else{
			echo '<h2 class = "heloUsr" >Hello '.$_SESSION['login_user'].'</h2>';
			echo '<div id = "logoutBut"><a class = "loginbutton" style=" padding: 2px 12px;" href="logout.php">Log Out</a></div>';
		}
	?>
	</div>

</div>

<div id="menu">
	<table id= "menutable">
		<tr><td><img src="Images/Ferrari1.png"/></td><td><button class="button" onclick="javascript:window.location.href='Ferrari.php'"  >Ferrari</button></td></tr>
		<tr><td><img src="Images/Bugatti2.png"/></td><td><button class="button" onclick="javascript:window.location.href='Bugatti.php'"  >Bugatti</button></a></td></tr>
		<tr><td><img src="Images/Lamborgini3.png"/></td><td><button class="button" onclick="javascript:window.location.href='Lamborgini.php'"  >Lamborgini</button></td></tr>
		<tr><td><img src="Images/Koenigsegg4.png"/></td><td><button class="button" onclick="javascript:window.location.href='Koenigsegg.php'"  >Koenigsegg</button></td></tr>
		<tr><td><img src="Images/shelby5.png"/></td><td><button class="button" onclick="javascript:window.location.href='Shelby.php'"  >Shelby</button></td></tr>
		<tr><td><img src="Images/Gumpert6.png"/></td><td><button class="button" onclick="javascript:window.location.href='Gumpert.php'"  >Gumpert</button></td></tr>
		
	</table>
</div>

<div id="content">
	<br/>
	<h2> Terms and Conditions</h2>
	<p>1.General data<br/>
	1.1 The terms and conditions are applicable for all service users, including the users who contribute with video materials, information or other material and services on the website. This website may contain links to other websites, which are not under the ownership or the control of the ADMINISTRATOR. The ADMINISTRATOR does not have control and does not take any responsibility for the content, politics or practices of any website. By using the Goldentowns service, you explicitly absolve the ADMINISTRATOR of any responsibility which might result after your use of another website. Therefore, we recommend that you read the terms and conditions for each website that you might visit when leaving our website.
	 
	1.2 The ADMINISTRATOR reserves the right to change the Terms and Conditions each time he considers necessary. All users will be notified regarding the changes.
	 
	2. The Goldentowns service
	 
	2.1 Goldentowns is provided only to the users who have opened a customer account using the interface provided by the service. Its use becomes available from the moment when the ADMINISTARTOR has opened an account for the user.
	 
	2.2 The game’s features can be modified at any time by the ADMINISTRATOR and any time the ADMINISTRATOR thinks it’s necessary, without prior notice and without providing a specific reason.
	</p>

</div>

<div id = "logo2">
		<img src="Images/logo2.png"/>
</div>

<div id="footer">
	<table id= "contact">
	<tr>
		<td><button class="loginbutton" onclick="javascript:window.location.href='Feedback.php'"  >Feedback</button></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last date modified: 04 April 2014 Copyright © 1998 - 2014 Quantum Super Car Rental&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
		<td><a href="Terms.php"><font color="FFFFF">Terms and conditions</font></a></td>
		
	</tr></table>
</div>

</div>
</body>
</html>

