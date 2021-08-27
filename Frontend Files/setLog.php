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
<table cellspacing="30" cellpadding="20">
	<tr>
		<th>Day</th>
		<th>Exercise name</th>
		<th>Done ? </th>
		<th></th>
	</tr>

<script>
    var name=localStorage.getItem("firstname");
	<?php $abc = "<script>document.write(name)</script>"?>   
</script>
	
	
	
	
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

$a='ali';

$q = "Select * from dailyexercise where PLANID=(select PLANID from UserAccount where Username='".$a."') AND UPPER(DAYNAME)=TO_CHAR(SYSDATE,'DAY')";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["DAYNAME"]."</td><td>".$row["EXERCISENAME"]."</td></tr>";
		
	 }
	 echo "</table>";
	  
	 
	 
if (!$r) {
  die('Error');
}


?>	


<table cellspacing="30" cellpadding="20">
	<tr>
		<th>Day</th>
		<th>nutrition name</th>
		<th>Done ? </th>
		<th></th>
	</tr>


<?php
$q = "Select * from dailynutrition where PLANID=(select PLANID from UserAccount where Username='".$a."') AND UPPER(DAYNAME)=TO_CHAR(SYSDATE,'DAY')";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
	 echo "<table>";
	 while($row = oci_fetch_array($query_id)) 
	 { 
		echo "<tr><td>".$row["DAYNAME"]."</td><td>".$row["NUTRITIONNAME"]."</td></tr>";
		
	 }
	 echo "</table>";
	 
	 
if (!$r) {
  die('Error');
}


?>	

<form action="setLog.php" method="post">
 Did you do both?
    <input type="checkbox" name="Both" value="A" /><br>
	Did you do exercise only?
	<input type="checkbox" name="exercise" value="B" /><br>
	Did you do nutrition only?
	<input type="checkbox" name="nutrition" value="C" /><br>
	None?
	<input type="checkbox" name="none" value="D" /><br>
    <input type="submit" name="formSubmit" value="Submit" />
	</form>


<?php

if(isset($_POST["formSubmit"]))
{

if(isset($_POST['Both']) && $_POST['Both'] == 'A') 
{
    
}
elseif (isset($_POST['exercise']) && $_POST['exercise'] == 'B')
{
	 echo "Need wheelchair access.A";
}
elseif (isset($_POST['nutrition']) && $_POST['nutrition'] == 'C')
{
    echo "Do not Need wheelchair access.C";
}
elseif (isset($_POST['none']) && $_POST['none'] == 'D')
{
    echo "Do not Need wheelchair access.D";
}	 
}

?>	


</body>
</html>



