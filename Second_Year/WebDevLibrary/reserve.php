<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reserve Books</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="STYLESHEET" type="text/css" href="loginstyle1.css" />
    </head>
    <body>

<form action="" method="post">  
Search: <input type="text" name="term" class="input3" /> 
<input type="submit" value="Submit" class ="button" />  
</form>  
<button class="button" onclick="javascript:window.location.href='HomePage.php'"  >Return To Home Page</button>	
</body>


<?php 
echo '<form method="post" action="reserved.php"/>';
session_start();
if (!isset($_SESSION['login_user']))
{
    header('location:LogIn.html');
}

// Connects to Database 
 mysql_connect("localhost","root","","library") or die(mysql_error()) ; 
 mysql_select_db("library") or die(mysql_error()) ; 

 //Retrieves data from MySQL and puts it in the verible data
 $data = mysql_query("SELECT * FROM books") or die(mysql_error()); 

 
 
 if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     


$sql = "SELECT * FROM books WHERE ISBN LIKE '%".$term."%' OR BookTitle LIKE '%".$term."%' OR Author LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 
$x=1; 

echo '<br>';

while (($row = mysql_fetch_array($r_query)) && ($x<=5)){ 

$x++;
// prints out the database result
echo "<div class='content1'>";
echo "<table width='70%' cellpadding='0' cellspacing='0' border='1'>";
echo "<tr>

<td class='ISBN'>".$row['ISBN'] . "</td>
<td class='Book'>".$row['BookTitle'] . "</td>
<td class='Author'>".$row['Author'] . "</td>
<td class='Edition'>".$row['Edition'] . "</td>
<td class='Year'>".$row['Year'] . "</td>
<td class='Category'>".$row['CategoryID'] . "</td>

<td class='Reserve'> 

<div class='alignright'> ";

if ($row['Reserve'] == 'Y')
{
echo "<p style='color:red;'>Reserved</p>";
}
        else
{
         echo "<p style='color:green;'>&nbsp;Available</p>";		
}


echo "</div></td></tr>";
echo "</table></div>";



}
echo '<br>';


echo '<input type="text" class="input3" placeholder="ISBN of book to reserve" name="id" size="40">';
echo '<input type="text" class="input3" placeholder="input Y or N " name="reserve" required pattern="\w{1}" size="40" >';

echo"<input type='submit' name='Reserve' value='Reserve' class='button' id='confirm' />";

echo "</div>";
echo '</form>';
}
?> 
</html>