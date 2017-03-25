<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8"/>
			<title>people live</title>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<script type="text/javascript" src="./scripts/jquery.js"></script>
			<link rel="stylesheet" href="./css/signup.css"/>
			<link rel="stylesheet" href="./css/font.css"/>
			<?php 
				require 'connect.inc.php';
				require 'core.fac.php';
			?>
			<style>
				#login-head{
					width:100%;
					height:40px;
					background-color:rgb(46,75,162);
					position:fixed;
					font-family:robom;
					color:#fff;
					font-size:1.1em;
					z-index:10;
				}
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
					height:140px;
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
				}
				#send-notify{
					margin-top:100px;
					margin-left:140px;
					font-family:robom;
					font-size:1.3em;
					display:none;
				}
				#notify{
					height:60px;
					width:300px;
					padding-left:5px;
					font-family:robol;
					font-size:1.0em;
				}
				#stud-send-id{
					height:60px;
					width:300px;
					padding-left:5px;
					font-family:robol;
					font-size:1.0em;
				}
				#submitnotify{
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
				#notify-result{
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
					margin-top:35px;
					margin-left:30px;
					font-family:robom;
					font-size:1.3em;
					height:500px;
					overflow:scroll;
				}
				#tithead{
					font-family:robom;
					font-size:1.3em;
					text-align:center;
				}
				#box{
					height:auto;
					width:350px;
					background-color:#fff;
					border:1px solid gray;
					border-radius:5px;
					box-shadow:0px 2px 5px gray;
				}
				a{
					text-decoration:none;
				}
				#bydefault{
					display:none;
				}
			</style>
			<body>
				<?php 
				if(loggedinfac())
				{
					$id=$_SESSION['user_fac_id'];
					$query_run=mysql_query("select * from `fachead` where `id`='$id'");
					while($data=mysql_fetch_assoc($query_run))
					{
				?>
				<div id="login-head">
					<span id="title-head"><?php echo 'Hi '.$data['name'].' welcome to facility head e-HelpDesk'; ?></span>
					<span id="service">Services</span>
					<span id="logout"><a href="stud_logout.php">Logout</a></span>
					<ul id="nav-bar">
						<li id="checkrequest">Check Request</li><hr>
						<li id="sendnot">Send Proper Notification</li><hr>
						<li id="close">Close [ X ]</li>
					</ul>
					<img id="nav-img" src="./images/1.png" alt="HelpDesk"/>
				</div>
				<div id="response">
				<!---------------------------------------------------------------------------------->
					<div id="bydefault">
						<img src="./images/21.jpg" alt="default"/>
						<br>
						<p style="text-align:center;font-family:robom;text-shadow:1px 1px 3px gray;">go to services and choose require once</p>
					</div>
					<!-----------------------                            ----------------------------->
					<div id="send-notify">
						<legend style="font-size:1.3em;font-family:ralewayreg;text-align:center;">Give Notification to Student</legend>
						<form id="submit-query" method="post">
							<input type="text" name="notify" id="notify" placeholder="Notification to student" required="required"/>
							<br>
							<input type="text" name="stud-send-id" id="stud-send-id" placeholder="Unique id of student" required="required"/>
							<br><br>
							<input type="submit" name="submitnotify" id="submitnotify" value="Submit Query"/>
						</form>
						<br>
						<div id="notify-result">
							
						</div>
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
									$stud_query=mysql_query("select * from `student` where `id`='$studid'");
									while($std=mysql_fetch_assoc($stud_query))
									{
										echo '<i>'.$std['stud_id'].' '.$std['name'].'</i><br>';
									}
									echo '<b>'.$data['query'].'</b>';
							?>
								<br>
							<?php 
								if($data['flag']==1)
								{
							?>
								<a href="approve.php?qid=<?php echo $data['query_id'];?>">Approve</a>&nbsp;&nbsp;
							<?php
								}
								else
								{
							?>
								<a href="disapprove.php?qid=<?php echo $data['query_id'];?>">Disapprove</a>
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
				<img src="./images/21.jpg" alt="default" style="float:right;margin-top:300px;"/>
				<br>
				<img src="./images/31.jpg" alt="default" style="float:right;margin-top:150px;"/>
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
					$("#sendnot").click(function(){
						$("#send-notify").fadeIn();
						$("#check-request").hide();
						$("#bydefault").hide();
					});
					$("#checkrequest").click(function(){
						$("#send-notify").hide();
						$("#check-request").fadeIn();
						$("#bydefault").hide();

					});
					
					$("#submitnotify").click(function(e){
						e.preventDefault();
						var clgid=$("#stud-send-id").val();
						var notify=$("#notify").val();
						console.log(clgid+notify);
						$.ajax({
							url:'notify.php',
							type:"post",
							data:'clgid='+clgid+'&notify='+notify,
							success:function(res)
							{
								$("#notify-result").html(res);
							}
						});
					});
				</script>
			</body>
	</head>
</html>
