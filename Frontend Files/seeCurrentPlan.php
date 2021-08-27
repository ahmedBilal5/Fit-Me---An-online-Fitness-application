<!DOCTYPE html>
<html>
<body>

<head>
	<title>Current plan</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styleSignUp.css" type="text/css">
</head>
<style>



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

</table>

<form id="signup1" action="/seeCurrentPlan.php" method="post">

<label for="PID"></label>
<input type="text" id="UserName" name="PID" placeholder="Enter Pid to check daily exercises ">

<br>
<input type="submit" id="submit" value="Enter" name="submission">

</form>

<hr><hr>

<h1>Daily exercise plan</h1>	
<table cellspacing="30" cellpadding="20">
	<tr>
		<th>DAYNAME</th>
		<th>PLANID</th>
		<th>EXERCISENAME</th>
		<th>NOOFSETS</th>
		<th>NOOFREPS</th>

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

$q = "Select * from dailyexercise where PLANID=".$_POST["PID"];
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["DAYNAME"]."</td><td>".$row["PLANID"]."</td><td>".$row["EXERCISENAME"]."</td><td>".$row["NOOFSETS"]."</td><td>".$row["NOOFREPS"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
	 
if (!$r) {
  die('Error');
}

}
?>	

<br><br><hr><hr><br><br>
<h1>Daily nutrition plan</h1>

<table cellspacing="30" cellpadding="20">
	<tr>
		<th>NUTRITIONNAME</th>
		<th>DAYNAME</th>
		<th>PLANID</th>
		<th>DAYFREQUENCY</th>
		
		<th></th>
	</tr>	
	
	
<?php

if(isset($_POST["submission"]))
{

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



