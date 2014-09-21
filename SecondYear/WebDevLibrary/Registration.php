<?php
$con=mysqli_connect("localhost","root","","library");
if(mysqli_connect_error())
	{
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
	}
$sql="INSERT INTO users (UserName,Password,FirstName,Surname,AddressLine1,AddressLine2,City,Telephone,Mobile) VALUES
('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[surname]','$_POST[addressline1]','$_POST[addressline2]','$_POST[city]','$_POST[telephone]','$_POST[mobile]')";

if (!mysqli_query($con,$sql))
  {
  die('Error please try again: <strong><a href="Registration.html">Return to Registration</a></strong> ' . mysqli_error($con));
  }
echo "1 record added";

if (mysql_errno() == 1062) {
    echo "no way!";
}
header('location:LogIn.html');

?>

