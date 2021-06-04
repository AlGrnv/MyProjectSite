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
require 'version/version.php';
require 'functions/upgrade.php';
?>

<?php
require '../includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }
?>

<?php
if (mysql_num_rows(mysql_query("SHOW TABLES LIKE '" . $cmtx_mysql_table_prefix . "comments'")) == 0) {
echo "<span class='fail'>Таблицы в базе данных отсутствуют.</span>";
echo "<p></p>";
echo "<span class='fail'>Вы уверены, что скрипт Commentics установлен?</span>";
echo "<p></p>";
echo "<a href='javascript:history.back()'>back</a>";
echo "</body>";
echo "</html>";
die();
}
?>

<?php
$installed_version = cmtx_get_version();
?>

<?php
echo "<label class='upgrade_item'>Установленная версия:</label>" . $installed_version;
echo "<p></p>";
echo "<label class='upgrade_item'>Последняя версия:</label>" . $latest_version;
echo "<p></p>"
?>

<?php
if ($installed_version == $latest_version) {
	echo "<span class='fail'>У Вас уже установлена последняя версия.</span>";
	echo "<p></p>";
	echo "<a href='javascript:history.back()'>back</a>";
} else {
?>

<form name="upgrade" id="upgrade" action="upgrade_2.php" method="post">
<input type="hidden" name="installed_version" value="<?php echo $installed_version; ?>"/>
<input type="hidden" name="latest_version" value="<?php echo $latest_version; ?>"/>
<input type="submit" class="button" name="submit" value="Обновить" title="Обновить"/>
</form>

<?php } ?>

</body>
</html>