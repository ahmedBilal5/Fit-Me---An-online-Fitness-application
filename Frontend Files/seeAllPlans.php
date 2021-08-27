<!DOCTYPE html>
<html>
<body>

<head>
	<title>All plans</title>
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
		<th>PLANID</th>
		<th>Goal</th>
		<th>DESCRIPTION</th>
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

$q = "select a.planId,b.name,b.description from plan a inner join fitnessGoal b on a.goal=b.name";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["PLANID"]."</td><td>".$row["NAME"]."</td><td>".$row["DESCRIPTION"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
if (!$r) {
  die('Error');
}

?>	

</table>
<br><hr>
<br>
<h1 style="color:blue" >Select a plan.</h1>

<div class="main">
<div class="signUP">

<form id="signup1" action="/seeAllPlans.php" method="post">

<label for="UserName">User Name:</label>
<input type="text" id="UserName" name="UserName" placeholder="Enter your username">

<br>
<br>

<label for="p">Plan ID:</label><br>
<input type="text" id="UserName" name="p" placeholder="Enter the planID you want to choose">

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
	echo "connection successful.";
}
else
{
	die("Could not connectA");
}

$q = "update UserAccount set PLANID=".$_POST['p']." Where UserName='".$_POST["UserName"]."'";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
if (!$r) {
  die('Error');
}

}
?>	



	

</body>
</html>



