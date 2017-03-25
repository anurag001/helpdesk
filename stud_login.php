<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8"/>
			<title>student login</title>
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
					background-color:#f7f7f7;
				}
				#login-head{
					width:100%;
					height:50px;
					background-color:rgb(31,171,101);
					position:fixed;
					font-family:robom;
					color:#fff;
					font-size:1.2em;
					z-index:10;
					text-align:center;
					padding-top:3px;
					text-shadow:0px 0px 10px #fff;
				}
				#service{
					height:40px;
					border:1px solid #fff;
					color:#fff;
					float:left;
					border-radius:3px;
					width:200px;
					cursor:pointer;
					padding-top:3px;
					box-shadow:0px 0px 3px #fff;
					text-shadow:0px 0px 2px #fff;
				}
				#logout a{
					height:40px;
					border:1px solid #fff;
					color:#fff;
					float:right;
					border-radius:3px;
					text-decoration:none;
					width:200px;
					padding-top:3px;
					box-shadow:0px 0px 3px #fff;
					text-shadow:0px 0px 2px #fff;
				}
				#nav-bar{
					list-style-type:none;
					padding:5px;
					color:rgb(31,171,101);
					text-align:center;
					border:2px solid rgb(31,171,101);
					border-radius:5px;
					height:120px;
					width:190px;
					background-color:#fff;
					position:fixed;
					top:40px;
					z-index:5;
					display:none;
				}
				#nav-bar li:hover{
					background-color:rgb(31,171,101);
					color:#fff;
					cursor:pointer;
				}
				#nav-img{
					position:absolute;
					float:left;
					top:60px;
					height:200px;
					width:160px;
					right:0px;
				}
				#response{
					position:absolute;
					top:70px;
					left:210px;
					border:1px solid black;
					height:550px;
					width:550px;
					box-shadow:0px 4px 60px gray; 
				}
				#update{
					margin-top:100px;
					margin-left:200px;
					font-family:robom;
					font-size:1.0em;
					display:none;
				}
				#old{
					height:29px;
					width:190px;
				}
				#new{
					height:29px;
					width:190px;
				}
				#updatepass{
					height:32px;
					width:193px;
					border:2px solid #fff;
					box-shadow:0px 0px 3px black;
					border-radius:3px;
					cursor:pointer;
					background-color:red;
					color:#fff;
					font-family:ralewayreg;
					font-size:1.0em;
				}
				#update-result{
					color:green;
					background-color:rgb(132,244,149);
					padding:5px;
					font-family:robol;
					text-align:center;
					height:50px;
					width:200px;
					margin-top:5px;
					padding:5px;
					display:none;
				}
				#submit-request{
					margin-top:100px;
					margin-left:140px;
					font-family:robom;
					font-size:1.3em;
					display:none;
				}
				#query{
					height:60px;
					width:300px;
					padding-left:5px;
					font-family:robol;
					font-size:1.0em;
				}
				#submitquery{
					height:34px;
					width:306px;
					border:2px solid #fff;
					box-shadow:0px 0px 3px black;
					border-radius:3px;
					cursor:pointer;
					background-color:red;
					color:#fff;
					font-family:ralewayreg;
					font-size:1.0em;
				}
				#query-result{
					color:green;
					background-color:rgb(132,244,149);
					padding:5px;
					font-family:robol;
					text-align:center;
					height:60px;
					width:300px;
					margin-top:5px;
					padding:5px;
					
				}
				#check-request{
					margin-top:20px;
					margin-left:29px;
					font-family:robom;
					font-size:1.3em;
					height:500px;
					overflow:scroll;
					display:none;
				}
				#tithead{
					font-family:robom;
					font-size:1.3em;
					text-align:center;
				}
				#box{
					height:auto;
					width:380px;
					background-color:#fff;
					border:1px solid gray;
					border-radius:5px;
					box-shadow:0px 2px 5px gray;
				}
				a{
					text-decoration:none;
				}
				#student-detail{
					position:absolute;
					left:800px;
					height:540px;
					width:300px;
					border:2px solid black;
					top:70px;
					text-align:center;
					font-family:robob;
					color:rgb(23,97,170);
					box-shadow:0px 5px 10px rgb(96,97,90);
					font-size:1.1em;
				}
				#my-notification{
					margin-top:30px;
					margin-left:30px;
					font-family:robom;
					font-size:1.3em;
					display:none;
					overflow:scroll;
				}
			</style>
			<body>
				<?php 
				if(loggedin())
				{
					$id=$_SESSION['user_id'];
					$query_run=mysql_query("select * from `student` where `id`='$id'");
					while($data=mysql_fetch_assoc($query_run))
					{
				?>
				<div id="login-head">
					<span id="title-head"><?php echo 'Hi '.$data['name'].' welcome to student e-HelpDesk service'; ?></span>
					<span id="service">Services</span>
					<span id="logout"><a href="stud_logout.php">Logout</a></span>
					<ul id="nav-bar">
						<li id="changepass">Change Password</li>
						<li id="checkstatus">Check Status</li>
						<li id="subreq">Submit Request</li>
						<li id="mynote">My notification</li>
						<li id="close">Close [ X ]</li>
					</ul>
					<img id="nav-img" src="./images/1.png" alt="HelpDesk"/>
				</div>
				<div id="response">
					<div id="bydefault">
						<img src="./images/21.jpg" alt="default"/>
						<br>
						<p style="text-align:center;font-size:1.1em;font-family:robom;text-shadow:1px 1px 3px gray;">Go to services and choose your needs</p>
						<br>
						<img src="./images/41.jpg" alt="default"/>
						<br>
						<p style="text-align:center;font-size:1.1em;font-family:robom;text-shadow:1px 1px 3px gray;">We provide better needs to our students.</p>

					</div>
					<div id="update">
						<legend style="font-size:1.5em;text-align:center;">Change Password</legend>
						<br>
					
						<form method="post" id="update_pass">
							<input type="password" id="old" name="old" placeholder="Your Old Password" required="required"/>
							<br><br>
							<input type="password" id="new" name="new" placeholder="Your New Password"  required="required"/>
							<br><br>
							<input type="submit" name="updatepass" id="updatepass" value="Update">
						</form>
						<br>
						<div id="update-result">
						
						</div>
					</div>
					<div id="submit-request">
						<legend style="font-size:1.6em;font-family:ralewayreg;text-align:center;">Submit Request</legend>
						<form id="submit-query" method="post">
							<input type="text" name="query" id="query" placeholder="Your request/query" required="required"/>
							<br><br>
							<input type="submit" name="submitquery" id="submitquery" value="Submit Query"/>
						</form>
						<br>
						<div id="query-result">
						
						</div>
					</div>
					<div id="my-notification">
						<span id="tithead">My notification</span><br><hr>
						<?php 
							
							$notify_query=mysql_query("select * from `notification` where `stud_id`='".$_SESSION['user_id']."'");
							while($datap=mysql_fetch_assoc($notify_query))
							{
							?>
							<div id="box">
							<?php
									$facid=$datap['fac_id'];
									$call_query=mysql_query("select * from `fachead` where `id`='$facid'");
									while($std=mysql_fetch_assoc($call_query))
									{
										echo $datap['note'].'<br><i>Given by Facility Head:</i> '.$std['name'];
									}
							?>
							</div>
							<br>
							<?php

							}
							?>
					</div>
					<div id="check-request">
						<span id="tithead">Query list of students</span><br><hr>
						<?php 
							
							$query_query=mysql_query("select * from `query`");
							while($data=mysql_fetch_assoc($query_query))
							{
							?>
							<div id="box">
							<?php
									$studid=$data['stud_id'];
									echo $data['query'];
							?>
								<br>
							<?php 
								if($data['flag']==1)
								{
							?>
									<span style="color:red;font-size:1.1em;">Disapproved</span>
							<?php
								}
								else
								{
							?>
								<span style="color:green;font-size:1.1em;">Approved</span>&nbsp;&nbsp;
							<?php
								}
								
							?>
							</div>
							<br>
							<?php

							}
							?>
					</div>
				</div>
				<div id="student-detail">
				<?php 
				$query_run=mysql_query("select * from `student` where `id`='".$_SESSION['user_id']."'");
				while($data=mysql_fetch_assoc($query_run))
				{
					echo 'Stud Id: '.$data['stud_id'].'<br><br>';
					echo 'Name: '.$data['name'].'<br><br>';
					echo 'Age: '.$data['age'].'<br><br>';
					echo 'Gender: '.$data['gender'].'<br><br>';
					echo 'Stream: '.$data['stream'].'<br><br>';
					echo 'Email: '.$data['email'].'<br><br>';
					echo 'Mobile no : '.$data['mobi'].'<br><br>';
					echo 'Address: '.$data['address'].'<br><br>';
				}
				?>
				</div>
				<?php
						
					}
					
				?>
				<?php
				
				}
				else
				{
					header('location:main_login.php');
				}
				?>
				<script>
					$("#service").click(function(){
						$("#nav-bar").slideDown();
					});
					$("#close").click(function(){
						$("#nav-bar").slideUp();
					});
					
				$("#changepass").click(function(){
					$("#update").fadeIn();
					$("#submit-request").hide();
					$("#check-request").hide();
					$("#bydefault").hide();
					$("#my-notification").hide();

				});
				$("#subreq").click(function(){
					$("#submit-request").fadeIn();
					$("#update").hide();
					$("#check-request").hide();
					$("#bydefault").hide();
					$("#my-notification").hide();

					
				});
				$("#checkstatus").click(function(){
					$("#check-request").fadeIn();
					$("#submit-request").hide();
					$("#update").hide();
					$("#bydefault").hide();
					$("#my-notification").hide();

				});
				$("#mynote").click(function(){
					$("#check-request").hide();
					$("#submit-request").hide();
					$("#update").hide();
					$("#bydefault").hide();
					$("#my-notification").fadeIn();
				});
				$("#updatepass").click(function(e){
										e.preventDefault();

					var oldp=$("#old").val();
					var newp=$("#new").val();
					$.ajax({
						url:'update_pass.php',
						type:"post",
						data:'oldp='+oldp+'&newp='+newp,
						success:function(res)
						{
							$("#update-result").fadeIn();
							$("#update-result").html(res);
						},
						complete:function(){}
					});
				});
				
				$("#submitquery").click(function(e){
					e.preventDefault();
					var query=$("#query").val();
					$.ajax({
						url:'student_query.php',
						type:"post",
						data:'query='+query,
						success:function(res)
						{
							$("#query-result").fadeIn();
							$("#query-result").html(res);
						},
						complete:function(){}
					});
				});
				</script>
			</body>
	</head>
</html>
