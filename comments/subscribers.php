<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Subscribers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="noindex"/>
<style type="text/css"><!--
.info, .success, .warning, .error {
border: 1px solid;
margin: 10px 0px;
padding: 15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
position: relative;
float: left;
}

.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('images/messages/information.png');
}

.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image: url('images/messages/success.png');
}

.warning {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('images/messages/warning.png');
}

.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('images/messages/error.png');
}--></style>
</head>
<body>

<?php
define('IN_COMMENTICS', 'true');

//temporary solution while transitioning from 'uid' to 'id'
if (isset($_GET['uid'])) {
	$_GET['id'] = $_GET['uid'];
}

//set the path
$cmtx_path = '';

/* Database Connection */
require 'includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }

//load functions file
require 'includes/functions/page.php';

//load language file
require 'includes/language/' . cmtx_setting('language_frontend') . '/subscribers.php';

if (!cmtx_setting('enabled_notify')) {
	die(CMTX_SUB_FEATURE_DISABLED);
}

if (!cmtx_is_administrator()) { //if not administrator
	if (cmtx_in_maintenance()) { //check if under maintenance
		die();
	}
}

/* Error Reporting */
cmtx_error_reporting('includes/logs/errors.log');

/* Time Zone */
cmtx_set_time_zone(cmtx_setting('time_zone'));

function cmtx_validate_token ($entry) { //validate user-supplied GET token

	if (cmtx_strlen($entry) != 20 || !ctype_alnum($entry)) {
		?><div class="error"><?php echo CMTX_INVALID; ?></div><?php
		die();
	}

} //end of validate-token function

function cmtx_sanitize_token ($entry) { //sanitize user-supplied GET token

	$entry = cmtx_sanitize($entry, true, true);
	
	return $entry;

} //end of sanitize-token function


function cmtx_validate_action ($entry) { //validate user-supplied GET action

	if ($entry != 1) {
		?><div class="error"><?php echo CMTX_INVALID; ?></div><?php
		die();
	}

} //end of validate-action function


if (isset($_GET['id']) && isset($_GET['confirm']) && !isset($_GET['unsubscribe'])) { //confirm

	$token = $_GET['id'];

	cmtx_validate_token($token);
	cmtx_sanitize_token($token);
	cmtx_validate_action($_GET['confirm']);

	if (mysql_num_rows(mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `token` = '$token' AND `is_confirmed` = '0'"))) {
		mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "subscribers` SET `is_confirmed` = '1' WHERE `token` = '$token'");
		?><div class="success"><?php echo CMTX_CONFIRMED; ?></div><?php
	} else if (mysql_num_rows(mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `token` = '$token' AND `is_confirmed` = '1'"))) {
		?><div class="warning"><?php echo CMTX_ALREADY_CONFIRMED; ?></div><?php
	} else {
		?><div class="error"><?php echo CMTX_NO_SUBSCRIPTION; ?></div><?php
	}

} else if (isset($_GET['id']) && !isset($_GET['confirm']) && isset($_GET['unsubscribe'])) { //unsubscribe

	$token = $_GET['id'];

	cmtx_validate_token($token);
	cmtx_sanitize_token($token);
	cmtx_validate_action($_GET['unsubscribe']);	

	if (mysql_num_rows(mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `token` = '$token'"))) {
		mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `token` = '$token'");
		?><div class="success"><?php echo CMTX_UNSUBSCRIBED; ?></div><?php
	} else {
		?><div class="error"><?php echo CMTX_NO_SUBSCRIPTION; ?></div><?php
	}

} else { //invalid
	?><div class="error"><?php echo CMTX_INVALID; ?></div><?php
}
?>

</body>
</html>