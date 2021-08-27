<!DOCTYPE html>
<html>
<head>
	
<style>


body {
  background-image: url("backCreate.jpg");
  background-color: #cccccc;
  background-size: cover;
}




</style>	

</head>
<body>


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
?>




<form id="NewPlan" method="post">

<label for="PId">Plan Id:</label>
<input type="text" id="UserName" name="PId" placeholder="Enter your PlanID">

<hr>
<br>
<br>

<label for="G1">GOAL:</label>
<option value="0" selected="selected">Nutrition</option>

<?php
$q = "select * from fitnessGoal";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	
while($row = oci_fetch_array($query_id)) 
	 {
echo "<option value=\"G1\">" . $row['NAME'] . "</option>";
	 }

?>
</select>

<br>

<label for="G">Goal:</label>
<input type="text" id="G" name="G" placeholder="Enter Goal">
<hr>


<label for="N">nutrition table:</label>
<option value="0" selected="selected">Nutrition</option>

<?php
$q = "select * from Nutrition";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	
while($row = oci_fetch_array($query_id)) 
	 {
echo "<option value=\"N\">" . $row['NAME'] . "</option>";
	 }

?>
</select>


<label for="N1">nutrition Name:</label>
<input type="text" id="N1" name="N1" placeholder="monday">

<label for="t1">Times:</label>
<input type="text" id="t1" name="t1" placeholder="Times">

<br>

<label for="N2">nutrition Name:</label>
<input type="text" id="N2" name="N2" placeholder="tuesday">

<label for="t2">Times:</label>
<input type="text" id="t2" name="t2" placeholder="Times">

<br>


<label for="N3">nutrition Name:</label>
<input type="text" id="N3" name="N3" placeholder="Wednesday">
<label for="t3">Times:</label>
<input type="text" id="t3" name="t3" placeholder="Times">

<br>

<label for="N4">nutrition Name:</label>
<input type="text" id="N4" name="N4" placeholder="Thrusday">
<label for="t4">Times:</label>
<input type="text" id="t4" name="t4" placeholder="Times">

<br>

<label for="N5">nutrition Name:</label>
<input type="text" id="N5" name="N5" placeholder="friday">
<label for="t5">Times:</label>
<input type="text" id="t5" name="t5" placeholder="Times">

<br>

<label for="N6">nutrition Name:</label>
<input type="text" id="N6" name="N6" placeholder="saturday">
<label for="t6">Times:</label>
<input type="text" id="t6" name="t6" placeholder="Times">

<br>


<label for="N7">nutrition Name:</label>
<input type="text" id="N7" name="N7" placeholder="sunday">
<label for="t7">Times:</label>
<input type="text" id="t7" name="t7" placeholder="Times">

<br>
<br>
<hr>

<label for="E">nutrition for Monday:</label>
<option value="0" selected="selected">Nutrition</option>

<?php
$q = "select * from Exercise";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	
while($row = oci_fetch_array($query_id)) 
	 {
echo "<option value=\"E\">" . $row['EXERCISENAME'] . "</option>";
	 }

?>
</select>

<label for="e1">Exercise Name:</label>
<input type="text" id="e1" name="e1" placeholder="monday">
<label for="a1">Sets:</label>
<input type="text" id="a1" name="a1" placeholder="Sets">
<label for="b1">Reps:</label>
<input type="text" id="b1" name="b1" placeholder="Reps">
<br>

<label for="e2">Exercise Name:</label>
<input type="text" id="e2" name="e2" placeholder="Tuesday">
<label for="a2">Sets:</label>
<input type="text" id="a2" name="a2" placeholder="Sets">
<label for="b2">Reps:</label>
<input type="text" id="b2" name="b2" placeholder="Reps">
<br>

<label for="e3">Exercise Name:</label>
<input type="text" id="e3" name="e3" placeholder="Wednesday">
<label for="a3">Sets:</label>
<input type="text" id="a3" name="a3" placeholder="Sets">
<label for="b3">Reps:</label>
<input type="text" id="b3" name="b3" placeholder="Reps">
<br>

