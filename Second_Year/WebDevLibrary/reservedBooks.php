<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reserved Books</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="STYLESHEET" type="text/css" href="loginstyle1.css" />
    </head>
<br>	
<button class="button" onclick="javascript:window.location.href='HomePage.php'"  >Return To Home Page</button>	

<form method="post" action="reserved.php"/>
<?php 
session_start();
if (!isset($_SESSION['login_user']))
{
    header('location:LogIn.html');
}


// Connects to Database 
 mysql_connect("localhost","root","","library") or die(mysql_error()) ; 
 mysql_select_db("library") or die(mysql_error()) ; 
$un = mysql_real_escape_string($_SESSION['login_user']);

 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM books") or die(mysql_error()); 
 $data1 = mysql_query("SELECT * FROM reservations WHERE UserName = '$un'") or die(mysql_error()); 
 
echo '<br>';
//Puts it into an array 
while(($info = mysql_fetch_array( $data )) && ($info1 = mysql_fetch_array( $data1 ))) { 


// render each dtabase result and wrap in a div
if($info['ISBN'] = $info1['ISBN'])
{
echo "<div class='content1'>";
echo "<table width='70%' cellpadding='0' cellspacing='0' border='1'>";
echo "<tr>

<td class='ISBN'>".$info['ISBN'] . "</td>
<td class='Book'>".$info['BookTitle'] . "</td>
<td class='Author'>".$info['Author'] . "</td>
<td class='Edition'>".$info['Edition'] . "</td>
<td class='Year'>".$info['Year'] . "</td>
<td class='Category'>".$info['CategoryID'] . "</td>

<td class='Reserve'> ;

<div class='alignright'> ";
echo "<p style='color:red;'>Reserved</p>";
echo "</div></td></tr>";
echo "</table>";
}
}
echo '<br>';

echo '<input type="text" class="input3" placeholder="ISBN of book to reserve" name="id" size="40">';
echo '<input type="text" class="input3" placeholder="input Y or N " name="reserve" size="40">';

echo"<input type='submit' name='Reserve' value='Remove' class='button' id='confirm' />";


echo "</div>";

?> 

</form>
</html>