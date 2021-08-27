<!DOCTYPE html>
<html>
<body>

<head>
	<title>Muscle Group and Equipment</title>
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


<form id="signup1" action="/muscleEquip.php" method="post">

<input type="submit" id="submit" value="Click to see the muscle groups" name="submission">

</form>



<table cellspacing="30" cellpadding="20">
	<tr>
		<th>MUSCLEGROUPNAME</th>
		<th>DESCRIPTION</th>
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

$q = "Select * from muscleGroup";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["MUSCLEGROUPNAME"]."</td><td>".$row["DESCRIPTION"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
	 
if (!$r) {
  die('Error');
}

}
?>	



<form id="signup1" action="/muscleEquip.php" method="post">

<input type="submit" id="submit" value="Click to see the Equipment" name="submission1">

</form>


<table cellspacing="30" cellpadding="20">
	<tr>
		<th>EQUIPMENTNAME</th>
		<th>DESCRIPTION</th>

		
		<th></th>
	</tr>	
	
	
<?php

if(isset($_POST["submission1"]))
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


$q = "Select * from Equipment";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["EQUIPMENTNAME"]."</td><td>".$row["DESCRIPTION"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
	 
if (!$r) {
  die('Error');
}

}
?>	
	
	



</body>
</html>



