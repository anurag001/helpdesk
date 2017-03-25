<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	
					if(loggedin())
					{
						$active0=mysql_query("UPDATE `record` SET `active`=0 WHERE `id`=".$_SESSION['user_id']." ");	
						
						session_destroy();
						header('Location:'.$http_referer);
					}
					else
					{
						header('location:main.php');
					}

?>