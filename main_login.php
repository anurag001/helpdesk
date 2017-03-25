<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8"/>
			<title>e-helpdesk</title>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<script type="text/javascript" src="./scripts/jquery.js"></script>
			<link rel="stylesheet" href="./css/signup.css"/>
			<link rel="stylesheet" href="./css/font.css"/>
			<?php 
				require 'connect.inc.php';
				require 'core.inc.php';
			?>
			<style>
			body{
				margin:0px;
				background-color:#dfe3ee;
			}
			#main{
				background-image:url(./images/bg.jpg);
				background-size: cover;
			    position:relative;
				margin:0px;
				width:100%;
				height:650px;
				z-index:10;
			}
			#title{
				position:absolute;
				font-family:vonique;
				font-size:5.5em;
				font-weight:strong;
				color:white;
				text-align:center;
				text-shadow:0px 0px 20px #fff;
				
			}
			#signclick_stud{
				border:2px solid #fff;
				border-radius:4px;
				font-family:robom;
				font-size:1.5em;
				height:40px;
				box-shadow:0px 0px 5px #fff;
				color:#fff;
				background-color:rgb(23,136,91);
				position:absolute;
				left:10px;
				top:120px;
				width:180px;
				cursor:pointer;
				text-align:center;
			}
			#signclick_stud:hover{
				background-color:green;
			}
			#signin_form_stud{
				border:1px solid black;
				box-shadow:0px 2px 2px #fff;
				position:absolute;
				top:120px;
				left:10px;
				width:190px;
				border-radius:4px;
				background-color:#fff;
				display:none;				
			}
			#signclick_fac{
				border:2px solid #fff;
				border-radius:4px;
				font-family:robom;
				font-size:1.5em;
				height:40px;
				box-shadow:0px 0px 5px #fff;
				color:#fff;
				background-color:rgb(23,136,91);
				position:absolute;
				left:320px;
				top:120px;
				width:230px;
				cursor:pointer;
				text-align:center;
			}
			#signclick_fac:hover,#reg_stud:hover,#reg_fac:hover{
				background-color:green;
			}
			#reg_fac{
				border:2px solid #fff;
				border-radius:4px;
				font-family:robom;
				font-size:1.5em;
				height:40px;
				box-shadow:0px 0px 5px #fff;
				color:#fff;
				background-color:rgb(23,136,91);
				position:absolute;
				left:1050px;
				top:120px;
				width:260px;
				cursor:pointer;
				text-align:center;
			}
			#reg_stud{
				border:2px solid #fff;
				border-radius:4px;
				font-family:robom;
				font-size:1.5em;
				height:40px;
				box-shadow:0px 0px 5px #fff;
				color:#fff;
				background-color:rgb(23,136,91);
				position:absolute;
				left:700px;
				top:120px;
				width:260px;
				cursor:pointer;
				text-align:center;
			}
			#signin_form_fac{
				border:1px solid black;
				box-shadow:0px 2px 2px #fff;
				position:absolute;
				top:120px;
				left:320px;
				width:230px;
				border-radius:4px;
				background-color:#fff;
				display:none;				
			}
			#logname{
				margin-top:5px;
				margin-left:5px;
				height:20px;
				padding:2px;
				border-radius:3px;
			}
			#logpass{
				margin-top:5px;
				margin-left:5px;
				height:20px;
				padding:2px;
				border-radius:3px;
			}
			#signin{
				margin-top:5px;
				margin-left:5px;
				height:40px;
				padding:3px;
				text-align:center;
				border-radius:3px;
				width:175px;
				background-color:#green;
				border:1px solid #fff;
				color:#fff;
				font-family:robob;
				font-size:1.2em;
				background-color:rgb(23,136,91);
				cursor:pointer;
			}
			#logname2{
				margin-top:5px;
				margin-left:5px;
				height:20px;
				padding:2px;
				width:205px;
				border-radius:3px;
			}
			#logpass2{
				margin-top:5px;
				margin-left:5px;
				height:20px;
				padding:2px;
				width:205px;
				border-radius:3px;
			}
			#signin2{
				margin-top:5px;
				margin-left:5px;
				height:40px;
				padding:3px;
				text-align:center;
				border-radius:3px;
				width:212px;
				background-color:#green;
				border:1px solid #fff;
				color:#fff;
				font-family:robob;
				font-size:1.2em;
				background-color:rgb(23,136,91);
				cursor:pointer;
			}
			#signin:hover{
				background-color:green;
			}
			#up{
				margin-top:2px;
				margin-left:40px;
				font-family:ralewayreg;
				font-size:1.2em;
				text-align:center;
				cursor:pointer;
			}
			#up2{
				margin-top:2px;
				margin-left:55px;
				font-family:ralewayreg;
				font-size:1.2em;
				text-align:center;
				cursor:pointer;
			}
			
			
			</style>
	</head>
	<body>
		<div id="main">		
			<span id="title">
				e-HelpDesk
			</span>
			<div id="signclick_stud">
				Student Log In
			</div>
			<div id="signin_form_stud">
				<form method="post" action="">
					<input type="text" id="logname" name="userlog" placeholder="EmailID" maxlength="30" required="required" autocomplete="off"/>
					<br><br>
					<input type="password" id="logpass" name="passlog" placeholder="Password" maxlength="30" required="required" autocomplete="off"/>
					<br><br>
					<input type="submit" id="signin" name="signin" value="Sign In">
					<hr>
					<span id="up">Move Up</span>
				</form>
			</div>
			<div id="stud_res">
			<?php
				if(isset($_POST['userlog']) and isset($_POST['passlog']))
				{
					$logid=$_POST['userlog'];
					$logpass=$_POST['passlog'];
					if(!empty($logid) and !empty($logpass))
					{
						$query=mysql_query("select `id` from `student` where `email`='$logid' and `password`='$logpass'");
						if(mysql_num_rows($query))
						{
							$user_id=mysql_result($query,0,'id');
							$_SESSION['user_id']=$user_id;
							header('location:stud_login.php');
						}					
						else{
							
							echo "<script type='text/javascript'>alert('Wrong Username/Password Please Try Again');</script>";
						}
					}
				}
			?>
			</div>
			<div id="signclick_fac">
				Facility Head Log In
			</div>
			<div id="signin_form_fac">
				<form method="post" action="">
					<input type="text" id="logname2" name="userlog2" placeholder="EmailID" maxlength="30" required="required" autocomplete="off"/>
					<br><br>
					<input type="password" id="logpass2" name="passlog2" placeholder="Password" maxlength="30" required="required" autocomplete="off"/>
					<br><br>
					<input type="submit" id="signin2" name="signin2" value="Sign In">
					<hr>
					<span id="up2">Move Up</span>
				</form>
			</div>
			<div id="fac_res">
			<?php
				if(isset($_POST['userlog2']) and isset($_POST['passlog2']))
				{
					$logid2=$_POST['userlog2'];
					$logpass2=$_POST['passlog2'];
					if(!empty($logid2) and !empty($logpass2))
					{
						$query=mysql_query("select `id` from `fachead` where `email`='$logid2' and `password`='$logpass2'");
						if(mysql_num_rows($query))
						{
							$user_fac_id=mysql_result($query,0,'id');
							$_SESSION['user_fac_id']=$user_fac_id;
							header('location:fac_login.php');
						}					
						else{
							
							echo "<script type='text/javascript'>alert('Wrong Username/Password Please Try Again');</script>";
						}
					}
				}
			?>
			</div>
			<div id="reg_stud">
				<a href="admin.php" style="text-decoration:none;color:#fff;">Register Student</a>
			</div>
			<div id="reg_fac">
				<a href="fachead.php" style="text-decoration:none;color:#fff;">Register Facility Head</a>
			</div>
			<a href="remove.php" style="text-decoration:none;color:#fff;font-family:robob;font-size:1.9em;float:right;margin-top:300px;border:1px solid #fff;text-shadow:0px 0px 20px black;padding:3px;border-radius:4px;">Remove Student/Facility Head</a>
			<div style="color:#fff;font-family:robob;font-size:1.2em;float:left;margin-top:250px;text-shadow:0px 0px 10px black;">We give proper access to our students.<br>Administrator has access to add and remove student as well facility head.<br>Student can query their request and they will get proper notification.<br>All queries are responded in time.<br>Complete relief to our student.<br>Use our e-helpdesk and explore it.</div>
			<script>
			$("#signclick_stud").click(function(){
				$("#signin_form_stud").slideDown();
				$("#up").click(function(){
					$("#signin_form_stud").slideUp();
				});
			});
			$("#signclick_fac").click(function(){
				$("#signin_form_fac").slideDown();
				$("#up2").click(function(){
					$("#signin_form_fac").slideUp();
				});
			});
			
			</script>
	</body>
</html>
	