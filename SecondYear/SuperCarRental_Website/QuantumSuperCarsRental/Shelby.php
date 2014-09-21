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
			echo '<input class = "input2" type="text" name="username" placeholder = "Enter Username" required pattern="\w+"><br/>';
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
	<?php
		//session_start();
		//$u =$_SESSION['user'];
		
		require_once "db.php";
		
		$sql = mysql_query("Select Make, Model, RentPrice, TopSpeed, Engine, CarDescription, RegNo from car where Make = 'Shelby'");
		echo '<table id = "cartable" border="13">' . "\n";
			echo '<tr class = "topRow"><th>';
			echo'Make';
			echo ('</th><th>');
			echo 'Model';
			echo ('</th><th>');
			echo 'RentPrice';
			echo ('</th><th>');
			echo 'TopSpeed';
			echo ('</th><th>');
			echo  'Engine';
			//echo ('</th rowspan = "2"><th>');
			echo ('</th></tr>');
			
		while ($row = mysql_fetch_row($sql)) 
		{
			echo '<tr><th>';
			echo($row[0]);
			echo ("</th><th>");
			echo($row[1]);
			echo ("</th><th>");
			echo($row[2]);
			echo ("€/h</th><th>");
			echo($row[3]);
			echo ("</th><th>");
			echo($row[4]);
			 
			echo ("</th></tr>");
			echo ('<tr><th colspan = "3">');
			echo ('<img src="Images/shelby1.png"/>');
			echo ('</th><td colspan = "3">');
			echo ($row[5]);
			echo('<div id="reservebutton"><a class = "loginbutton" style="background: red; padding: 0px 10px;" href="CreditCard.php?RegNo='.htmlentities($row[6]).'">Reserve</a></div>');
			echo ('</td></tr>');
		}
		echo '</table>';
		
	?>
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



