<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fit-Me Sign UP</title>
	<link rel="stylesheet" href="styleSignUp.css" type="text/css">
</head>
<body>

	

<div class="section-top">
	<div class="content">
		
		<img src="Fit-MeSignUp.svg" alt="Fit-Me logo" width="400" height="400" class="center" style = "position:absolute; left:175px; top:0px" >
		<h3>_______</h3>
		<h1>Online fitness</h1>
		

</div>

<div class="main">
<div class="signUP">

<form id="signup1" action="/signUp.php" method="post">

	<label for="UserName">User Name:</label>
	<input type="text" id="UserName" name="UserName" placeholder="Enter your username">
	<br>
	<br>
	<label for="Pass">Password:</label><br>
	<input type="text" id="Pass" name="Pass" placeholder="Enter your password">
	
	<br>
	<br>

	<label for="Name">Name:</label><br>
	<input type="text" id="Pass" name="Name" placeholder="Enter your Name">
	
	
	<br>
	<br>
	
	<label for="age">Age:</label><br>
	<input type="text" id="Pass" name="age" placeholder="Enter your Age">
	<br>
	<br>
	
	<label for="H">Height:</label><br>
	<input type="text" id="Pass" name="H" placeholder="Enter your Height">
	<br>
	<br>
	
	<label for="Weight">Weight:</label><br>
	<input type="text" id="Weight" name="Weight" placeholder="Enter your weight">
	<br>
	<br>
	
	
	<input type="submit" id="submit" value="Sign Up" name="submission">


</form>


<?php

if(isset($_POST["submission"]))
{

$db_sid = " (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = hp)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = ali)
    )
  )";

$db_user = "system";
$db_pass = "123456";

$conn = oci_connect($db_user,$db_pass,$db_sid);


if($conn)
{
	echo "connection successful."."<br>";
	
}
else
{
	die("Could not connectA");
}


$q="insert into UserAccount(USERNAME,PASSWORD,NAME,AGE,HEIGHT,WEIGHT,TotalReward) values('".$_POST["UserName"]."','".$_POST["Pass"]."','".$_POST["Name"]."',".$_POST["age"].",".$_POST["H"].",".$_POST["Weight"].",0)";			  
$query_id = oci_parse($conn, $q); 		
	$r = oci_execute($query_id); 


if (!$r) {
  die('Error');
}



$H1=$_POST["H"];
$W1=$_POST["Weight"];

$B=$W1/($H1*$H1);

$q="Update UserAccount SET BMI=".$B." where USERNAME='".$_POST["UserName"]."'";
$query_id = oci_parse($conn, $q); 		
	$r = oci_execute($query_id); 
	
$q="commit";
$query_id = oci_parse($conn, $q); 		
	$r = oci_execute($query_id); 
	
	

header("Location: /dbProjectForm.html");
}


?>




 
</body>

</html>
