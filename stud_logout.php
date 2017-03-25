<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	
					if(loggedin())
					{
						session_destroy();
						header('Location:'.$http_referer);
					}
					else
					{
						header('location:stud_login.php');
					}

?>