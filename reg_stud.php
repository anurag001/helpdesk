<!DOCTYPE html>
<html lang="eng">
	<head>
			<meta charset="utf-8"/>
			<title>Add_Student</title>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<script type="text/javascript" src="./scripts/jquery.js"></script>
			<link rel="stylesheet" href="./css/form.css"/>
			<link rel="stylesheet" href="./css/font.css"/>
			<body style="background:radial-gradient(#fff,skyblue,#fff);">
			<div id="result-head">
			<a href="main_login.php" style="text-decoration:none;color:rgb(184,37,6);">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="fachead.php" style="text-decoration:none;color:rgb(184,37,6);">Add Facility Head</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="admin.php" style="text-decoration:none;color:rgb(184,37,6);">Add Student</a>
			</div>
			<div id="result-box">
<?php
	include_once'connect.inc.php';
	$stud_id=$_POST['stud_id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$mob_no=$_POST['mob_number'];
	$stream=$_POST['stream'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$reg_query=mysql_query("insert into student(stud_id,name,gender,age,address,mobi,stream,email,password) values('$stud_id','$name','$gender','$age','$address','$mob_no','$stream','$email','$password')");
	if($reg_query)
	{
		echo $name.' is Successfully Registered as a student';
	}
	else
	{
		echo 'Sorry,there is some problem in registration.Please try again.';
	}

?>
			</div>
			<br>
			<div id="remove-list">
			<a href="remove.php" style="text-decoration:none;color:rgb(184,37,6);">Remove Student/Facility Head</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</body>
</html>
	