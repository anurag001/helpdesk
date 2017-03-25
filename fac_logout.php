<?php
	require 'core.fac.php';
	require 'connect.inc.php';
	
					if(loggedinfac())
					{
						session_destroy();
						header('Location:'.$http_referer);
					}
					else
					{
						header('location:fac_login.php');
					}

?>