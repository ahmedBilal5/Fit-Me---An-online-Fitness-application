<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>UserAccount page</title>
	

<style>



body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

*{
  box-sizing: border-box;
}

.Picture {
  height: 50%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.pic1 { background-image: url("userAccount3.jpg"); }
.pic2 { background-image: url("userAccount4.jpg"); }
.pic3 { background-image: url("userAccount1.jpg"); }
.pic4 { background-image: url("signup1.jpg"); }
.pic5 { background-image: url("userAccount2.jpg"); }
.pic6 { background-image: url("signin1.jpg"); }







label{
	font-family=sans-serif;
	font-size: 18px;
	font-style: italic;
}


input#submit{
	
	background-color: rgba(30, 139, 195, 1);
	width:500px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:25%;
	left:50%;
	transform: translate(-50%, -50%);
}
input#submit:hover{
     background: #383;
}


input#SetPlan{
	
	background-color: rgba(30, 139, 195, 1);
	width:320px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:65%;
	left:20%;
	transform: translate(-50%, -50%);
}
input#SetPlan:hover{
     background: #383;
}


input#CreatePlan{
	
	background-color: rgba(30, 139, 195, 1);
	width:320px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:65%;
	left:80%;
	transform: translate(-50%, -50%);
}
input#CreatePlan:hover{
     background: #383;
}


input#SeePlan{
	
	background-color: rgba(30, 139, 195, 1);
	width:320px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:80%;
	left:50%;
	transform: translate(-50%, -50%);
	
}
input#SeePlan:hover{
     background: #383;
}


input#nutrition{
	
	background-color: rgba(30, 139, 195, 1);
	width:320px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:140%;
	left:50%;
	transform: translate(-50%, -50%);	
}
input#nutrition:hover{
     background: #383;
}


input#Exercise{
	
	background-color: rgba(30, 139, 195, 1);
	width:320px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:170%;
	left:50%;
	transform: translate(-50%, -50%);	
}
input#Exercise:hover{
     background: #383;
}


input#muscleEquip{
	
	background-color: rgba(30, 139, 195, 1);
	width:700px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:230%;
	left:50%;
	transform: translate(-50%, -50%);	
}
input#muscleEquip:hover{
     background: #383;
}




input#log{
	
	background-color: rgba(30, 139, 195, 1);
	width:700px;
	padding: 7px;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;	
	cursor : pointer;
	position: absolute;
	top:275%;
	left:50%;
	transform: translate(-50%, -50%);	
}
input#log:hover{
     background: #383;
}



label,span,h2{
	text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}


.Details span {	

	position: absolute;
	top:10%;
	left:10%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}


.Details1 span {	
	position: absolute;
	top:20%;
	left:10%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}


.Details2 span {	
	position: absolute;
	top:30%;
	left:10%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}



.Details3 span {	
	position: absolute;
	top:10%;
	left:80%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}



.Details4 span {	
	position: absolute;
	top:20%;
	left:80%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}

.Details5 span {	
	position: absolute;
	top:30%;
	left:80%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}

.Details6 span {	
	position: absolute;
	top:10%;
	left:90%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}

.Details7 span {	
	position: absolute;
	top:20%;
	left:90%;
	transform: translate(-50%,-50%);
	background-color: rgba(30, 139, 195, 1);
	width= 110%;
	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;		
}




</style>
</head>
<body>


<div class="Picture pic1"></div>
<div class="Picture pic2"></div>
<div class="Picture pic3"></div>
<div class="Picture pic4"></div>
<div class="Picture pic5"></div>
<div class="Picture pic6"></div>


<div class="main">


<form id="Details" method="post">
	<input type="button" id="submit" value="User Details" name="details">
</form>

<form id="SetPlan" action="/seeAllPlans.php" method="post">
    <input type="submit" id="SetPlan" value="Select a existing plan" name="SetPlan">
</form>


<form id="CreatePlan" action="/CreateNewPlan.php" method="post">
	<input type="submit" id="CreatePlan" value="Create a new plan" name="CreatePlan">
</form>

<form id="SeePlan" action="/seeCurrentPlan.php" method="post">
	<input type="submit" id="SeePlan" value="View current plan" name="SeePlan">
</form>

<form id="nutrition" action="/seenutrition.php" method="post">
	<input type="submit" id="nutrition" value="Click to see nutrition" name="nutrition">
</form>

<form id="Exercise" action="/seeExerise.php" method="post">
	<input type="submit" id="Exercise" value="Click to see Exercise table" name="Report">
</form>


<form id="muscleEquip" action="/muscleEquip.php" method="post">
	<input type="submit" id="muscleEquip" value="Click to see muscleGroups and equipment need for each exercise" name="muscleEquip">
</form>

<form id="log" action="/setLog.php" method="post">
	<input type="submit" id="log" value="Click to Log" name="log">
</form>

<script>
	var php_var = "<?php echo $UserName; ?>";
    localStorage.setItem("firstname", php_var);
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
	echo "connection successful."."<br>";
	
}
else
{
	die("Could not connectA");
}



$q1 = "SELECT * FROM UserAccount where USERNAME='".$_POST["UserName"]."' AND PASSWORD='".$_POST["Pass"]."'";
$query_id = oci_parse($conn, $q1); 		
	$r = oci_execute($query_id); 

$A=oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS);

$Z=$_POST["UserName"];

$B="";
$C="";
$D="";
$E="";
$F="";
$G="";




if($A['USERNAME']!=$UserName or $A['PASSWORD']!=$Pass)
{ 


	header("Location: /signIn.php");
}



$q2 = "SELECT * FROM UserAccount where USERNAME='".$Z."'";
	  
$query_id2 = oci_parse($conn, $q2); 		
$r2 = oci_execute($query_id2); 


if (!$r2) {
  die('Error');
}

echo"<hr>"; 
	 while($row = oci_fetch_array($query_id2, OCI_BOTH+OCI_RETURN_NULLS)) 
	 { 
		//echo $row["FNAME"]." ".$row["LNAME"]." ".$row["UNAME"]." ".$row["PASSWORD"]." ".$row["WKILOS"]." ".$row["HEIGHT"]."<br>"; 
		$B=$row["USERNAME"];
		$C=$row["PASSWORD"];
		$D=$row["NAME"];
		$E=$row["AGE"];
		$F=$row["HEIGHT"];
		$G=$row["WEIGHT"];
		$H=$row["BMI"];
		$I=$row["PLANID"];
		//$J=$row["TotalReward"];
	 }



?>





<p class="Details">
<span>User name: <?php echo $B; ?></span>
</p>

<p class="Details1">
<span>Password: <?php echo $C; ?></span>
</p>

<p class="Details2">
<span>Name : <?php echo $D; ?></span>
</p>

<p class="Details3">
<span>Age : <?php echo $E; ?></span>
</p>

<p class="Details4">
<span>Height : <?php echo $F; ?></span>
</p>

<p class="Details5">
<span>Weight : <?php echo $G; ?></span>
</p>

<p class="Details6">
<span>BMI : <?php echo $H; ?></span>
</p>

<p class="Details7">
<span>PlanId : <?php echo $I; ?></span>
</p>









</body>
</html>
