<?php
ob_start();
session_start();
if(isset($_SERVER['SCRIPT_NAME'])&&!empty($_SERVER['SCRIPT_NAME']))
{
	$current_file=$_SERVER['SCRIPT_NAME'];

}
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
{
	$http_referer=$_SERVER['HTTP_REFERER'];
}
function loggedinfac()
{
	if(!empty($_SESSION['user_fac_id']) and isset($_SESSION['user_fac_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>