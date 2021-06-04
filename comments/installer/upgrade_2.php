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
<title>Installer</title>
<meta name="robots" content="noindex"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
</head>
<body>

<img src="../images/commentics/logo.png" class="logo" title="Commentics" alt="Commentics"/>

<br />

<?php
/* Error Reporting */
@error_reporting(-1); //show every possible error
@ini_set('display_errors', 1); //display errors
?>

<?php
define('IN_COMMENTICS', 'true');
define('CMTX_IN_INSTALLER', 'true');
?>

<?php
require 'functions/upgrade.php';
require '../includes/functions/page.php';
?>

<?php
if (isset($_POST['submit'])) {
	$installed_version = $_POST['installed_version'];
	$latest_version = $_POST['latest_version'];
} else {
	echo "<span class='fail'>";
	echo "Пожалуйста, перезапустите установку.";
	echo "</span>";
	die();
}
?>

<?php
require '../includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }
?>

<?php
cmtx_set_time_zone(cmtx_setting('time_zone')); //set the time zone
?>

<?php
$admin_folder = cmtx_setting('admin_folder');
?>

<?php
$error = false;
?>

<?php
switch ($installed_version) {
	case '2.3':
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '2.2':
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '2.1':
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '2.0':
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.8':
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.7':
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.6':
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.5':
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.4':
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.3.5':
	require_once 'upgrade_sql/1.3.5-to-1.4.php';
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.3':
	require_once 'upgrade_sql/1.3-to-1.3.5.php';
	require_once 'upgrade_sql/1.3.5-to-1.4.php';
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.2':
	require_once 'upgrade_sql/1.2-to-1.3.php';
	require_once 'upgrade_sql/1.3-to-1.3.5.php';
	require_once 'upgrade_sql/1.3.5-to-1.4.php';
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.1':
	require_once 'upgrade_sql/1.1-to-1.2.php';
	require_once 'upgrade_sql/1.2-to-1.3.php';
	require_once 'upgrade_sql/1.3-to-1.3.5.php';
	require_once 'upgrade_sql/1.3.5-to-1.4.php';
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
	case '1.0':
	require_once 'upgrade_sql/1.0-to-1.1.php';
	require_once 'upgrade_sql/1.1-to-1.2.php';
	require_once 'upgrade_sql/1.2-to-1.3.php';
	require_once 'upgrade_sql/1.3-to-1.3.5.php';
	require_once 'upgrade_sql/1.3.5-to-1.4.php';
	require_once 'upgrade_sql/1.4-to-1.5.php';
	require_once 'upgrade_sql/1.5-to-1.6.php';
	require_once 'upgrade_sql/1.6-to-1.7.php';
	require_once 'upgrade_sql/1.7-to-1.8.php';
	require_once 'upgrade_sql/1.8-to-2.0.php';
	require_once 'upgrade_sql/2.0-to-2.1.php';
	require_once 'upgrade_sql/2.1-to-2.2.php';
	require_once 'upgrade_sql/2.2-to-2.3.php';
	require_once 'upgrade_sql/2.3-to-2.4.php';
	break;
}
?>

<?php
if (!$error) {

mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "version` (`version`, `type`, `dated`) VALUES ('$latest_version', 'Upgrade', NOW());");

if (mysql_errno()) {
echo mysql_errno() . ': ' . mysql_error() . '<br />';
$error = true;
}

}
?>

<?php
if ($error) {
echo "<br />";
echo "<span class='fail'>" . "Обновление невозможно." . "</span>";
echo "<p></p>";
echo "Пожалуйста, прокосультируйтесь по поводу этой ошибки.";
} else {
echo "<span class='success'>" . "Обновление завершено." . "</span>";
echo "<p></p>";
echo "Теперь Вы используете последнюю версию скрипта.";
echo "<p></p>";
echo "1. Пожалуйста удалите или переименуйте папку /installer/";
echo "<br />";
echo "<i>http://www.domain.com/comments<b>/installer/</b></i>";
echo "<p></p>";
echo "2. Перейдите в <a href='../$admin_folder/'>панель администратора</a>.";
}
?>

</body>
</html>