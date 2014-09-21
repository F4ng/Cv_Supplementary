<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['login_user']))
{
    header('location:LogIn.html');
}
?>
    <head>
        <title>Home Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="STYLESHEET" type="text/css" href="loginstyle1.css" />
    </head>
<body>
<div id="content" style="width:100%">

<div id="header" style="background-color:#2321BD; height:170px; width:100%;">
<h1 style="margin-bottom:0;"><img src="Banner2.jpg" class="img" ></h1></div>

<div id="menu" style="background-color:#B40431;height:720px;width:25%;float:left;">
<table width='100%' cellpadding='0' cellspacing='80' border='0'>

			<tr><th <button class="button1" onclick="javascript:window.location.href='reserve.php'"  >Search for books</button> </th></tr>
			<tr><th <button class="button1" onclick="javascript:window.location.href='cshearch.php'"  >Search for books by Category</button> </th></tr>
			<tr><th <button class="button1" onclick="javascript:window.location.href='reservedBooks.php'"  >Show my reserved books</button> </th></tr>	
			<tr><th <button class="button1" onclick="javascript:window.location.href='logOutpage.php'"  >Log out</button> </th></tr>	
				
			</tr>	
</table>
</div>

<div id="content1" style="background-color:#B40431;height:720px;width:75%;float:right;">
<img src="library.jpg" ></div>
<div id="footer" style="background-color:#2321BD;color:white; clear:both;text-align:center;">
Copyright � C12733411 Web Dev Y2 Ca</div>

</div>

</body>
</html>