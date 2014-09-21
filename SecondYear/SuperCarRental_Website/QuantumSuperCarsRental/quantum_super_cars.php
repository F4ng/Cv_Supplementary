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
<div id = "slideshow">
	<script type="text/javascript">
		var image1 = new Image()
		image1.src = "images/slide1.png"
		var image2 = new Image()
		image2.src = "images/slide2.png"
		var image3 = new Image()
		image3.src = "images/slide3.png"
		var image4 = new Image()
		image4.src = "images/slide4.png"
		var image5 = new Image()
		image5.src = "images/slide5.png"
		var image6 = new Image()
		image6.src = "images/slide6.png"
		</script>
		</head>
		<body>
		<p><img  name="slide" /></p>
		<script type="text/javascript">
				var step=1;
				function slideit()
				{
					document.images.slide.src = eval("image"+step+".src");
					if(step<6)
						step++;
					else
						step=1;
					setTimeout("slideit()",4500);
				}
				slideit();
	</script>
</div>
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



