<html>
<head></head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wild");


	$arr=$_POST['txtarrival'];
	$adult=$_POST['aud'];
	$kid=$_POST['kid'];
	$style=$_POST['tstyle'];
	$duration=$_POST['duration'];
	$budget=$_POST['budget'];
	$name=$_POST['txtname'];
	$country=$_POST['country'];
	$email=$_POST['txtemail'];
	$mobile=$_POST['txtphno'];


	$query="INSERT INTO contact(arrival,adult,kid,tourstyle,duration,budget,name,country,email,mobile) values('$arr','$adult','$kid','$style','$duration','$budget','$name','$country','$email','$mobile')";	
	$result=mysql_query($query);
	
	echo"Registration confirmed.";
	?>
<br>
<a href="home.php">Back to Home</a>
</body>
</html>