<?php
session_start();
if(!(isset($_SESSION['shef_hockey_user_logged']) && $_SESSION['shef_hockey_user_logged'] != ""))
{
	$guest = 1;
}
if(empty($_GET['auth_token']))
{
	define('SEC_LVL', $_SESSION['shef_hockey_user_securitylevel']);
	define('USR_LOGGED', $_SESSION['shef_hockey_user_logged']);
	define('USR_ID', $_SESSION['shef_hockey_user_id']);
	define('USR_ARC', $_SESSION['shef_hockey_user_archived']);
	define('SID',$_SESSION['shef_hockey_session_id']);
}
?>