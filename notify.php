<?php 
		require 'connect.inc.php';
		require 'core.fac.php';
		$facid=$_SESSION['user_fac_id'];
		
		if(!empty($_POST['clgid']) and !empty($_POST['notify']))
		{
			$clgid=$_POST['clgid'];
			$notify=$_POST['notify'];
			$searchquery=mysql_query("select * from `student` where `stud_id`='$clgid'");
			$rows=mysql_num_rows($searchquery);
			if($rows)
			{
				while($qd=mysql_fetch_assoc($searchquery))
				{
					$sid=$qd['id'];
				}

				$insert_query=mysql_query("insert into notification(note,stud_id,fac_id) values('$notify','$sid','$facid')");

				if($insert_query)
				{
					echo 'Notified Successfully';
				}
				else
				{
					echo 'Problem in notification';
				}
				
			}
			else
			{
				echo 'No student of this id is found in our record.';
			}
			
		}
		else
		{
			echo 'Please fill both fields';
		}
		
?>