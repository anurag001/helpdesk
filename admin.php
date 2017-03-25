<!DOCTYPE html>
<html lang="eng">
	<head>
			<meta charset="utf-8"/>
			<title>Add_Student</title>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<script type="text/javascript" src="./scripts/jquery.js"></script>
			<link rel="stylesheet" href="./css/form.css"/>
			<link rel="stylesheet" href="./css/font.css"/>
			<?php include'connect.inc.php';?>
			<style>
			#bgimg{
				background-image:url(./images/hlp.jpg);
				background-size: cover;
			    position:relative;
				margin:0px;
				width:100%;
				height:450px;
				background-repeat:no-repeat;
				
			}
			body{
					background-color:rgb(189,240,213);
			}
			</style>
	</head>
	<body>
	<div id="bgimg">
		<div id="add_student">
			<form action="reg_stud.php" method="post">
			<span id="add_head">Student Registration</span>
			<br><br>
				<input type="text" name="stud_id" id="stud_id" placeholder="ID No." required="required">
			<br><br>
				<input type="text" name="name" id="name" placeholder="Name" required="required">
			<br><br>
				<input type="text" name="gender" id="gender" placeholder="Gender" required="required">
			<br><br>
				<input type="number" name="age" id="age" placeholder="Age" required="required">
			<br><br>
				<input type="text" name="address" id="address" placeholder="Address" required="required">
			<br><br>
				<input type="number" name="mob_number" id="mob_number" placeholder="Mobile No." required="required">
			<br><br>
				<input type="text" name="stream" id="stream" placeholder="Stream" required="required">
			<br><br>
				<input type="Email" name="email" id="email" placeholder="Email" required="required">
			<br><br>
				<input type="password" name="password" id="password" placeholder="Password" required="required">
			<br><br>
				<input type="submit" name="submit" id="submit" value="Register Here">
			</form>
		</div>
	</div>
	<div style="font-family:robob;font-size:1.7em;margin-bottom:10px;float:right;z-index:5;text-shadow:0px 0px 10px #fff;"> Student Registration Here<br>Complete Administrator Access</div>
	</body>
</html>