<label for="e4">Exercise Name:</label>
<input type="text" id="e4" name="e4" placeholder="Thrusday">
<label for="a4">Sets:</label>
<input type="text" id="a4" name="a4" placeholder="Sets">
<label for="b4">Reps:</label>
<input type="text" id="b4" name="b4" placeholder="Reps">
<br>

<label for="e5">Exercise Name:</label>
<input type="text" id="e5" name="e5" placeholder="Friday">
<label for="a5">Sets:</label>
<input type="text" id="a5" name="a5" placeholder="Sets">
<label for="b5">Reps:</label>
<input type="text" id="b5" name="b5" placeholder="Reps">
<br>

<label for="e6">Exercise Name:</label>
<input type="text" id="e6" name="e6" placeholder="Saturday">
<label for="a6">Sets:</label>
<input type="text" id="a6" name="a6" placeholder="Sets">
<label for="b6">Reps:</label>
<input type="text" id="b6" name="b6" placeholder="Reps">
<br>

<label for="a7">Exercise Name:</label>
<input type="text" id="a7" name="a7" placeholder="Sunday">
<label for="a7">Sets:</label>
<input type="text" id="a7" name="a7" placeholder="Sets">
<label for="b7">Reps:</label>
<input type="text" id="b7" name="b7" placeholder="Reps">
<br>


<input type="submit" id="submit" value="Set plan" name="submission">

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



$q = "insert into plan(PLANID,GOAL) values(".$_POST["PId"].",'".$_POST["G"]."')";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
if (!$r) {
  die('Error');
}

$q = "insert all into dailytargets(DAYNAME,PLANID) values('Monday',".$_POST["PId"].")
	into dailytargets(DAYNAME,PLANID) values('Tuesday',".$_POST["PId"].")
		into dailytargets(DAYNAME,PLANID) values('Wednesday',".$_POST["PId"].")
		into dailytargets(DAYNAME,PLANID) values('Thrusday',".$_POST["PId"].")
		into dailytargets(DAYNAME,PLANID) values('Friday',".$_POST["PId"].")
		into dailytargets(DAYNAME,PLANID) values('Saturday',".$_POST["PId"].")
		into dailytargets(DAYNAME,PLANID) values('Sunday',".$_POST["PId"].")
		Select * from DUAL";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 




$q = "INSERT all INTO dailynutrition values('".$_POST["N1"]."','Monday',".$_POST["PId"].",".$_POST['t1'].")
				INTO dailynutrition values('".$_POST["N2"]."','Tuesday',".$_POST["PId"].",".$_POST['t2'].")
				INTO dailynutrition values('".$_POST["N3"]."','Wednesday',".$_POST["PId"].",".$_POST['t3'].")
				INTO dailynutrition values('".$_POST["N4"]."','Thrusday',".$_POST["PId"].",".$_POST['t4'].")
				INTO dailynutrition values('".$_POST["N5"]."','Friday',".$_POST["PId"].",".$_POST['t5'].")
				INTO dailynutrition values('".$_POST["N6"]."','Saturday',".$_POST["PId"].",".$_POST['t6'].")
				INTO dailynutrition values('".$_POST["N7"]."','Sunday',".$_POST["PId"].",".$_POST['t7'].")
				SELECT * FROM DUAL";
	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
if (!$r) {
  die('Error');
}


$q = "INSERT all into dailyexercise values('Monday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Tuesday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Wednesday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Thrusday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Friday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Saturday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				into dailyexercise values('Sunday',".$_POST["PId"].",'".$_POST["e1"]."',".$_POST["a1"].",".$_POST["b1"].")
				SELECT * FROM DUAL";

	$query_id = oci_parse($conn, $q); 		
	 $r = oci_execute($query_id); 
	 
if (!$r) {
  die('Error');
}



}	


?>	



</body>
</html>
