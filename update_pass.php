<?php
	require 'connect.inc.php';
	require 'core.fac.php';
	$id=$_SESSION['user_id'];
	
	$old=$_POST['oldp'];
	$new=$_POST['newp'];
	if(!empty($old) and !empty($new))
	{
	$query=mysql_query("select * from `student` where `id`='$id'");
	echo mysql_error();

	while($data=mysql_fetch_array($query))
	{
		
		if($data['password']==$old)
		{
			$upd_query=mysql_query("update `student` set `password`='$new' where `id`='$id'");
			if($upd_query)
			{
				echo 'Password updated successfully';
			}
			else
			{
				echo 'Problem in password updation';
			}
		}
		else{
			echo 'Old password doesn\'t matched';
			echo mysql_error();

		}
	}
	}
	else
	{
		echo 'Please fill required fields';
	}
?>