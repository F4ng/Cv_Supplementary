<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Category Search</title>
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

// Connects to your Database 
 mysql_connect("localhost","root","","library") or die(mysql_error()) ; 
 mysql_select_db("library") or die(mysql_error()) ; 

 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM books") or die(mysql_error()); 
 $data1 = mysql_query("SELECT * FROM category") or die(mysql_error()); 
 // INNER JOIN Wall ON books.CategoryID = category.CategoryID;
 $cm =1;
 
 echo '<br>';
 if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     
//JOIN lab_test_group_lookup AS ABB1 ON ABB1.lab_test_group_fk = ABB2.lab_test_group_pk  JOIN books category ON books.CategoryID = category.CategoryID 

$sql = "SELECT * FROM category WHERE CategoryID LIKE '%".$term."%' OR CategoryDe LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 
$x=1; 


while (($row = mysql_fetch_array($r_query)) && ($x<=5)){ 

$x++;
$cm = $row['CategoryID'];

// render each dtabase result and wrap in a div
echo "<div class='content1'>";
echo "<table width='70%' cellpadding='0' cellspacing='0' border='1'>";
echo "<tr>

<td class='ISBN'>".$row['CategoryID'] . "</td>
<td class='Book'>".$row['CategoryDe'] . "</td>

</tr>";
echo "</table></div>";

}
}

while ($info = mysql_fetch_array( $data )){ 

if($info['CategoryID'] == $cm)
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

<td class='Reserve'> 
<div class='alignright'> ";

if ($info['Reserve'] == 'Y')
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

}
echo '<br>';
echo '<input type="text" class="input2" placeholder="ISBN of book to reserve" name="id" size="40">';
echo '<input type="text" class="input2" placeholder="input Y or N " name="reserve" required pattern="\w{1}" size="40" >';
echo"<input type='submit' name='Reserve' value='Reserve' class='button' id='confirm' />";
echo '</form>';

?> 
</html>