<!DOCTYPE html>
<html>
<head>
	<script>
	function msg()
	{
	alert("Car Succesfully Reserved");
	}
	</script>
</head>
<body>
<div  align= center>
<h1>Card Details</h1>
<form action="">
Cardholder name: <input type="text" name="creditname"><br><br>

Card type:<br><br>
<img src="Images/credit.jpg" width="82" height="62"><br><br>
<select>
  <option value="visa">Visa</option>
  <option value="master">Master Card</option>
  <option value="discover">Discover</option>
  <option value="american">American Express</option>
</select>
  <br><br>
 Card number: (max. 16 digits)
 <input type="number" name="creditname">
 <br><br>
 
 Expiration Date: <select name="CCMonth"> 
          <option selected>Choose Month</option> 
          <option value="01">January</option> 
          <option value="02">February</option> 
          <option value="03">March</option> 
		  <option value="04">April</option> 
          <option value="05">May</option> 
          <option value="06">June</option> 
          <option value="07">July</option> 
		  <option value="08">August</option> 
          <option value="09">September</option> 
          <option value="10">October</option> 
		  <option value="11">November</option> 
		  <option value="12">December</option> 
        </select> 

 
<select name="CCYear"> 
          <option selected>Choose Year</option> 
          <option value="2014">2014</option> 
          <option value="2015">2015</option> 
          <option value="2016">2016</option> 
		  <option value="2017">2017</option> 
          <option value="2018">2018</option> 
          <option value="2019">2019</option> 
		  <option value="2020">2020</option> 
 
        </select>  
		
		<br><br>
	CVV: (3 digit number located at back of card) <br><br>
	<input type="number" name="creditname">
	
	<br><br>
	
<input type="submit" value="Submit" onclick="msg()">
<input type= "button" onclick="javascript:window.location.href='quantum_super_cars.php'"  value= "Return">


</div>


</body>
</html>
