<?php 
//require_once "connection.php"; 

if ( isset($_POST['Name']) && isset($_POST['Password']) 
&& isset($_POST['CPassword']) && isset($_POST['FirstName']) 
&& isset($_POST['Surname']) && isset($_POST['Address1'])
&& isset($_POST['Address2']) && isset($_POST['City']) 
&& isset($_POST['Telephone']) && isset($_POST['Mobile']))
{ 
	$n = mysql_real_escape_string($_POST['Name']); 
	$p = mysql_real_escape_string($_POST['Password']);
	$cp = mysql_real_escape_string($_POST['CPassword']);
	$fn = mysql_real_escape_string($_POST['FirstName']);
	$sn = mysql_real_escape_string($_POST['Surname']);
	$a1 = mysql_real_escape_string($_POST['Address1']);
	$a2 = mysql_real_escape_string($_POST['Address2']);
	$c = mysql_real_escape_string($_POST['City']);
	$t = mysql_real_escape_string($_POST['Telephone']) + 0;
	$m = mysql_real_escape_string($_POST['Mobile']) + 0; 
 
	$sql = "INSERT INTO users (Username, Password, Firstname, Surname, AddressLine1, AddressLine2, City, Telephone, Mobile)
	VALUES ('$n', '$p', '$fn', '$sn', '$a1', '$a2', '$c', '$t', '$m')"; 
	
	$UserExist = false;
	$sqluser = mysql_query("select username from users"); 
	while ($row = mysql_fetch_row($sqluser)) 
	{
		if($row[0] == $n)
		{
			$UserExist = true;		
		}
	}
	if(($n == "") || ($p == "") || ($cp == "") || ($fn == "") || ($sn == "") || ($a1 == "") || ($a2 == "") || ($c == "") || ($t == 0) || ($m == 0))
	{
		echo "<div id='registermessage'>Some fields are empty!!!</div><br>";
	}
	else if(strlen($p) != 6)
	{
		echo "<div id='registermessage'>Password must consist of 6 characters!!!</div><br>";
	}
	else if($p != $cp)
	{
		echo "<div id='registermessage'>Password and retyped password are not equal!!!</div><br>";
	}
	else if(is_numeric($m) != true)
	{
		echo "<div id='registermessage'>Mobile number must consist of numbers!!!</div><br>";
	}
	else if(strlen($m) != 9)
	{
		echo "<div id='registermessage'>Mobile number must consist of 10 digits!!!</div><br>";
	}	
	else if($UserExist)
	{
		echo "<div id='registermessage'>User already exist!!!</div><br>";
	}
	else
	{
		echo "<div id='registermessage'>You are now registered!!!</div><br>";
		mysql_query($sql); 
	}
} 
?>

<html>
<head>
<!-- THIS IS A LINK TO EXTERNAL STYLE SHEET CSS FILE -->
<link rel="stylesheet" href="StyleSheet.css" type="text/css" />
</head>
<body id="homebackground">
<div id="head2">
<p>Enter all details:</p> 
</div>
<form method="post">
<div id="text"> 
<p>User Name: <input type="text" name="Name"></p>
<p>Password: <input type="password" name="Password"> <font color="white">(6 characters)</font></p>
<p>Confirm Password: <input type="password" name="CPassword"> <font color="white">(6 characters)</font></p>
<p>First Name: <input type="text" name="FirstName"></p> 
<p>Surname: <input type="text" name="Surname"></p>
<p>Address Line 1: <input type="text" name="Address1"> <font color="white">(up to 20 characters)</font></p> 
<p>Address Line 2: <input type="text" name="Address2"> <font color="white">(up to 20 characters)</font></p>
<p>City: <input type="text" name="City"></p>
<p>Telephone: <input type="text" name="Telephone"> <font color="white">(7 digits)</font></p>
<p>Mobile: <input type="text" name="Mobile"> <font color="white">(10 digits)</font></p> 
<p><input type="submit" value="Register"/> 
<!-- <a href="Login.php"><font color="red">Login</font></a></a></p> -->
</form>
</div>
<a href="Login.php"><div id="menu">Login</div></a>
</body>
</html>
