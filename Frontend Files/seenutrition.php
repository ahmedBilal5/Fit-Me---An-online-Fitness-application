<!DOCTYPE html>
<html>
<body>

<head>
	<title>nutrition</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styleSignUp.css" type="text/css">
</head>
<style>

body {
  background-image: url("signup1.jpg");
  background-color: #cccccc;
  background-size: cover;
}


table 
{
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}

th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even)
{background-color: #f2f2f2}

tr:nth-child(odd)
{background-color: white}
</style>	

</head>
<body>
<table cellspacing="30" cellpadding="20">
	<tr>
		<th>Name</th>
		<th>Reward</th>
		<th>Fats</th>
		<th>PROTEIN</th>
		<th>CARBOHYDRATES</th>
		<th>FIBER</th>
		<th></th>
	</tr>
<?php


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
	echo "connection successful.";
}
else
{
	die("Could not connectA");
}

$q = "select * from nutrition";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["NAME"]."</td><td>".$row["REWARDVALUE"]."</td><td>".$row["FATS"]."</td><td>".$row["PROTEIN"]."</td><td>".$row["CARBOHYDRATES"]."</td><td>".$row["FIBER"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
if (!$r) {
  die('Error');
}

?>	
</table>


<form id="signup1" action="/seenutrition.php" method="post">

<label for="PID">Plan ID:</label><br>
<input type="text" id="UserName" name="PID" placeholder="Enter Pid to check daily exercises ">

<br>
<input type="submit" id="submit" value="Enter" name="submission">

</form>

<table cellspacing="30" cellpadding="20">
	<tr>
		<th>Nutrition Name</th>
		<th>Day Name</th>
		<th>Plan ID</th>
		<th>number per day</th>
		
		<th></th>
	</tr>	
	
	
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
	echo "connection successful.";
}
else
{
	die("Could not connectA");
}

$q = "Select * from dailynutrition where PLANID=".$_POST["PID"];
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["NUTRITIONNAME"]."</td><td>".$row["DAYNAME"]."</td><td>".$row["PLANID"]."</td><td>".$row["DAYFREQUENCY"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
	 
if (!$r) {
  die('Error');
}

}
?>	
	

</body>
</html>



