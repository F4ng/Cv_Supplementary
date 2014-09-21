<?php 
session_start();




// Connects to Database 
 mysql_connect("localhost","root","","library") or die(mysql_error()) ; 
 mysql_select_db("library") or die(mysql_error()) ; 

 //Retrieves data from MySQL 
$id = mysql_real_escape_string($_POST['id']);
$re = mysql_real_escape_string($_POST['reserve']);
$un = mysql_real_escape_string($_SESSION['login_user']);

echo "$id";

echo "$id";
echo "$re";
 //This gets all the other information from the form 
//$reserve=$_POST['reserve'];
$sql="UPDATE books SET Reserve='$re' WHERE ISBN='$id'"; 

 //Writes the information to the database 
//mysql_query("UPDATE books SET reserve = reserve" . $reserve . " WHERE ISBN ='$_POST[isbn]'");

mysql_query($sql);



if ( $re == "Y") 
{
$sql="INSERT INTO reservations (ISBN,UserName) VALUES('$id','$un')";
}
else if ( $re == "N") 
{
$sql="DELETE FROM reservations WHERE ISBN = '$id', UserName = '$un'";
}
else
{
	echo "there has been an error please input the right value for the reservations, either Y or N";
}
mysql_query($sql);
   //$result = mysql_query($sql) or die(mysql_error());
  
header('location:reserve.php');

 ?> 
 
 

