<!DOCTYPE html>
<html lang="eng">
	<head>
			<meta charset="utf-8"/>
			<title>Add_Student</title>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<script type="text/javascript" src="./scripts/jquery.js"></script>
			<link rel="stylesheet" href="./css/remove.css"/>
			<link rel="stylesheet" href="./css/font.css"/>
			<?php include'connect.inc.php';?>
	</head>
	<body>
		<div id="main">
			<div id="select_stud">Student</div>			<div id="select_fac">Facility Head</div>
			<div id="student-list">
				<p style="font-family:vonique;font-size:1.6em;color:red;">Remove Student</p>
				<span id="student-head">Student List</span><br>
				<?php
					$query=mysql_query("select * from `student`");
					while($data=mysql_fetch_assoc($query))
					{
						echo $data['stud_id'].'   '.$data['name'].'   '.$data['gender'].'   '.$data['stream'].'   '.$data['email'];
					?>
						<a href="delete.php?rid=<?php echo $data['id']; ?>" style="text-decoration:none;color:red;">Delete</a>
						<br><br>
					<?php
					}
				?>
			</div>
			<br><br>
			<div id="facility-list">
				<p style="font-family:vonique;font-size:1.6em;color:red;">Remove Facility Head</p>
				<span id="facility-head">Facility List</span><br>
				<?php
					$query2=mysql_query("select * from `fachead`");
					while($datafh=mysql_fetch_assoc($query2))
					{
						echo $datafh['fac_id'].'   '.$datafh['name'].'   '.$datafh['gender'].'   '.$datafh['purpose'].'   '.$datafh['email'];
					?>
						<a href="deletefac.php?rid=<?php echo $datafh['id']; ?>" style="text-decoration:none;color:red;">Delete</a>
						<br><br>
					<?php
					}
				?>
			</div>
			</div>
			<script>
				$("#select_stud").click(function(){
					$("#student-list").fadeIn();
					$("#facility-list").fadeOut();
				});
				$("#select_fac").click(function(){
					$("#student-list").fadeOut();
					$("#facility-list").fadeIn();
				});
			</script>
	</body>
</html>